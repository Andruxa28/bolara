@extends(env('THEME').'.layouts.site')

@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')

    <section class="customer-area pb-50 company-area">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('home')}}"> Главная</a></li>
                    <li><a href="{{route('mfo_list')}}">МФО</a></li>
                    <li>{{$data['company']->original_name}}</li>
                </ul>
                <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "{{route('home')}}",
    "name": "Главная"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "{{route('mfo_list')}}",
     "name": "МФО"
   }
  }
 ]
}
</script>
            </div>
            <div class="row">
                <div class="col-12">
                <h1>{{$data['company']->description->name}} кредит на карту онлайн</h1>
                </div>
            </div>
                <hr>

                <div class="row">
                <div class="col-12 col-md-4" style="padding-top: 40px">
                    <img class="brand-logo wow fadeInUp img-fluid"
                         src="{{asset ('assets/orange/img/companies/microcredit2/'.$data['company']->alias.'.svg')}}" alt="{{$data['company']->original_name}}">
                    <hr>
                    <div class="rating_block text-center">
                            <span id="rating" class="rating star1">
                                @for ($i=1; $i <=5; $i++)
                                    @if ($data['company']->company_rating <$i)
                                        <i class='bx bx-star wow fadeInLeft' data-wow-delay="0.{{$i}}s"></i>
                                    @else
                                        <i class='bx bxs-star wow fadeInLeft' data-wow-delay="0.{{$i}}s"></i>
                                    @endif
                                @endfor
                </span></div>

                </div>
                <div class="col-12 col-md-8 card-options  f-left m-auto">
                    <ul>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option1.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_sum') }}:<br><span class="bold">{{$data['company']->param['sum_to']}} грн.</span></span>

                        </li>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option4.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_time') }}:<br><span class="bold">{{$data['company']->param['time_from']}}-{{$data['company']->param['time_to']}} {{ trans('company.days') }}</span></span>
                        </li>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option3.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_method') }}:<br>
                                <span class="bold">
                                    @if($data['company']->param['method']=='to_card')
                                        {{ trans('company.to_card') }}
                                        @elseif($data['company']->param['method']=='cash')
                                        {{ trans('company.cash') }}
                                    @endif
                                </span>
                            </span>
                        </li>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option2.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_rate') }}:<br><span class="bold">{{$data['company']->param['rate']}} %</span></span>
                        </li>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option5.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_answer') }}:<br><span class="bold">{{$data['company']->param['loan_time']}} {{ trans('company.minutes') }}</span></span>
                        </li>
                        <li class="f-left">
                            <img src="{{asset ('assets/orange/img/option6.svg')}}" alt="card-option">
                            <span>{{ trans('company.loan_age') }}:<br><span class="bold">{{ trans('company.from') }} {{$data['company']->param['age_from']}} {{ trans('company.years') }}</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="about-btn">
                        <a target="_blank" href="{{route('go', 'company='.$data['company']->alias )}}" class="default-btn">{{ trans('company.get_loan') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="content-area bg-transparent pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 order-2 order-md-1">
                    <p>AlexCredit – мікро фінансова кредитна організація, з особливою місією. Мета компанії зробити людину вільною від турбот і труднощів, які супроводжують процеси позики. Алекс Кредит не хоче бачити людей, що стоять в чергах, що витрачають багато часу на заповнення анкет і подібних документів, а потім провідних дискусії з кредитними менеджерами. У компанії прекрасно розуміють і знають ринок онлайн кредитування, тому маючи компетентних працівників запропонувати відмінний сервіс не важко.</p>
                     <h3 id="oformlennay-credytu">Оформлення кредиту {{$data['company']->original_name}}</h3>
                    <p>Кредитные компании не требовательны к Вашей кредитной истории и кредитному скорингу (система принятия решения о выдаче кредита на основании статистических данных) в отличии от банков. Это связано с тем, что риски, связанные с невозвратом кредита компенсируются более высокими процентными ставками. В микрофинансовых организация комиссия за кредит составляет до 70% в месяц или до 840 процентов в год, что достаточно много в сравнении с банковскими процентами – до 200% в год.</p>
                    <p>На первый взгляд, может показаться, что в займах от кредитных компаний нет никакого смыла, но это не так. Дело в том, что МФО выдают кредиты до зарплаты на срок до 30-ти дней и на сумму до 15-ти тысяч гривен. На таком коротком промежутке времени, проценты в абсолютном значении небольшие, но деньги, предоставленные Вам в течении 20-ти минут могут выручить Вас в непредвиденной ситуации. Если учитывать маркетинговые акции кредитных компаний (большинство из них выдают первый кредит под 0 процентов для новых клиентов), то можно до 30-ти раз (на рынке приблизительно 30 таких компаний выдающих 1-й займ под 0 %) брать небольшую сумму на срок до 14 дней и не платить не какие проценты за пользование заемными деньгами.</p>
                    <p>Банки, в свою очередь, представляют более обширные финансовые инструменты и кредитуют на большую сумму, срок и разделяют кредиты на: потребительские, залоговые, ипотечные, авто ломбарды – кредит под залог авто и т. д. Банки очень тщательно оценивают риски и требуют от заемщика предоставление обширного перечня документов и уточняющий звонков не только Вам, но и Вашим знакомым.</p>
                    <h3 id="test">Преимущества и недостатки микрокредитов в сравнении с кредитами в банках.</h3>
                    <p>Кредитные компании не требовательны к Вашей кредитной истории и кредитному скорингу (система принятия решения о выдаче кредита на основании статистических данных) в отличии от банков. Это связано с тем, что риски, связанные с невозвратом кредита компенсируются более высокими процентными ставками. В микрофинансовых организация комиссия за кредит составляет до 70% в месяц или до 840 процентов в год, что достаточно много в сравнении с банковскими процентами – до 200% в год.</p>
                    <p>На первый взгляд, может показаться, что в займах от кредитных компаний нет никакого смыла, но это не так. Дело в том, что МФО выдают кредиты до зарплаты на срок до 30-ти дней и на сумму до 15-ти тысяч гривен. На таком коротком промежутке времени, проценты в абсолютном значении небольшие, но деньги, предоставленные Вам в течении 20-ти минут могут выручить Вас в непредвиденной ситуации. Если учитывать маркетинговые акции кредитных компаний (большинство из них выдают первый кредит под 0 процентов для новых клиентов), то можно до 30-ти раз (на рынке приблизительно 30 таких компаний выдающих 1-й займ под 0 %) брать небольшую сумму на срок до 14 дней и не платить не какие проценты за пользование заемными деньгами.</p>
                    <p>Банки, в свою очередь, представляют более обширные финансовые инструменты и кредитуют на большую сумму, срок и разделяют кредиты на: потребительские, залоговые, ипотечные, авто ломбарды – кредит под залог авто и т. д. Банки очень тщательно оценивают риски и требуют от заемщика предоставление обширного перечня документов и уточняющий звонков не только Вам, но и Вашим знакомым.</p>
                    <h2>Особистий кабінет {{$data['company']->original_name}}</h2>
                    <h2>Кредитний калькулятор {{$data['company']->original_name}}</h2>
                    <div class="row loan-form">
                        <div class="col-12">
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
                    </div>
                    <p>Швидко та зручно розраховуйте кредит в МФО {{$data['company']->original_name}}</p>
                    <h2>Акції та промокоди {{$data['company']->original_name}}</h2>
                    <h2 id="contacts">Контакти мікрофінансової організації {{$data['company']->original_name}}</h2>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Официальный сайт</td>
                            <td><a class="fua-like-text" href="{{route('go', 'company='.$data['company']->alias )}}"
                                   rel="nofollow noopener" target="_blank">
                                    https://alexcredit.ua/uk
                                </a></td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>+380996186464</td>
                        </tr>
                        <tr>
                            <td>Электронная почта</td>
                            <td><a class="fua-like-text" href="mailto:mail@alexcredit.com.ua">mail@alexcredit.com.ua</a></td>
                        </tr>
                        <tr>
                            <td>Юридический адрес</td>
                            <td>49041, г. Днепр, ул. Якова Самарского, 12А</td>
                        </tr>
                        <tr>
                            <td>График работы</td>
                            <td>Сегодня работает с 08:00 до 20:00</td>
                        </tr>

                        </tbody>
                    </table>
                    <h2 id="reviews">Відгуки про {{$data['company']->original_name}}</h2>
                    <div class="container comments-area">
                        <div class="row">
                            @foreach($data['comments'] as $comment)
                            <div class="col-12">
                                <div class="post-content">
                                    <div class="post-container">
                                        <div class="row">
                                            <div class="col-2 col-md-1"><img src="{{$comment['avatar']}}" alt="user" class="profile-photo-md pull-left rounded-circle"></div>
                                            <div class="col-5 col-md-7 post-author">
                                                <span class="comment-author">{{$comment['name']}}</span> <br>
                                                <span class="date">{{$comment['date']}}</span>
                                            </div>
                                            <div class="col-5 col-md-4">
                                                <div class="rating_block text-right">
                            <span id="rating_comments" class="rating star1">
                                @for ($i=1; $i <=5; $i++)
                                    @if ($comment['rating'] <$i)
                                        <i class='bx bx-star wow fadeInLeft' data-wow-delay="0.{{$i}}s"></i>
                                    @else
                                        <i class='bx bxs-star wow fadeInLeft' data-wow-delay="0.{{$i}}s"></i>
                                    @endif
                                @endfor
                </span></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="post-detail">
                                                    <div class="line-divider"></div>
                                                    <div class="post-text">
                                                        <p>{{$comment['comment']}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 order-1 order-md-2">
                <div class="stiky-block">
                    <div class="text-center"> <span class="headers-title">{{ trans('company.headers') }}</span></div>
                    <hr>
<ul class="header-list">
    <li><a href="#oformlennay-credytu"> <i class='bx bx-send'></i> Про компанію</a></li>
    <li><a href="#oformlennay-credytu"> <i class='bx bx-send'></i> Умови отримання кредиту</a></li>
    <li><a href="#test"> <i class='bx bx-send'></i> Особистий кабінет</a></li>
    <li><a href="#test"> <i class='bx bx-send'></i> Кредитний калькулятор</a></li>
    <li><a href="#test"> <i class='bx bx-send'></i> Акції</a></li>
    <li><a href="#contacts"> <i class='bx bx-send'></i> Контакти</a></li>
    <li><a href="#reviews"> <i class='bx bx-send'></i> Відгуки</a></li>
</ul>
                </div>
                </div>
            </div>

        </div>
    </section>
@endsection
