
<!-- Set-Up Account-->
	<section class="wrapper bg-soft-primary angled upper-start">
                <div class="container-fluid py-10 py-md-5 footer-promo">
                    <div class="container py-1 py-md-1">
                        <div class="d-lg-flex flex-row align-items-lg-center">
                            <h3 class="display-3 mb-6 py-3 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25">Join the community of smart business decision makers.</h3>
                            <a href="/setupAccount" class="btn btn-primary rounded-pill mb-0 text-nowrap">Setup Huiospay Account</a>
                        </div>
                    </div>
                </div>
            </section>
<!-- End Set-Up Account-->



            <footer class="bg-light text-dark">
                <div class="container pt-10 pt-md-12">
                    <div class="row py-7 gy-6 gy-lg-0">
                        <div class="col-md-4 col-lg-3">
                            <div class="widget d-flex align-items-center  h-100">
                                <div class="mx-auto my-auto">
                                    <img class="mb-4 mx-auto" src="{{asset('medias/images/logo.png')}}" srcset="{{asset('medias/images/logo.png')}}" alt="" />
                                    <nav class="nav social w-100">
                                        <a href="platform_social_twitter"><i class="uil uil-twitter"></i></a>
                                        <a href="platform_social_facebook"><i class="uil uil-facebook-f"></i></a>
                                        <a href="platform_social_linkedin"><i class="uil uil-linkedin"></i></a>
                                        <a href="platform_social_instagram"><i class="uil uil-instagram"></i></a>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title mb-3">Company</h4>
                                <ul class="list-unstyled  mb-0">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title mb-3">Legal</h4>
                                <ul class="list-unstyled  mb-0">
                                    <li><a href="/cookies">Cookies Policy</a></li>
                                    <li><a href="/privacy">Privacy Policy</a></li>
                                    <li><a href="/terms">Terms & Conditions</a></li>
                                    <li><a href="/agreement">Merchant Service Agreement</a></li>
                                    <li><a href="/faqs">Frequently Asked Questions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title mb-3">Contact</h4>
                                <address class="pr-xl-2">Plot 86, Cadastral Zone B06, Mabushi District, Abuja.</address>
                                <a href="mailto:hello@huiospay.com">hello@huiospay.com</a><br />
                                <a href="tel:08037086670">08037086670</a><br />
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr class="my-2 mt-4" />
                    <div class="col-md-12">
                        <p class="py-2 text-center">Copyrights &copy;  2020 - 2022, HuiosPay. All rights reserved. Powered By <a href="#" class="text-warning">HUIOSPAY</a></p>
                    </div>
                </div>
            </footer>
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
            @include('cookie-consent::index')
            <a href="#" class="btn btn-primary rounded-pill mx-1 mb-2 mb-md-0 cookie-policy-modal d-none" data-bs-toggle="modal" data-bs-target="#cookie-policy-modal">Cookie</a>
			<div class="modal fade modal-pop modal-bottom-center" id="cookie-policy-modal" tabindex="-1">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-body p-6">
							<div class="row">
								<div class="col-md-12 col-lg-9 my-auto align-items-center">
									<h4 class="mb-2">Cookie Policy</h4>
									<p class="mb-0">We use cookies to personalize content to make our site easier for you to use. Read our <a href="https://www.huiospay.com/cookies">Cookie Policy </a></p>
								</div>
								<div class="col-md-12 col-lg-3 text-md-end my-auto pt-2">
									<a href="#" class="btn btn-primary rounded-pill cookie-policy-accepted" data-bs-dismiss="modal" aria-label="Close">Accept Cookies</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- <div class="modal fade modal-popup" id="modal-02" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <figure class="mb-6"><img src="{{asset('medias/images/construction.jpg')}}" srcset="{{asset('medias/images/construction@2x.jpg 2x')}}" alt="" /></figure>
                                </div>
                            </div>
                            <h3>We're Under construction</h3>
                            <p class="mb-6">We are launching the most awesome payment platform in the history of Africa soon, its gonna worth the wait.</p>
                            {{-- <div class="newsletter-wrapper">
                                <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <!-- Begin Mailchimp Signup Form -->
                                    <div id="mc_embed_signup">
                                    <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL">
                                            <label for="mce-EMAIL">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main> -->
        <div class="modal fade modal-pop" id="modal-maintenance" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <figure class="mb-6"><img src="{{asset('medias/images/construction.jpg')}}" srcset="https://www.huiospay.com/medias/images/construction@2x.jpg 2x" alt="" /></figure>
                                </div>
                            </div>
                            <h3>We're Under construction</h3>
                            <p class="mb-6">We are launching the most awesome payment platform in the history of Africa soon, its gonna worth the wait.</p>

                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script type="text/javascript" src="{{asset('shared/plugins/jquery/jquery-3.6.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/toast/dist/jquery.toast.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap/5.0.2/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/lottie-player/lottie-player.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/theme.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/script.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/scnip.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/functions.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/script.js')}}"></script>

        <script type="text/javascript" id='script'>
            app.initialize();
		</script>
    </body>
</html>
