@extends('visitors.layouts.visitors',['title' => 'Team'])
@section('content')
        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Our Volunteers</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Voluenteers</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="about-section bd-bottom shape circle padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <img src="img/sign.png" alt="sign">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding">
                        <div class="about-wrap row">
                            <div class="col-md-6 xs-padding">
                                <img src="img/history.jpg" alt="about-thumb">
                                <h3>Our History</h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                            <div class="col-md-6 xs-padding">
                                <img src="img/mission.jpg" alt="about-thumb">
                                <h3>Our Mission</h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Causes Section -->

        <section class="team-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="team-wrapper row">
                    <div class="col-lg-12 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-1.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Jonathan Smith <span>Communicator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-2.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Angelina Rose <span>Certified Reader</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-2 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                    <img src="img/team-3.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Taylor Swift <span>Event Creator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-3 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-4.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Michel Brown <span>Internet Specialist</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-4 -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->

        <section id="counter" class="counter-section">
		    <div class="container">
                <ul class="row counters">
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-money"></i>
                            <h3 class="counter">85389</h3>
                            <h4 class="text-white">Money Donated</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">10693</h3>
                            <h4 class="text-white">Volunteer Around The World</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">50177</h3>
                            <h4 class="text-white">People Impacted</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">669</h3>
                            <h4 class="text-white">Positive Feedbacks</h4>
                        </div>
                    </li>
                </ul>
		    </div>
		</section><!-- Counter Section -->

        <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="img/sponsor-1.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-2.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-3.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-4.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-5.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-6.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-7.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-8.png" alt="sponsor-image">
                    </li>
                </ul>
            </div>
        </div><!-- ./Sponsor Section -->

        <section class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <img src="img/logo-light.png" alt="logo">
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <h3>Recent Campaigns</h3>
                            <ul class="widget-link">
                                <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                                <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <h3>Charitify Location</h3>
                            <ul class="address">
                                <li><i class="ti-email"></i> Info@YourDomain.com</li>
                                <li><i class="ti-mobile"></i> +(333) 052 39876</li>
                                <li><i class="ti-world"></i> Www.YourWebsite.com</li>
                                <li><i class="ti-location-pin"></i> 60 Grand Avenue. Central New Road 0708, USA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Widget Section -->

        <footer class="footer-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding">
                        <div class="copyright">&copy; 2021 Charitify Powered by DynamicLayers</div>
                    </div>
                    <div class="col-md-6 sm-padding">
                        <ul class="footer-social">
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Report Problem</a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</footer><!-- /Footer Section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

		<!-- jQuery Lib -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/vendor/bootstrap.min.js"></script>
		<!-- Tether JS -->
		<script src="js/vendor/tether.min.js"></script>
        <!-- Imagesloaded JS -->
        <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- isotope JS -->
		<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="js/vendor/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="js/vendor/jquery.ajaxchimp.min.js"></script>
        <!-- Counterup JS -->
		<script src="js/vendor/jquery.counterup.min.js"></script>
        <!-- waypoints js -->
		<script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
        <!-- Slick Nav JS -->
        <script src="js/vendor/jquery.slicknav.min.js"></script>
        <!-- Nivo Slider JS -->
        <script src="js/vendor/jquery.nivo.slider.pack.js"></script>
        <!-- Letter Animation JS -->
		<script src="js/vendor/letteranimation.min.js"></script>
        <!-- Wow JS -->
		<script src="js/vendor/wow.min.js"></script>
		<!-- Contact JS -->
		<script src="js/contact.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

    </body>

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 11:34:28 GMT -->
</html>
