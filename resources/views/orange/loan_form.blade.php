@extends(env('THEME').'.layouts.site')
@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <div class="page-banner-area item-bg4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white">Кредит онлайн на карту</h1>
                    <div class="card wow fadeInUp" data-wow-delay="0.2s" style="padding: 30px">
                    <div class="row loan-form">
                        <div class="col-12 col-md-6 ">
                        <h2>Сумма кредита</h2><br>
                            <div class="row">
                                <div class="col-8 col-md-8"><input class="summ-range m-top-20" type="range" min="1000" max="15000" step="100" value="5000"></div>
                                <div class="col-4 col-md-4 text-center"> <h2 class="summ-count">5 000 грн</h2></div>
                            </div>
                            <h2>Срок кредита</h2><br>
                            <div class="row">
                                <div class="col-8 col-md-8"><input class="term-range m-top-20" type="range" min="5" max="60" step="1" value="7"></div>
                                <div class="col-4 col-md-4 text-center"> <h2 class="term-count">7 дней</h2></div>
                            </div>
                            <br>
                            <p>{{ trans(app()->getLocale().'.send_form_user_agree') }} <a href="{{route('zgoda')}}" title="{{ trans(app()->getLocale().'.personal_data') }}">{{ trans(app()->getLocale().'.personal_data') }}</a></p>
                    </div>
                        <div class="col-12 col-md-6">
                            <h4>Заполните эту форму</h4>
                            <input type="text" class="form-control" placeholder="Фамилия" />
                            <input type="text" class="form-control" placeholder="Имя" />
                            <input type="text" class="form-control" placeholder="Email" />
                            <input type="text" class="form-control" placeholder="Телефон" />
                            <a class="default-btn" style="width: 100%; text-align: center" href="{{route('step2')}}">Взять кредит</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    span.item-type {
        border-bottom: 1px solid blue;
        color: blue;
    }
    span.item-type:hover {
        cursor: pointer;
        color: red;
        border-bottom: 1px solid red;
    }
    span.item-type-active {
        color: white;
        background-color: red;
        border-bottom: 0;
        padding: 5px;
    }

    /*SLIDER RANGE*/
    input[type=range] {
        -webkit-appearance: none;
        /*margin: 0 auto;*/
        margin-bottom: 50px;
        width: 100%;
    }
    input[type=range]:focus {
        outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 10px;
        /*border-top: 1px solid #b99400;*/
        /*border-bottom: 2px solid #ffd631;*/
        cursor: pointer;
        /*animate: 0.2s;*/
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        background: #fc0;
        border-radius: 25px;
        /*border: 0px solid #000101;*/
        transition: background 0.1s ease;
    }
    input[type=range]::-webkit-slider-thumb {
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        border: 10px solid #fc0;
        height: 40px;
        width: 40px;
        border-radius: 50px;
        background: #fff;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -15px;
        transition: border 0.1s ease;
        -webkit-box-shadow: 0px 11px 27px -12px rgba(145,94,31,1);
        -moz-box-shadow: 0px 11px 27px -12px rgba(145,94,31,1);
        box-shadow: 0px 11px 27px -12px rgba(145,94,31,1);
    }
    /*input[type=range]:focus::-webkit-slider-runnable-track {
      background: #ff0;
    }*/
    input[type=range]::-moz-range-track {
        width: 100%;
        height: 3px;
        /*border-top: 1px solid #b99400;*/
        /*border-bottom: 2px solid #ffd631;*/
        cursor: pointer;
        animate: 0.2s;
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        background: #007aff;
        border-radius: 25px;
        /*border: 0px solid #000101;*/
        transition: background 0.1s;
    }
    input[type=range]::-moz-range-thumb {
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        border: 3px solid #007aff;
        height: 30px;
        width: 30px;
        border-radius: 30px;
        background: #fff;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -14px;
        transition: border 0.1s ease;
    }
    input[type=range]::-ms-track {
        width: 100%;
        height: 3px;
        /*border-top: 1px solid #b99400;*/
        /*border-bottom: 2px solid #ffd631;*/
        cursor: pointer;
        animate: 0.2s;
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        background: #007aff;
        border-radius: 25px;
        /*border: 0px solid #000101;*/
        transition: background 0.2s ease;
    }
    input[type=range]::-ms-fill-lower {
        background: #ac51b5;
        border: 0px solid #000101;
        border-radius: 50px;
        box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
    }
    input[type=range]::-ms-fill-upper {
        background: #ac51b5;
        border: 0px solid #000101;
        border-radius: 50px;
        box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
    }
    input[type=range]::-ms-thumb {
        /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
        border: 3px solid #007aff;
        height: 30px;
        width: 30px;
        border-radius: 30px;
        background: #fff;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -14px;
        transition: border 0.1s;
    }
    input[type=range]:focus::-ms-fill-lower {
        background: #ac51b5;
    }
    input[type=range]:focus::-ms-fill-upper {
        background: #ac51b5;
    }

    input[type=range]:hover::-webkit-slider-runnable-track {
        background: #ffd83c;
    }
    input[type=range]:hover::-webkit-slider-thumb {
        /*background: #fff;*/
        border-color: #ffd83c;
        -webkit-box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
        -moz-box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
        box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
    }
    input[type=range]:active::-webkit-slider-runnable-track {
        background: #ffd83c;
    }
    input[type=range]:active::-webkit-slider-thumb {
        /*background: #fff;*/
        border-color: #ffd83c;
        -webkit-box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
        -moz-box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
        box-shadow: 0px 6px 27px -12px rgba(145,94,31,1);
    }

    input[type=range]:hover::-moz-range-track {
        background: #e52e5e;
    }
    input[type=range]:hover::-moz-range-thumb {
        background: #fff;
        border-color: #e52e5e;
    }
    input[type=range]:active::-moz-range-track {
        background: #e52e5e;
    }
    input[type=range]:active::-moz-range-thumb {
        background: #fff;
        border-color: #e52e5e;
    }
    .loan-form .form-control{
        width: 100%;
        /*border: 2px solid #f1780d;*/
        padding: 13px 20px;
        font-size: 18px;
        line-height: 20px;
        border-radius: 7px;
        background-color: #ffffff;
        position: relative;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }
</style>

@endsection
