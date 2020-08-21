@extends('layout.app.index')
@section('title')
  خانه
@endsection

@section('contents')

    <!-- =====================================
    ==== Start Header -->
    <header class="header valign bg-img" data-scroll-index="0" {{-- data-overlay-dark="5" data-background="app/img/bg.jpg" --}} data-stellar-background-ratio="0.5">
          <div class="container">
              <div class="row">
                  <div class="owl-carousel owl-theme" >
                      <div>
                        <img src="/app/img/portfolio/1.jpg">
                      </div>
                      <div>
                          <img src="/app/img/portfolio/2.jpg">
                      </div>
                      <div>
                          <img src="/app/img/portfolio/3.jpg">
                      </div>
                  </div>
              </div>
          </div>
           <div class="arrow">
            <a href="#" data-scroll-nav="1">
                <i class="fas fa-chevron-down"></i>
            </a>
            </div>

    </header>
    <!-- End Header ====
    ======================================= -->

    <!-- =====================================
    	==== Start Hero -->
    <section class="hero section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-img mb-md50">
                        <img src="app/img/portfolio/1.jpg" alt="hadi-pic">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content" style="direction: rtl;text-align: right;">
                        <h4 class="title title-right">درباره ی من</h4>
                        <p>من <span>هادی سیفو</span> هستم یه جنگجوی تشنه.</p>
                        <p> اگه جاییت میخاره بیا به من یه تیکه بنداز تا همچین ******** که نگووو... </p>
                        <p>خلاصه من خیلی خفنم اگه میخای توم خفن شی بیش ما بیا کلاس لینکشو میذارم بایین بکش بالاااا .</p>

