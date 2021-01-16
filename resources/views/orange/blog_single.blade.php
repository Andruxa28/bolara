@extends(env('THEME').'.layouts.site')
@section('title', $data['meta_title'])
@section('description', $data['meta_description'])
@section('og_title', $data['og_title'])
@section('og_description', $data['og_description'])

@section('content')
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{$data['post']['img']}}" alt="image">
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <i class="bx bx-user"></i>
                                        <a href="#">John Anderson</a>
                                    </li>
                                    <li>
                                        <i class="bx bx-time"></i>
                                        <a href="#">September 24, 2020</a>
                                    </li>
                                    <li>
                                        <i class="bx bx-comment"></i>
                                        <a href="#">0 Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <h3>The benefits that we aget through credit cards.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>

                            <h3>How do credit cards work?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <ul class="features-list">
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                            </ul>

                            <h3>Different type of credit cards</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <ul class="features-list">
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                            </ul>

                            <blockquote class="wp-block-quote">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                            </blockquote>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span>Tags:</span>
                                <a href="#">Banking</a>
                                <a href="#">Credit cards</a>
                                <a href="#">Saving</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="index.html">
                                        <i class="flaticon-left-arrow"></i>
                                        Prev Post
                                    </a>
                                </div>
                                <div class="nav-next">
                                    <a href="index.html">
                                        Next Post
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3 class="comments-title">3 Comments:</h3>

                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/client/client-1.jpg" class="avatar" alt="image">
                                                <b class="fn">John Jones</b>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="index.html">
                                                    <span>April 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/client/client-2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="index.html">
                                                            <span>April 24, 2020 at 10:59 am</span>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                </div>
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>

                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/client/client-3.jpg" class="avatar" alt="image">
                                                <b class="fn">Sarah Taylor</b>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="index.html">
                                                    <span>April 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name</label>
                                        <input type="text" id="author" placeholder="Your Name*" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email</label>
                                        <input type="email" id="email" placeholder="Your Email*" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" placeholder="Website" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="Post a comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                     <div class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>

                            <ul>
                                <li><a href="#">Advice</a></li>
                                <li><a href="#">Credit cards</a></li>
                                <li><a href="#">Financial</a></li>
                                <li><a href="#">Making Money</a></li>
                                <li><a href="#">Personal financial</a></li>
                                <li><a href="#">Online banking</a></li>
                                <li><a href="#">Mobile banking</a></li>
                            </ul>
                        </div>

                        <div class="widget widget_leve_posts_thumb">
                            <h3 class="widget-title">Recent posts</h3>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 10, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Bank is the best way to save in the future</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 21, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Why do you need to open a bank account?</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 30, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">The benefits that we get through credit cards.</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg4" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 10, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Financing loans available to small businesses</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg5" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 21, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">5 Ways you can prepare your business for success</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg6" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 30, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Tips for saving money and better guide for investment</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg7" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 10, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Financing loans available to small businesses</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg8" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 21, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">The benefits that we get through credit cards.</a></h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg9" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>May 30, 2020</span>
                                    <h4 class="title usmall"><a href="blog-details.html">Bank is the best way to save in the future</a></h4>
                                </div>
                            </article>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">Popular tags</h3>

                            <div class="tagcloud">
                                <a href="#">Banking</a>
                                <a href="#">Credit cards</a>
                                <a href="#">Saving</a>
                                <a href="#">Mobile banking</a>
                                <a href="#">Security</a>
                                <a href="#">Costs</a>
                                <a href="#">Account</a>
                                <a href="#">Business</a>
                            </div>
                        </div>

{{--                        <div class="widget widget_newsletter">--}}
{{--                            <h3 class="widget-title">Newsletter</h3>--}}

{{--                            <form class="newsletter-form" data-toggle="validator" novalidate="true">--}}
{{--                                <input type="email" class="input-newsletter" placeholder="Email address" name="EMAIL" required="" autocomplete="off">--}}

{{--                                <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;">Subscribe</button>--}}
{{--                                <div id="validator-newsletter" class="form-result"></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
