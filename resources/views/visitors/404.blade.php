@extends('visitors.layouts.visitors',['title' => '404'])
@section('content')

        <div class="header-height"></div>

        <section class="error-section padding">
            <div class="container">
                <div class="error-content text-center">
                    <h2>404!</h2>
                    <h5>Oops! Page Not Found</h5>
                    <p>The page you were looking for could not be found.</p>
                    <a href="{{ route('home') }}" class="default-btn">Back to Home</a>
                </div>
            </div>
        </section><!-- /Error Section -->



	@endsection
