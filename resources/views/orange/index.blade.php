@extends(env('THEME').'.layouts.site')

@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <div class="main-banner">
        <div class="main-banner-item banner-item-three">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="main-banner-content wow fadeInUp">
                            <h1>{{ trans(app()->getLocale().'.loan_service') }}</h1>
                            <p>{{ trans(app()->getLocale().'.loan_service_descriptor') }}</p>
                            <p>{{ trans(app()->getLocale().'.loan_service_descriptor2') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="main-banner-image wow fadeInRight">
                            <img src="{{asset ('assets/orange/img/main-banner/big_orange_online_credit.svg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape">
            <div class="shape-1">
                <img src="{{asset ('assets/orange/img/main-banner/banner-shape-1.png')}}" alt="{{ trans(app()->getLocale().'.loan_service') }}">
            </div>

        </div>
    </div>
    <section class="top-services-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="top-services-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center">
                            <img src="https://big-orange.com.ua/img/credit_card.webp" class="img-fluid" alt="{{ trans(app()->getLocale().'.online_credit_to_card') }}">
                        </div>
                        <h3>
                            <a href="{{route('online-credit')}}">{{ trans(app()->getLocale().'.online_credit_to_card') }}</a>
                        </h3>
                        <p>{{ trans(app()->getLocale().'.online_credit_to_card_descriptor') }}</p>
                        <a href="{{route('online-credit')}}" class="link-btn">{{ trans(app()->getLocale().'.view_proposition') }} <i class="flaticon-right-arrow"></i></a>

                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="top-services-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center">
                            <img src="https://big-orange.com.ua/img/0_percent.webp" class="img-fluid" alt="{{ trans(app()->getLocale().'.free_percent_loan') }}">
                        </div>
                        <h3>
                            <a href="#">{{ trans(app()->getLocale().'.free_percent_loan') }}</a>
                        </h3>
                        <p>{{ trans(app()->getLocale().'.free_percent_loan_descriptor') }}</p>
                        <a href="#" class="link-btn">{{ trans(app()->getLocale().'.view_proposition') }} <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-4 offset-lg-0 offset-md-3">
                    <div class="top-services-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center">
                            <img src="https://big-orange.com.ua/img/cash.webp" class="img-fluid" alt="{{ trans(app()->getLocale().'.cash_loan') }}">
                        </div>
                        <h3>
                            <a href="#">{{ trans(app()->getLocale().'.cash_loan') }}</a>
                        </h3>
                        <p>{{ trans(app()->getLocale().'.cash_loan_descriptor') }}</p>
                        <a href="#" class="link-btn">{{ trans(app()->getLocale().'.view_proposition') }} <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="about-area bg-ffffff ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="about-image wow fadeInLeft" data-wow-delay="0.2s">
                            <a href="https://www.youtube.com/watch?v=_cVty4nZoP4" class="video-btn popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="about-content wow fadeInRight" data-wow-delay="0.2s">
                            <span>{{ trans(app()->getLocale().'.about_orange') }}</span>
                            <h3>{{ trans(app()->getLocale().'.big_orange_finance_helper') }}</h3>
                            <p>{{ trans(app()->getLocale().'.about_main_descriptor') }}</p>

                            <div class="about-btn">
                                <a href="#" class="default-btn">{{ trans(app()->getLocale().'.about_us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Top Services Area -->

        <!-- End Top Services Area -->



        <!-- Start Protect Area -->
        <section class="protect-area pb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="protect-content">
                            <span>{{ trans(app()->getLocale().'.online_credit_to_card') }}</span>
                            <h3>Преимущества онлайн кредитов</h3>
                            <p>Прошли те времена, когда получить кредит можно было только в банке. Сегодня Любой человек может взять кредит онлайн, не затратив на это много времени. Почему же оформление кредита в онлайн режиме на столько популярны</p>

                            <div class="protect-inner-content wow fadeInDown" data-wow-delay="0.2s">
                                <div class="number">
                                    <span>1</span>
                                </div>

                                <h4>Оперативная обработка заявок</h4>
                                <p>Время обработки заявки на онлайн заем в среднем составляет от 5-15 минут.</p>
                            </div>

                            <div class="protect-inner-content wow fadeInDown" data-wow-delay="0.2s">
                                <div class="number">
                                    <span>2</span>
                                </div>

                                <h4>Минимальные требования к заемщикам</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="protect-inner-content wow fadeInDown" data-wow-delay="0.2s">
                                <div class="number">
                                    <span>3</span>
                                </div>

                                <h4>Высокий процент одобрения заявок</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 text-center">
                        <img src="{{asset ('assets/orange/img/online_loan.svg')}}" class="img-fluid wow fadeInRight" data-wow-delay="0.2s" alt="{{ trans(app()->getLocale().'.cash_loan') }}" >
                    </div>
                </div>
            </div>
        </section>
        <!-- End Protect Area -->
        <!-- Start Credit Card Area -->
        <section class="credit-card-area bg-ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="credit-card-content">
                            <span>{{ trans(app()->getLocale().'.credit_cart') }}</span>
                            <h3>{{ trans(app()->getLocale().'.need_cart') }}</h3>
                            <p>{{ trans(app()->getLocale().'.we_choice_cart') }}</p>

                            <ul class="credit-card-features">
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.credit_limit') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.cash_back') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> PayPass
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.grace_period') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.style_design') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.mobile_banking') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.free_registration') }}
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i> {{ trans(app()->getLocale().'.get_cash') }}
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="credit-card-image-slider owl-carousel owl-theme">
                            <div class="credit-card-image">
                                <a href="https://google.com.ua" target="_blank"><img src="{{asset ('assets/orange/img/credit-card/monobank.png')}}" alt="image"></a>
                             </div>
                            <div class="credit-card-image">
                                <a href="https://google.com.ua" target="_blank"><img src="{{asset ('assets/orange/img/credit-card/sportbank.png')}}" alt="image"></a>
                            </div>
                            <div class="credit-card-image">
                                <a href="https://google.com.ua" target="_blank"><img src="{{asset ('assets/orange/img/credit-card/unexbank.png')}}" alt="image"></a>
                            </div>
                            <div class="credit-card-image">
                                <a href="https://google.com.ua" target="_blank"><img src="{{asset ('assets/orange/img/credit-card/abank.png')}}" alt="image"></a>
                            </div>
                            <div class="credit-card-image">
                                <a href="https://google.com.ua" target="_blank"><img src="{{asset ('assets/orange/img/credit-card/privatbank.png')}}" alt="image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Credit Card Area -->

        <!-- Start Below Area -->
        <section class="below-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="below-image"></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="below-content">
                            <span>How to open an account</span>
                            <h3>We can easily open a bank account by following some rules below.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="below-inner-content">
                                <div class="number">
                                    <span>1</span>
                                </div>

                                <h4>Personal details</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="below-inner-content">
                                <div class="number">
                                    <span>2</span>
                                </div>

                                <h4>Identification</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="below-inner-content">
                                <div class="number">
                                    <span>3</span>
                                </div>

                                <h4>Address information</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Below Area -->

        <!-- Start Blog Area -->
        @if(count($last_articles))
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>{{ trans(app()->getLocale().'.latest_articles') }}</h2>
                </div>

                <div class="row">
                    @foreach($last_articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="post-image">
                                <img src="{{asset ('assets/orange/img/blog/'.$article->img)}}" alt="image">
                            </div>

                            <div class="post-content">
                                <h3>
                                    <a href="#">{{$article->short_name}}</a>
                                </h3>

                                <ul class="post-meta">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        {{$article->created_at}}
                                    </li>
                                </ul>
                                <p>{{$article->short_text}}</p>
                                <a href="{{route ('blog.single', $article->alias)}}" class="blog-btn">Learn more <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        <!-- End Blog Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel owl-theme">
                    @foreach($slider_offer as $offer)
                    <div class="partner-item">
                        <img src="{{asset ('assets/orange/img/companies/microcredit/'.$offer->alias.'.webp')}}" alt="image">
                    </div>
@endforeach

                </div>
            </div>
        </div>
        <!-- End Partner Area -->
@endsection
