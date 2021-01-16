<?php

namespace Orange\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Orange\Company;
use Orange\Http\Controllers\Controller;
use Orange\Showcase;

class ShowcaseController extends Controller
{


    public function index()
    {
        $blog = Showcase::all();
        $offer = unserialize($blog[0]['offers']);
        foreach($offer as $key=>$item){
            $offer_data = Company::where('id', $item)->first();
            $offers[$key] = $offer_data;
            $offers[$key]['position'] = $key;
        }

        return view('admin.showcase.index', compact('offers'));
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
