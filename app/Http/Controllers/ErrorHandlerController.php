<?php

namespace Orange\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends SiteController
{
    public function errorCode404()

    {

        $data['meta_title'] = $data['og_title'] = 'Кредит онлайн на карту в Украине - BigOrange - сравнение финансовых услуг';
        $data['meta_description'] = $data['og_description'] = 'Cервис сравнения и подбора онлайн кредитов и депозитов в Украине ✓ Только проверенные организации ✓ Выбирай лучшие предложения';

        $this->vars = array_add($this->vars,'data',$data);
        $this->template = 'errors.404';
        return response($this->renderOutput(), 404);



    }



    public function errorCode405()

    {

        return view('errors.405');

    }
}
