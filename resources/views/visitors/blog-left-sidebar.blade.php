@extends('visitors.layouts.visitors',['title' => 'Blog-left-sidebar'])
@section('content')

        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Blog Left Sidebar</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row left-sidebar">
                   <div class="col-lg-3 xs-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget mb-50">
                                <h4>Search Posts</h4>
                                <form action="#" class="search-form">
                                    <input type="text" class="form-control" placeholder="Type here">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h4>Categories</h4>
                                <ul class="cat-list">
                                    <li><a href="#">Wed design</a><span>(2)</span></li>
                                    <li><a href="#">Graphics design</a><span>(4)</span></li>
                                    <li><a href="#">Wordpress</a><span>(7)</span></li>
                                    <li><a href="#">Joomla</a><span>(5)</span></li>
                                    <li><a href="#">Marketing</a><span>(3)</span></li>
                                    <li><a href="#">Music</a><span>(2)</span></li>
                                </ul>
                            </div><!-- Categories -->
                            <div class="sidebar-widget mb-50">
                                <h4>Recent Posts</h4>
                                <ul class="recent-posts">
                                    <li>
                                        <img src="img/rel-post-1.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-2.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Post with small image</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-3.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Quote post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-4.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard video post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-5.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">gallery post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Recent Posts -->
                            <div class="sidebar-widget mb-50">
                                <h4>Tags</h4>
                                <ul class="tags">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Post</a></li>
                                    <li><a href="#">Quotes</a></li>
                                </ul>
                            </div><!-- Tag -->
                        </div><!-- /Sidebar Wrapper -->
                    </div>
                    <div class="col-md-9 xs-padding">
                        <div class="blog-items row">
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-4.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 4 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-5.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 5 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-6.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 6 -->
                        </div>
                        <ul class="pagination_wrap mt-30">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul><!-- Pagination -->
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- /Blog Section -->

@endsection
