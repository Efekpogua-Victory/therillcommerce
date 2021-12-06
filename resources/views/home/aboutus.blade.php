@extends('layouts.main')
@section('title', 'Learn More About') 
@section('styles')
@parent
<link rel="stylesheet" href="{{asset('app/css/style.min.css')}}">
@endsection
@section('content')
    <div class="text-left page-header page-header-bg"
        style="background: 50%/cover #D4E1EA url('app/images/page-header-bg.jpg');">
        <div class="container">
            <h1><span>ABOUT US</span>
                OUR COMPANY</h1>
            <a href="{{route('contactus')}}" class="btn btn-dark">Contact</a>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="about-section">
        <div class="container">
            <h2 class="subtitle">OUR STORY</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.</p>

            <p class="lead">“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                default model search for evolved over sometimes by accident, sometimes on purpose ”</p>
        </div><!-- End .container -->
    </div><!-- End .about-section -->

    <div class="features-section bg-gray">
        <div class="container">
            <h2 class="subtitle">WHY CHOOSE US</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-white feature-box">
                        <i class="icon-shipped"></i>

                        <div class="p-0 feature-box-content">
                            <h3>NationaWide Shipping</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="bg-white feature-box">
                        <i class="icon-us-dollar"></i>

                        <div class="p-0 feature-box-content">
                            <h3>100% Money Back Guarantee</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="bg-white feature-box">
                        <i class="icon-online-support"></i>

                        <div class="p-0 feature-box-content">
                            <h3>Online Support 24/7</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .features-section -->

@endsection
@section('scripts')
@parent
@endsection

