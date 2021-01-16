@extends(env('THEME').'.layouts.site')
@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <section class="error-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                        <img src="{{asset ('assets/orange/img/404-error.svg')}}" alt="error">
                        </div>
                        <div class="col-12 col-md-6 m-auto text-center">
                        <h3>{{ trans(app()->getLocale().'.error') }} 404 : {{ trans(app()->getLocale().'.page_not_found') }}</h3>
                        <p>{{ trans(app()->getLocale().'.404_text') }}</p>
                        <a href="{{route('home')}}" class="default-btn">
                            {{ trans(app()->getLocale().'.go_to_home') }}
                        </a>
                        </div>
                    </div>
                </div>
    </section>
@endsection

