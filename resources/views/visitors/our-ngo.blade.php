@extends('visitors.layouts.visitors',['title' => 'OUR-NGO'])
@section('content')


        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Recent Causes</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Causes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="causes-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="causes-wrap row">
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-1.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>First charity activity of this summer.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-1 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-2.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Big charity: build school for poor children.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-2 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-3.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Building clean-water system for rural poor.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-3 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-1.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>First charity activity of this summer.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-4 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-2.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Big charity: build school for poor children.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-5 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-3.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Building clean-water system for rural poor.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-6 -->
                </div>
            </div>
        </section><!-- /Causes Section -->

        <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <h4>Featured Campaigns</h4>
                            <h2>Featured project to built a School.</h2>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                            </div>
                            <div class="donation-box">
                                <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                                <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                            </div>
                            <a href="#" class="default-btn">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="img/video.jpg" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Featured Campaigns Section -->

        <section class="testimonial-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>What People Say</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-1.jpg" alt="profile">
                            <h4>Jonathan Smith <span>Marketer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-2.jpg" alt="profile">
                            <h4>Angelina Rose <span>Designer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-3.jpg" alt="profile">
                            <h4>Taylor Swift <span>Developer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-4.jpg" alt="profile">
                            <h4>Michel Brown <span>Programer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial Section -->

        <section class="blog-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Recent Stories</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">The History of Donation Told</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Help the Comunity</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                        </div>
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- Blog Section -->

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

@endsection


