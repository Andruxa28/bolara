<?php

namespace Orange\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Orange\Comments;
use Orange\Company;
use Orange\CompanyOfferParam;


class CompanyController extends SiteController
{

    public function __construct()
    {
      parent::__construct();
      $this->template = env('THEME').'.index';
    }

    public function mfo()
    {
        $vars = $this->vars;
        $page = DB::selectOne('SELECT * FROM page WHERE alias=:alias', ['alias'=>'microcredit']);
        if($page) {
            $page = DB::selectOne("SELECT * FROM page_description WHERE page_id=:alias AND language_code=:language", ['alias' => $page->id, 'language' => app()->getLocale()]);
            $data['meta_title'] = $data['og_title'] = $page->title;
            $data['meta_description'] = $data['og_description'] = $page->description;
        }
        else{
            abort(404, 'Page not found');
        }
        $companies = DB::select("SELECT * FROM companies WHERE status=:status", ['status'=>1]);
        $oldFirst = null;
        foreach ($companies as $key=> $make) {
            $i = $oldFirst == mb_substr($make->original_name, 0, 1) ? $oldFirst : mb_substr($make->original_name, 0, 1);
            $data['companies'][$i][$key]['name'] = $make->original_name;
            $data['companies'][$i][$key]['alias'] = $make->alias;
            $data['companies'][$i][$key]['rating'] = $make->company_rating;
        }
        $this->vars = array_add($this->vars,'data',$data);
        $this->vars = array_add($this->vars,'page',$page);
       // return view('orange.company_list', compact('data', 'page', 'vars'));
        $this->template = 'orange.company_list';

        return $this->renderOutput();

    }
    public function bank()
    {
        $companies = DB::select("SELECT * FROM companies WHERE status=:status", ['status'=>1]);
        $abcMarks = [];
        $oldFirst = null;
        foreach ($companies as $key=> $make) {
            $i = $oldFirst == mb_substr($make->original_name, 0, 1) ? $oldFirst : mb_substr($make->original_name, 0, 1);
            $data['companies'][$i][$key]['name'] = $make->original_name;
            $data['companies'][$i][$key]['alias'] = $make->alias;
            $data['companies'][$i][$key]['rating'] = $make->company_rating;
        }
        $data['meta_title'] = $data['og_title'] = 'Кредит онлайн на карту в Украине - BigOrange - сравнение финансовых услуг';
        $data['meta_description'] = $data['og_description'] = 'Cервис сравнения и подбора онлайн кредитов и депозитов в Украине ✓ Только проверенные организации ✓ Выбирай лучшие предложения';
        return view('orange.company_list', compact('data'));
    }

    public function show($id)
    {

        $data['company'] = DB::selectOne("SELECT * FROM companies WHERE alias=:alias", ['alias'=>$id]);

        if($data['company']){
            $data['company']->description = DB::selectOne("SELECT * FROM company_descriptions WHERE company_id=:company_id AND language_code=:language", ['company_id'=>$data['company']->id, 'language'=>app()->getLocale()]);
            $data['company']->param = CompanyOfferParam::where('company_id', $data['company']->id)->firstOrFail();
            $data['meta_title'] = $data['og_title'] = $data['h1'] = $data['company']->description->title;
            $data['meta_description'] = $data['og_description'] = $data['company']->description->description;
            $data['comments'][0]=array(
                'name'=>'Алиса',
                'comment'=>'Компания вроде не плохая, по началу как бы все нормально было… но работники у них - это ЖЕСТЬ!!!!! Не советую связываться с этой компанией!!!',
                'avatar'=>$this->reviewUserAvatar('Алиса'),
                'date'=>'17-09-2019',
                'rating'=>'3'
            );
            $data['comments'] = Comments::where('company_id', $data['company']->id)->where('status', 1)->get();
            foreach($data['comments'] as $key=> $comment){
                $data['comments'][$key]['avatar'] = $this->reviewUserAvatar($comment['name']);
                $data['comments'][$key]['date'] = date_format($comment['created_at'], 'd-m-Y');
            }

            $this->vars = array_add($this->vars,'data',$data);

            $this->template = 'orange.company_single';
            return $this->renderOutput();
        }else{
            abort(404, 'Page not found');
        }

    }

   public function reviewUserAvatar($name)
    {
        $name_ascii = substr(strtoupper(Str::ascii($name)), 0, 1);
        if (file_exists("/storage/".$name_ascii.".png")) {

            return "/storage/".$name_ascii.".png";
        }else{

        $img = \DefaultProfileImage::create($name_ascii, 256, '#f3b34b', '#FFF', 'days.ttf');
        \Storage::disk('public')->put( $name_ascii.".png", $img->encode());
        return "/storage/".$name_ascii.".png";}
    }

}
