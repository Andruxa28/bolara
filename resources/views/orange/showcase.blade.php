@extends(env('THEME').'.layouts.site')

@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')

    <section class=" ptb-100 showcase-area">
        <div class="container">
            <div class="section-title">

            </div>
            <div class="row">
                <div class="col-12">
            </div>
            </div>
            <div class="row company-list">
                <div class="showcase-card wow fadeInUp" data-wow-delay="0.02s" style="visibility: visible; animation-delay: 0.02s; animation-name: fadeInUp;">
                    <a href="/go?company=credit7" target="_blank">
                        <div class="showcase_image">
                            <img class="img-fluid " src="https://big-orange.com.ua/img/microcredit/credit7.png" alt="Credit7">
                        </div>
                    </a>
                    <hr>
                    <p class="showcase-card_title">Credit7</p>
                    <div class="showcase-card_description">
                        <span class="pull-left">Ставка</span><span class="pull-right"><b>0.01</b> %</span><br>
                        <span class="pull-left">Сума</span><span class="pull-right">до <b>7000</b> грн</span><br>
                        <span class="pull-left">Термін</span><span class="pull-right">до <b>30</b> днів</span><br>
                        <a href="/go?company=credit7" target="_blank" class="btn custom-btn">Подати заявку</a>
                    </div>


                </div>


            </div>
        </div>
    </section>

@endsection
