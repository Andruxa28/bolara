<?php

namespace Orange\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Orange\Category;
use Orange\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }
    public function store(Request $request)
    {
//     $request->validate([
//       'title_ru'=>'required',
//         'title_uk'=>'required',
//         'meta_title_ru'=>'required',
//         'meta_title_uk'=>'required',
//         'meta_description_ru'=>'required',
//         'meta_description_uk'=>'required',
//     ]);
       Category::create($request->all());
     $request->session()->flash('success', 'Категория добавлена');
     return redirect()->route('categories.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
      $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
//        $request->validate([
//            'title_ru'=>'required',
//            'title_uk'=>'required',
//        ]);

        if($request->status=='on'){
            $request->request->add(['status' => 1]);
        }else{
            $request->request->add(['status' => 0]);
        }

        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
       $category = Category::find($id);
       $category->delete();
       return redirect()->route('categories.index')->with('success', 'Категория удалена');
    }
}