{{--                        <span class="buton text-center">--}}
{{--							  <a href="#0" front="Hire Me" back="&#xf1d8;" data-scroll-nav="6"></a>--}}
{{--							</span>--}}
{{--                        <span class="buton buton-bord text-center">--}}
{{--							  <a href="CV.pdf" front="Download C.V" back="&#xf019;" download="CV.pdf"></a>--}}
{{--							</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero ====
    ======================================= -->

    <!-- =====================================
    ==== Start Services -->
    <section class="services section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head full-width">
                    <h4 class="title">آموزش ها</h4>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <span class="icon icon-laptop"></span>
                        <h6>دفاع شخصی مقدماتی</h6>
                        <p>
                            دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی دفاع شخصی مقدماتی .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 active bolt">
                    <div class="item mb-md50">
                        <span class="icon icon-tablet"></span>
                        <h6>مبارزه با سلاح سرد</h6>
                        <p>سلاح سرد     <br>سلاح خیلی سرددد<br>یخ در سلاح </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <span class="icon icon-mobile"></span>
                        <h6> گریزی در بروسلی ۱ </h6>
                        <p>
                        در این بخش بخشی از تکنیک های بروسلی را که بطور روزانه در کارهاش استفاده میکرد رو اموزش میدم برو حالشو ببر.
                        </p>
                    </div>
                </div>
                <div class="bord full-width"></div>
                <!--    				<div class="col-lg-4 col-md-6">-->
                <!--    					<div class="item mb-md50">-->
                <!--    						<span class="icon icon-shield"></span>-->
                <!--    						<h6>Clean Code</h6>-->
                <!--    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>-->
                <!--    					</div>-->
                <!--    				</div>-->
                <!--    				<div class="col-lg-4 col-md-6 active">-->
                <!--    					<div class="item mb-sm50">-->
                <!--    						<span class="icon icon-mobile"></span>-->
                <!--    						<h6>Fully Responsive</h6>-->
                <!--    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>-->
                <!--    					</div>-->
                <!--    				</div>-->
                <!--    				<div class="col-lg-4 col-md-6">-->
                <!--    					<div class="item">-->
                <!--    						<span class="icon icon-gears"></span>-->
                <!--    						<h6>Custom Support</h6>-->
                <!--    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>-->
                <!--    					</div>-->
                <!--    				</div>-->

            </div>
        </div>
    </section>
    <!-- End Services ====
    ======================================= -->





    <!-- =====================================
    ==== Start Blog -->
    <section class="blog section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head full-width" style="margin-bottom:60px;">
                    <h4 class="title">مقالات</h4>
                </div>


{{--                <div class="offset-md-2 col-md-8" style="margin-bottom: 80px;">--}}

{{--                    In this section, I'm gathering the important articles about programming that can be useful to be an update programmer.--}}

{{--                </div>--}}




                <div class="owl-carousel owl-theme">
                    <div class="pitem">
                        <div class="post-img">
                            <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">
                                <img src="app/img/blog/js2019.png" alt="" style="height: 241px;">
                            </a>
                            <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for" class="tag"  target="_blank">سلاح سرد</a>
                        </div>
                        <div class="content">
                            <h3 class="text-right article-title">
                                <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">
                                   سلاح سرد چیست و چرا؟
                                </a>
                            </h3>
                            <p class="text-right">
                                سلاح سرد سلاحی است که از لحاظ دمایی سرد بوده و وقتی با ان کسی را میزنیم طرف را داغ نموده و به غلط کردن میندازیم.
                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">ادامه مقاله</a>
    								</span>
                                <span class="by">
    									<a>بروسلی</a>
    								</span>
                            </div>
                        </div>
                    </div>
                    <div class="pitem">
                        <div class="post-img">
                            <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA" target="_blank">
                                <img src="app/img/blog/cssToolkit.jpg" alt=""  style="height: 241px;">
                            </a>
                            <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA" class="tag" target="_blank">امادگی جسمانی</a>
                        </div>
                        <div class="content">
                            <h3 class="text-right article-title">
                                <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA"  target="_blank">    سلاح سرد چیست و چرا؟</a>
                            </h3>
                            <p class="text-right">
                                سلاح سرد سلاحی است که از لحاظ دمایی سرد بوده و وقتی با ان کسی را میزنیم طرف را داغ نموده و به غلط کردن میندازیم.

                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://www.youtube.com/watch?v=5XsZnCwbgwA"> ادامه مقاله</a>
    								</span>
                                <span class="by">
    									<a>جومونگ</a>
    								</span>
                            </div>
                        </div>
                    </div>
                    <div class="pitem">
                        <div class="post-img">
                            <a  href="https://alligator.io/js/for-of-for-in-loops/" target="_blank">
                                <img src="app/img/blog/maxresdefault.jpg" alt="" style="height: 241px;">
                            </a>
                            <a href="https://alligator.io/js/for-of-for-in-loops/" class="tag" target="_blank">
                                هوش رزمی
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="text-right article-title">
                                <a href="https://alligator.io/js/for-of-for-in-loops/" target="_blank">     سلاح سرد چیست و چرا؟</a>
                            </h3>
                            <p class="text-right">
                                سلاح سرد سلاحی است که از لحاظ دمایی سرد بوده و وقتی با ان کسی را میزنیم طرف را داغ نموده و به غلط کردن میندازیم.

                            </p>
                            <div class="info">
    								<span class="more" >
    									<a href="https://alligator.io/js/for-of-for-in-loops/" target="_blank">ادامه مقاله</a>
    								</span>
                                <span class="by">
    									<a >جکی جان</a>
    								</span>
                            </div>
                        </div>
                    </div>
                    <div class="pitem">
                        <div class="post-img">
                            <img src="app/img/blog/cypress.jpg" alt="" style="height: 241px;">
                            <a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth" target="_blank" class="tag">مرگ تدریجی یک رویا</a>
                        </div>
                        <div class="content">
                            <h3 class="text-right article-title">
                                <a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth" target="_blank">    سلاح سرد چیست و چرا؟</a>
                            </h3>
                            <p class="text-right">
                                سلاح سرد سلاحی است که از لحاظ دمایی سرد بوده و وقتی با ان کسی را میزنیم طرف را داغ نموده و به غلط کردن میندازیم.

                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth">ادامه مقاله</a>
    								</span>
                                <span class="by">
    									<a>ستاره دراگون</a>
    								</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog ====
    ======================================= -->

    <!-- =====================================
    ==== Start Contact -->
    <section class="contact section-padding bg-img" data-overlay-dark="8" data-background="img/b5.jpg" data-scroll-index="6">
        <div class="container">
            <div class="row">

                <!-- Section-Head -->
                <div class="section-head full-width mb-50">
                    <h4 class="title">تماس با من</h4>
                </div>

                <form class="form full-width" id="contact-form" method="post" action="http://www.innovationplans.com/idesign/personala/contact.php">
                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input  id="form_name" type="text" name="name" placeholder="نام*" required="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder=" ایمیل*" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" placeholder="موضوع">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="متن شما*" rows="4" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <span class="buton buton-lg">
	                                    	<button type="submit" front="ارسال بیام" back="&#xf35d;"></button>
										</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="info full-width">
                    <div class="row text-right">
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-mobile float-right"></span>
                                <div class="cont">
                                    <h6 class="footer-title">تلفن</h6>
                                    <p>0912 222 22 22</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-envelope float-right"></span>
                                <div class="cont">
                                    <h6 class="footer-title">ایمیل</h6>
                                    <p>1tabehzadi@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <span class="icon icon-map-pin float-right"></span>
                                <div class="cont">
                                    <h6 class="footer-title">آدرس</h6>
                                    <p>خیابان فروردین کوچه اردیبهشت بلاک ۱۲</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact ====
    ======================================= -->

@endsection
@section('scripts')
    <script>

    </script>

@endsection
