<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include(env('THEME').'.components.head')

<body>

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-right">
                @include(env('THEME').'.components.locale')
            </div>
        </div>
    </div>
</div>
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset ('assets/orange/img/big-orange-logo.png')}}" alt="{{ trans(app()->getLocale().'.descriptor') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset ('assets/orange/img/big-orange-logo.svg')}}" alt="{{ trans(app()->getLocale().'.descriptor') }}">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a href="credit-card.html" class="nav-link">
                                Credit Cards
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link @if(($m_rep['active_menu']=='mfo_list') or ($m_rep['active_menu']=='bank_list')) active @endif">
                                Финансы
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item ">
                                    <a href="{{route('mfo_list')}}" class="nav-link @if($m_rep['active_menu']=='mfo_list') active @endif">
                                        МФО
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('bank_list')}}" class="nav-link">
                                        Банки
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services.html" class="nav-link">
                                        Services
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">
                                        Services Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('online-credit')}}" class="nav-link">
                                Онлайн кредит
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ trans(app()->getLocale().'.news') }}
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            @if(count($m_rep['menu']['blog']))
                            <ul class="dropdown-menu">
                                @foreach($m_rep['menu']['blog'] as $menu)
                                <li class="nav-item">
                                    <a href="{{route('blog_cat', $menu->alias)}}" class="nav-link">
                                        {{ $menu->title }}
                                    </a>
                                </li>
                                    @endforeach
                            </ul>
                                @endif
                        </li>

                        <li class="nav-item">
                            <a href="{{route ('contacts')}}" class="nav-link @if($m_rep['active_menu']=='contacts') active @endif">
                                {{ trans(app()->getLocale().'.contacts') }}
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>
        </div>
    </div>


</div>
<!-- End Navbar Area -->
@yield('content')


<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="footer-logo text-center">
                        <a href="{{route('home')}}">
                            <img src="{{asset ('assets/orange/img/big-orange-logo.png')}}" alt="{{ trans(app()->getLocale().'.descriptor') }}">
                        </a>

                        <p class="text-center">{{ trans(app()->getLocale().'.descriptor') }}</p>

                        <ul class="social">
                            <li>
                                <a href="#" class="facebook" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{ trans(app()->getLocale().'.contacts') }}</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href="mailto:info@big-orange.com.ua">info@big-orange.com.ua</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>{{ trans(app()->getLocale().'.address') }}</span>
                            {{ $contacts['address'] }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>{{ trans(app()->getLocale().'.information') }}</h3>
                    <ul class="quick-links">
                        <li>
                            <a href="#">{{ trans(app()->getLocale().'.contacts') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ trans(app()->getLocale().'.about_us') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ trans(app()->getLocale().'.agreement') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ trans(app()->getLocale().'.privacy') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{ trans(app()->getLocale().'.loans_mfo') }}</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="#">Privacy statement</a>
                        </li>
                        <li>
                            <a href="#">Corporate information</a>
                        </li>
                        <li>
                            <a href="#">Online banking help</a>
                        </li>
                        <li>
                            <a href="#">Managing your money</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">

            <p>
                <i class='bx bx-copyright'></i>
                BigOrange 2019-<?=date('Y');?> | {{ trans(app()->getLocale().'.descriptor') }}
            </p>
            <a rel="noopener" target="_blank" href="//www.dmca.com/Protection/Status.aspx?ID=c4558b87-ae50-48cf-8ed2-40c27058bf25" title="DMCA.com Protection Status" class="dmca-badge">
                <img class="lazy loaded" data-src="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=c4558b87-ae50-48cf-8ed2-40c27058bf25" src="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=c4558b87-ae50-48cf-8ed2-40c27058bf25" alt="DMCA.com Protection Status" data-was-processed="true">
            </a>
            <p><small>Копіювання та розміщення матеріалів на інших сайтах дозволено тільки з гіперпосиланням на big-orange.com.ua</small></p>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Slim JS -->
<script src="{{asset ('assets/orange/js/main.js')}}"></script>
<script src="https://andreruffert.github.io/rangeslider.js/assets/rangeslider.js/dist/rangeslider.min.js"></script>
<script>
    $(document).ready(function($) {

        $('.item-type').click(function() {
            $('.item-type').removeClass('item-type-active');
            $(this).addClass('item-type-active');
        });

        function rangeCalc(i) {
            var totalPrice = 0;
            var tariff = [{begin:1, price:75}, {begin:3, price:70}, {begin:6, price:65}, {begin:11, price:60}, {begin:21, price:55}, {begin:51, price:50}];
            var tariffItem2 = [{begin:1, price:85}, {begin:3, price:80}, {begin:6, price:75}, {begin:11, price:70}, {begin:21, price:65}, {begin:61, price:60}];

            tariff.forEach(function(num, item) {
                if (tariff[item].begin <= i) {
                    totalPrice = tariff[item].price;
                    $('.calc-total-price').text(i*totalPrice);
                    $('.calc-price').text(totalPrice);
                };
                //console.log(tariff[item].begin);
            });
        };

        $('.summ-range').on('input', function() {
            var summ = this.value.replace(/(\d{1,3})(?=((\d{3})*)$)/g, " $1")
            $('.summ-count').text(summ + ' грн');
            rangeCalc(this.value);
        });
        $('.term-range').on('input', function() {
            $('.term-count').text(this.value + ' дней');
            rangeCalc(this.value);
        });

//rangeCalc();

    });

</script>
<script>
    new WOW().init();
</script>
</body>
</html>