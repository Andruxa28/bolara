<?php

namespace Orange\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Orange\Http\Controllers\Controller;

class BlogController extends Controller
{


    public function index()
    {
        $blog = [];
        return view('admin.settings.blog', compact('blog'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
