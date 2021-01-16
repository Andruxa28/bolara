@extends(env('THEME').'.layouts.site')
@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-office"></i>
                        </div>

                        <h3>Адрес</h3>
                        <p>03035 Украина, Киев, ул. Л.Толстого 63</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-contact"></i>
                        </div>

                        <h3>Email</h3>
                        <p><a href="mailto:info@big-orange.com.ua">info@big-orange.com.ua</a></p>

                    </div>
                </div>
<div class="col-12 contacts_social text-center">
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
    </section>




    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2> {{ trans(app()->getLocale().'.contact_form') }}</h2>
                <p>{{ trans(app()->getLocale().'.contacts_form_descriptor') }}</p>
            </div>

            <div class="contact-form">
                <form id="contactForm" novalidate="true">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ trans(app()->getLocale().'.your_name') }}</label>

                                <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="{{ trans(app()->getLocale().'.your_name') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email</label>

                                <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{ trans(app()->getLocale().'.your_message') }}</label>

                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required="" data-error="Write your message" placeholder="{{ trans(app()->getLocale().'.your_message') }}"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">{{ trans(app()->getLocale().'.send_message') }}</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.2285146507447!2d30.49290931589563!3d50.43684409622591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceee69b34277%3A0x1e896093a96f5354!2z0YPQuy4g0JvRjNCy0LAg0KLQvtC70YHRgtC-0LPQviwgNjMsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1606641512191!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection
