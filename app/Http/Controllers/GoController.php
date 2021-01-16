<?php

namespace Orange\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoController extends SiteController
{
    public function index(){
        if(isset($_GET['company'])) {
            $company_id = DB::selectOne('SELECT id FROM companies WHERE alias = :alias', ['alias' => $_GET['company']]);
            if($company_id) {
                $offer = DB::selectOne('SELECT * FROM offer_cpa WHERE company_id = :company_id AND status = :status', ['company_id' => $company_id->id, 'status' => 1]);
                if ($offer) {
                    $cpa = DB::selectOne('SELECT * FROM cpa WHERE id = :cpa_id', ['cpa_id' => $offer->cpa_id]);
                    $url = str_replace('{AFF_ID}', $cpa->affiliate_id, $cpa->partner_link);
                    $url = str_replace('{OFFER_ID}', $offer->offer_id, $url);
                    return redirect($url);
                } else {
                    return redirect()->route('step1');
                }
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('home');
        }
    }
    public function step1(){
        $data['meta_title'] = $data['og_title'] = 'test';
        $data['meta_description'] = $data['og_description'] = 'test';
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);
        $this->template = 'orange.loan_form';
        return $this->renderOutput();
    }
}
