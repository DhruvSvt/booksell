
<header id="header" class="header-section">
     <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="mailto:adhit.mandal29@gmail.com"><i class="ti-email"></i>adhit.mandal29@gmail.com</a></li>
                        {{-- <li><a href="#"><i class="ti-mobile"></i>+(333) 052 39876</a></li> --}}
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="{{ route('home') }}"><img  class="head-logo" src="{{ config('app.url') }}/img/books&beyond logo.png" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li><a href="{{ route('home') }}">HOME</a></li>
                        <li><a href="{{ route('about') }}">ABOUT</a></li>
                        <li><a href="{{ route('our-ngo') }}">OUR-NGO</a></li>
                        <li><a href="{{ route('acknowledgements') }}">ACKNOWLEDGEMENTS</a></li>
                        {{-- <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('volunteer') }}">Volunteers</a></li>
                                <li><a href="{{ route('404') }}">404 Not Found</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="{{ route('blog-grid') }}">Blog Grid</a></li>
                                <li><a href="{{ route('blog-left-sidebar') }}">Blog Left Sidebar</a></li>
                                <li><a href="{{ route('blog-right-sidebar') }}">Blog Right Sidebar</a></li>
                                <li><a href="{{ route('blog-single') }}">Blog Single</a></li>
                            </ul> --}}
                        </li>
                        <li> <a href="{{ route('contact') }}">CONTACT</a></li>
                    </ul>
                    {{-- <a href="#" class="default-btn">DONATE NOW</a> --}}
                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->
