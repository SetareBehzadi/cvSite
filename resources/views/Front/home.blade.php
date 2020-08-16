@extends('layout.app.index')
@section('title')
  Home
@endsection

@section('contents')


    <!-- =====================================
    	==== Start Hero -->
    <section class="hero section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-img mb-md50">
                        <img src="app/img/1ta.jpeg" alt="Yekta Behzadi">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h4 class="title title-left">I Am UI Designer</h4>
                        <p>I am <span>Yekta Behzadi</span> I'm gratuated from law university.But I continued my education in programming.My academic background in the law field will help me to have a unique services that can observe and create content based on legal point of view and it's intellectual property rights.</p>
                        <p> Every agreements between parties must be based on contract.If you want to sell a service or program on a site you have to have a contract which make clear the rights and obligations of two parties.<br>
                            There are some factors influence the area of programming according to intelectual law they can be Trademarks which protect your name,domain or evrything related to your product design And Trade Secrets in terms of a situation in which the owner wish to keep th codes in a certain order or govern the realm of the knowledge from the risk of copying.</p>


                        <span class="buton text-center">
							  <a href="#0" front="Hire Me" back="&#xf1d8;" data-scroll-nav="6"></a>
							</span>
                        <span class="buton buton-bord text-center">
							  <a href="CV.pdf" front="Download C.V" back="&#xf019;" download="CV.pdf"></a>
							</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero ====
    ======================================= -->


    <!-- =====================================
    ==== Start Resume -->
    <section class="resume bg-img" data-overlay-dark="8" data-background="img/b4.jpg" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="item mb-md50">
                        <span class="icon icon-pencil"></span><br>
                        <h5 class="title title-left">Education</h5>
                        <ul>
                            <li>
                                <h6>University of law</h6>
                                <p>Bachelor of law</p>
                            </li>

                            <li>
                                <h6>School of programming</h6>
                                <p>programing degree</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item mb-md50">
                        <span class="icon icon-briefcase"></span><br>
                        <h5 class="title title-left">Experience</h5>
                        <ul>
                            <li>
                                <h6>Web Developer specialist</h6>
                                <p>Parsafshin company</p>
                            </li>
                            <li>
                                <h6>member of UX Web Designer group</h6>
                                <p>Asarad company</p>
                            </li>
                            <li>
                                <h6>Front-End Developer</h6>
                                <p>Raymand procaess company</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item skills">
                        <span class="icon icon-layers"></span><br>
                        <h5 class="title title-left">My Skills</h5>

                        <div class="skill">
                            <h6>Web Design <span>90%</span></h6>
                            <div class="skills-progress"><span data-value='90%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>JavaScript <span>75%</span></h6>
                            <div class="skills-progress"><span data-value='75%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>React <span>50%</span></h6>
                            <div class="skills-progress"><span data-value='50%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>CEO <span>75%</span></h6>
                            <div class="skills-progress"><span data-value='75%'></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Resume ====
    ======================================= -->


    <!-- =====================================
    ==== Start Services -->
    <section class="services section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head full-width">
                    <h4 class="title">My Services</h4>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <span class="icon icon-laptop"></span>
                        <h6>Web Applications</h6>
                        <p>
                            User friendly and powerful bespoke web applications that improve the scalability and efficiency of your organisation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 active bolt">
                    <div class="item mb-md50">
                        <span class="icon icon-tablet"></span>
                        <h6>Tablet Applications</h6>
                        <p>Reliable and robust tablet applications that<br>streamline processes and enable greater<br>collaboration, visibility and decision making.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <span class="icon icon-mobile"></span>
                        <h6>Mobile Applications</h6>
                        <p>
                            Intuitive mobile applications integrated with core business systems that support fast and easy access to data and business procedures.
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
                    <h4 class="title">Articles</h4>
                </div>


                <div class="offset-md-2 col-md-8" style="margin-bottom: 80px;">

                    In this section, I'm gathering the important articles about programming that can be useful to be an update programmer.

                </div>




                <div class="owl-carousel owl-theme">
                    <div class="pitem">
                        <div class="post-img">
                            <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">
                                <img src="app/img/blog/js2019.png" alt="" style="height: 241px;">
                            </a>
                            <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for" class="tag"  target="_blank">Javascript</a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">
                                    What's New in JavaScript for 2019
                                </a>
                            </h3>
                            <p>

                                For the last several years, JavaScript has been evolving on a steady cadence with new language features. If you’re curious to see...

                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://developer.okta.com/blog/2019/01/22/whats-new-in-es2019?utm_campaign=whats-could-be-new-in-javascript-for"  target="_blank">Read More</a>
    								</span>
                                <span class="by">
    									<a>By : Admin</a>
    								</span>
                            </div>
                        </div>
                    </div>
                    <div class="pitem">
                        <div class="post-img">
                            <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA" target="_blank">
                                <img src="app/img/blog/cssToolkit.jpg" alt=""  style="height: 241px;">
                            </a>
                            <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA" class="tag" target="_blank">Css</a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="https://www.youtube.com/watch?v=5XsZnCwbgwA"  target="_blank">Your CSS Layout Toolkit for 2019</a>
                            </h3>
                            <p>
                                Your CSS Layout Toolkit for 2019 - Rachel Andrew As we head into the final quarter of 2018, let’s take a look at where we are with CSS Grid...
                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://www.youtube.com/watch?v=5XsZnCwbgwA">Read More</a>
    								</span>
                                <span class="by">
    									<a>By : Admin</a>
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
                                Javascript
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="https://alligator.io/js/for-of-for-in-loops/" target="_blank"> for...of vs for...in Loops in JavaScript</a>
                            </h3>
                            <p>
                                Traditional for loops are so last year! for..of and for…in loops give us a very clean and concise syntax to iterate over all kinds of iterables...
                            </p>
                            <div class="info">
    								<span class="more" >
    									<a href="https://alligator.io/js/for-of-for-in-loops/" target="_blank">Read More</a>
    								</span>
                                <span class="by">
    									<a >By : Admin</a>
    								</span>
                            </div>
                        </div>
                    </div>
                    <div class="pitem">
                        <div class="post-img">
                            <img src="app/img/blog/cypress.jpg" alt="" style="height: 241px;">
                            <a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth" target="_blank" class="tag">Cypress</a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth" target="_blank">End-to-End Testing with Cypress and Auth0</a>
                            </h3>
                            <p>
                                This post discusses how to authenticate against Auth0 in your Cypress end-to-end tests successfully. You will use a small sample React....
                            </p>
                            <div class="info">
    								<span class="more">
    									<a href="https://auth0.com/blog/end-to-end-testing-with-cypress-and-auth0/?utm_campaign=end-to-end-testing-with-cypress-and-auth">Read More</a>
    								</span>
                                <span class="by">
    									<a>By : Admin</a>
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
                    <h4 class="title">Get In Touch</h4>
                </div>

                <form class="form full-width" id="contact-form" method="post" action="http://www.innovationplans.com/idesign/personala/contact.php">
                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Name *" required="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email *" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Your Message *" rows="4" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <span class="buton buton-lg">
	                                    	<button type="submit" front="Send Message" back="&#xf35d;"></button>
										</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="info full-width">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-mobile"></span>
                                <div class="cont">
                                    <h6>Phone</h6>
                                    <p>+46 73 757 87 93</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-envelope"></span>
                                <div class="cont">
                                    <h6>Email</h6>
                                    <p>1tabehzadi@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <span class="icon icon-map-pin"></span>
                                <div class="cont">
                                    <h6>Address</h6>
                                    <p>Kyrkogatan 16B, 37132 Karlskrona</p>
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

