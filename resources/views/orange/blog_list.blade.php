@extends(env('THEME').'.layouts.site')
@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$data['category']->header}}</h1>
                    <hr>
                </div>
                @if(count($data['posts']))
                @foreach($data['posts'] as $key => $post)
                <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.{{$key}}s">
                    <div class="single-blog-item">
                        <div class="post-image">
                            <a href="{{route('blog_single', ['slug' => $data['category']['alias'], 'slug2' => $post['alias']])}}">  <img src="{{$post['img']}}" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <div class="blog-category_holder">
<span class="blog-category">
{{env('APP_NAME')}}
</span>
                                <span class="time">{{$post['date']}}</span>
                            </div>
                            <strong class="blog-title" >
                                <a href="{{route('blog_single', ['slug' => $data['category']['alias'], 'slug2' => $post['alias']])}}">{{$post['title']}}</a>
                            </strong>

                        </div>
                    </div>
                </div>
                @endforeach
                    @else
                    <div class="col-12"><h3>Пока нет данных для отображения</h3></div>
                @endif
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>

                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
