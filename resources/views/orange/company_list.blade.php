@extends(env('THEME').'.layouts.site')

@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')

    <section class="customer-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h1>{{$page->name}}</h1>
            </div>
            <div class="row">
                <div class="col-12">
              <p>Микрофинансовая организация это
                  - юридически зарегистрированное лицо, имеющее право на осуществление финансовой деятельности и лицензию от Национального банка Украины на кредитование физических и / или юридических лиц. Регулируется деятельность законами о финансовых организациях и финансовом рынке. Базовые понятия деятельности закреплены в Законе Украины «О банках и банковской деятельности»</p>
                </div>
            </div>
            <div class="row company-list">
                @foreach($data['companies'] as $letter => $letterCompany)
                       <div class="col-12"><span class="company-list__letter">{{ $letter }}</span></div>
                    @foreach($letterCompany as $key=> $company)
                        <div class="col-6 col-md-2 text-center">
                            <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                <a class="company_link" href="{{route('microcredit.single', $company['alias'] )}}">
                                    <div class="offer">
                                        <img alt="{{$company['name']}}" class="img-fluid lazy loaded" src="{{asset ('assets/orange/img/companies/microcredit/'.$company['alias'].'.webp')}}" data-was-processed="true">
                                        <br>
                                        <span class="company-name">{{$company['name']}}</span>
                                    </div>
                                    <div class="us-module-rating-stars text-center">
                                    @for ($i=1; $i < 6; $i++)
                                        @if ($company['rating'] <$i)
                                    <span class="us-module-rating-star"></span>
                                        @else
                                    <span class="us-module-rating-star us-module-rating-star-is"></span>
                                            @endif
                                    @endfor
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                @endforeach
            </div>
        </div>
    </section>
    <section class="content-area bg-transparent pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2>Кредитные компании: отличие от банковских кредитов и ломбардов, преимущества и недостатки</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                        <p>Кредитные компании не требовательны к Вашей кредитной истории и кредитному скорингу (система принятия решения о выдаче кредита на основании статистических данных) в отличии от банков. Это связано с тем, что риски, связанные с невозвратом кредита компенсируются более высокими процентными ставками. В микрофинансовых организация комиссия за кредит составляет до 70% в месяц или до 840 процентов в год, что достаточно много в сравнении с банковскими процентами – до 200% в год.</p>
                        <p>На первый взгляд, может показаться, что в займах от кредитных компаний нет никакого смыла, но это не так. Дело в том, что МФО выдают кредиты до зарплаты на срок до 30-ти дней и на сумму до 15-ти тысяч гривен. На таком коротком промежутке времени, проценты в абсолютном значении небольшие, но деньги, предоставленные Вам в течении 20-ти минут могут выручить Вас в непредвиденной ситуации. Если учитывать маркетинговые акции кредитных компаний (большинство из них выдают первый кредит под 0 процентов для новых клиентов), то можно до 30-ти раз (на рынке приблизительно 30 таких компаний выдающих 1-й займ под 0 %) брать небольшую сумму на срок до 14 дней и не платить не какие проценты за пользование заемными деньгами.</p>
                    <p>Банки, в свою очередь, представляют более обширные финансовые инструменты и кредитуют на большую сумму, срок и разделяют кредиты на: потребительские, залоговые, ипотечные, авто ломбарды – кредит под залог авто и т. д. Банки очень тщательно оценивают риски и требуют от заемщика предоставление обширного перечня документов и уточняющий звонков не только Вам, но и Вашим знакомым.</p>
                    <h3>Преимущества и недостатки микрокредитов в сравнении с кредитами в банках.</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>

                                </th>
                                <th class="text-center">
                                    Кредитные компании и МФО
                                </th>
                                <th class="text-center">
                                    Банки
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th>Предоставление справок с работы</th>
                                <td class="text-center">Не требуются</td>
                                <td class="text-center">Требуются справки для подтвержднения дохода</td>
                            </tr>

                            <tr>
                                <th>Поручители</th>
                                <td class="text-center">Не требуются</td>
                                <td class="text-center">Требуются для уменьшения рисков банка</td>
                            </tr>

                            <tr>
                                <th>Срок кредитования</th>
                                <td class="text-center">1-90 дней</td>
                                <td class="text-center">От 2-х месяцев до 20-ти лет</td>
                            </tr>

                            <tr>
                                <th>Процентная ставка</th>
                                <td class="text-center">до 720% в год</td>
                                <td class="text-center">До 200% в год</td>
                            </tr>

                            <tr>
                                <th>Время получения денег</th>
                                <td class="text-center">До 20 минут на карту</td>
                                <td class="text-center">До 5-ти дней</td>
                            </tr>

                            <tr>
                                <th>Наличие залога</th>
                                <td class="text-center">Не требуется</td>
                                <td class="text-center">Требуется при залоговом кредите</td>
                            </tr>

                            <tr>
                                <th>Получение денег</th>
                                <td class="text-center">На карту или в отделении</td>
                                <td class="text-center">На карту или в отделении</td>
                            </tr>

                            <tr>
                                <th>Звонки родственникам, друзям, коллегам</th>
                                <td class="text-center">Без звонков</td>
                                <td class="text-center">С звонками для подтверждения информации</td>
                            </tr>
                            <tr>
                                <th>Наличие страховок и первых взносов</th>
                                <td class="text-center">Отсутствуют</td>
                                <td class="text-center">Присутствуют</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <p>Как Вы уже поняли из приведенной выше таблицы в сегменте кредитов до зарплаты выигрывают кредитные компании, а сегменте долгосрочных кредитов выигрывают банки.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
