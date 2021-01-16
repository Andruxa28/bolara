<?php

namespace Orange\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('THEME').'.index';
    }
    public function index()
    {
     $slider_offer = DB::select('SELECT * FROM companies WHERE status=:status ORDER BY company_rating DESC LIMIT 8', ['status'=>1]);
     $last_articles = [];


     $data['meta_title'] = $data['og_title'] = 'Кредит онлайн на карту в Украине - BigOrange - сравнение финансовых услуг';
     $data['meta_description'] = $data['og_description'] = 'Cервис сравнения и подбора онлайн кредитов и депозитов в Украине ✓ Только проверенные организации ✓ Выбирай лучшие предложения';
        $this->vars = array_add($this->vars,'last_articles',$last_articles);
        $this->vars = array_add($this->vars,'data',$data);
        $this->vars = array_add($this->vars,'slider_offer',$slider_offer);
        $this->template = 'orange.index';
        return $this->renderOutput();
    }

}
