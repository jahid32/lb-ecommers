@extends('layouts.app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Register</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-1">
                <div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-15.jpg" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-3">
                <div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-14.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Register Section Start -->
    <div class="register-section section mt-90 mb-90">
        <div class="container">
            <div class="row">

                <!-- Register -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="ee-register">

                        <h3>We will need for your registration</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>

                        <!-- Register Form -->
                        <form  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <input type="text"  placeholder="Your name here" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="text"  placeholder="Your user name here" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="email" name="email" placeholder="Your email here"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="test" name="phone" placeholder="Your phone here"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"  value="{{ old('phone') }}" required>
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="password" name="password" placeholder="Enter passward" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-12 mb-30"><input type="password" name="password_confirmation" required placeholder="Conform password"></div>
                                <div class="col-12"><input type="submit" value="register"></div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Account Image -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="ee-account-image">
                        <h3>Upload your Image</h3>

                        <img src="{{asset('front/assets')}}/images/account-image-placeholder.jpg" alt="Account Image Placeholder" class="image-placeholder">

                        <div class="account-image-upload">
                            <input type="file" name="chooseFile" id="account-image-upload">
                            <label class="account-image-label" for="account-image-upload">Choose your image</label>
                        </div>

                        <p>jpEG 250x250</p>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Register Section End -->



@endsection


