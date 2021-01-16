<?php

namespace Orange\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Orange\Http\Controllers\Controller;


class MainController extends Controller
{
    public function index(){

        return view('admin.index');
    }
}
