<?php

namespace Orange\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class InfoController extends SiteController
{
    public function zgoda(){
         $data['meta_title'] = $data['og_title'] = 'test';
        $data['meta_description'] = $data['og_description'] = 'test';
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);
        $this->template = 'orange.info';
        return $this->renderOutput();
    }
    public function contacts(){

        $data['meta_title'] = $data['og_title'] = 'test';
        $data['meta_description'] = $data['og_description'] = 'test';
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);
        $this->template = 'orange.contacts';
        return $this->renderOutput();
    }
}
