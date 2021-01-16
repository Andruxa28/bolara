<?php

namespace Orange\Http\Controllers;

use Buglinjo\LaravelWebp\Webp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Orange\Category;
use Orange\CategoryDescription;
use Orange\Post;


class BlogController extends SiteController
{
    public function list(){
        if($this->blog['status'] !=1){
            abort(404, 'Page not found');
        }else{
            $category = Category::where('status', 1)->get();
            if(!$category){ abort(404, 'Page not found');}else{

        $data['category'] = $category;
        dd($category);
        $data['meta_title'] = $data['og_title'] = 'test';
        $data['meta_description'] = $data['og_description'] = 'test';
        $data['posts'] = Post::paginate($this->blog['per_page']);
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);

        $this->template = 'orange.blog_list';
        return $this->renderOutput();}
        }
    }


    public function single($slug, $slug2){
        $data['post'] = POST::where('alias', $slug2)->firstOrFail();
        if(!$data['post']){
            abort(404, 'Page not found');
        }else {

                $imgname = pathinfo($data['post']['img']);
                $imgname = $imgname['filename'];
                if (file_exists('assets/orange/img/blog/webp/'.$imgname.'.webp')) {
                    $data['post']['img'] = '/assets/orange/img/blog/webp/'.$imgname.'.webp';
                }else{
                    $img = \Intervention\Image\Facades\Image::make('assets/orange/img/blog/'.$data['post']['img'])->encode('webp', 75);
                    $img->save('assets/orange/img/blog/webp/'.$imgname.'.webp');
                    $data['post']['img'] = '/assets/orange/img/blog/webp/'.$imgname.'.webp';
                }
            $data['meta_title'] = $data['og_title'] = 'test';
            $data['meta_description'] = $data['og_description'] = 'test';
            $this->vars = array_add($this->vars,'data',$data);
            $this->template = 'orange.blog_single';
            return $this->renderOutput();



        }

    }
    public function category($slug){
        if($this->blog['status'] !=1){
            abort(404, 'Page not found');
        }
        $category = Category::where('categories.alias', $slug)->where('category_descriptions.language_code', app()->getLocale())->leftJoin('category_descriptions', 'categories.category_id', '=', 'category_descriptions.category_id')->firstOrFail();
        if($category){
            $data['posts'] = POST::where('posts.category_id', $category['category_id'])->where('posts.status', 1)->leftJoin('post_descriptions', 'posts.id', '=', 'post_descriptions.post_id')->get();
            foreach($data['posts'] as $key=>$item){
                $data['posts'][$key]['date'] = date('d-m-Y', strtotime($item['created_at']));
                $imgname = pathinfo($item['img']);
                $imgname = $imgname['filename'];
                if (file_exists('assets/orange/img/blog/webp/'.$imgname.'.webp')) {
                    $data['posts'][$key]['img'] = '/assets/orange/img/blog/webp/'.$imgname.'.webp';
                }else{
                $img = \Intervention\Image\Facades\Image::make('assets/orange/img/blog/'.$item['img'])->encode('webp', 75);
                $img->save('assets/orange/img/blog/webp/'.$imgname.'.webp');
                    $data['posts'][$key]['img'] = '/assets/orange/img/blog/webp/'.$imgname.'.webp';
                }
            }
            $data['category'] = $category;

        $data['meta_title'] = $data['og_title'] = $category['meta_title'];
        $data['meta_description'] = $data['og_description'] = $category['meta_description'];
        $this->vars = array_add($this->vars,'page','test');
        $this->vars = array_add($this->vars,'data',$data);

        $this->template = 'orange.blog_list';
        return $this->renderOutput();}else{
            abort(404, 'Page not found');
        }
    }
    public function promo_list(){
        return "Promo";
    }
}
