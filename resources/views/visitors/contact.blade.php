@extends('visitors.layouts.visitors',['title' => 'Contact'])
@section('content')

        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    {{-- <h2>Contact With Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="contact-section padding">
            <div id="google_map"></div><!-- /#google_map -->
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="contact-info">
                            <h3>Donate books</h3>
                            <p>Here is a list of books provided by Lotus Petal Foundation required for their library. You may buy these books or donate
                            funds to purchase them.</p>
                           <h3>Donate other resources</h3>
                           <p>Donate dance costumes, formal attire – Indian and Western, watches, costume jewelry.</p>
                           <h3>Volunteer</h3>
                           <p>Become a volunteer to help us collect resources, have them delivered to the right recipients, help in cataloguing books
                        at libraries.</p>
                            {{-- <ul>
                                <li><i class="ti-location-pin"></i> 315 West 33rd Street New York, NY 10001</li>
                                <li><i class="ti-mobile"></i> +1 212 425 8617, +1 212 425 8533</li>
                                <li><i class="ti-email"></i> Youremail@companyname.com</li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <h3>Drop us a line</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <form action="contact" method="post"
                                class="form-horizontal">@csrf
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                            required>
                                            @error('name')
                                            <div class="text-danger">{{ $mesaage }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                            required>
                                            @error('email')
                                            <div class="text-danger">{{ $mesaage }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control message"
                                            placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button id="submit" class="default-btn" type="submit">Send Message</button>
                                    </div>
                                </div>

                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>

                        </div>
                    </div>

                    {{-- <h3 class="text-center">It takes a pencil to write a story, a book to open minds... and a <br>small donation to make a
                        difference!</h3> --}}

<div class="text-center"><h3>It takes a pencil to write a story, a book to open minds... and a<br> small donation to make a difference!</h3></div>
            </div>
</div>
        </section><!-- /Contact Section -->



        @endsection
