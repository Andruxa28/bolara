<?php

namespace Orange\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orange\Showcase;

class ShowcaseController extends SiteController
{

    public function online_credit()
    {
       $showcase = Showcase::where('alias', 'online-credit')->get();
       //dd($showcase);
        $data['meta_title'] = $data['og_title'] = 'test';
        $data['meta_description'] = $data['og_description'] = 'test';
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);
        $this->template = 'orange.showcase';
        return $this->renderOutput();
    }
}
