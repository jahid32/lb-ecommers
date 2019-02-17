@extends('layouts.app')

@section('content')
<!-- Mini Cart Wrap Start -->
@include('front.partials.components.mini_cart')
<!-- Mini Cart Wrap End -->



<!-- Hero Section Start -->
@include('front.partials.components.hero_section')
<!-- Hero Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row row-10">

            <!-- Banner -->
            <div class="col-md-8 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-1.jpg" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-2.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Feature Product Section Start -->
@include('front.partials.components.feature_product')
<!-- Feature Product Section End -->

<!-- Best Sell Product Section Start -->
{{--@include('front.partials.components.best_deals')--}}
<!-- Best Sell Product Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">

            <!-- Banner -->
            <div class="col-12">
                {{--<div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-3.jpg" alt="Banner"></a></div>--}}
                <div class="banner"><a href="#"><img src="https://picsum.photos/1170/350/?product" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Feature Section Start -->
@include('front.partials.components.feature_section')
<!-- Feature Section End -->

<!-- Best Deals Product Section Start -->
@include('front.partials.components.best_deals')
<!-- Best Deals Product Section End -->

<!-- New Arrival Product Section Start -->
@include('front.partials.components.new_arrival')
<!-- New Arrival Product Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row">

            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                {{--<div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-4.jpg" alt="Banner"></a></div>--}}
                <div class="banner"><a href="#"><img src="https://picsum.photos/370/244/?random" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                {{--<div class="banner"><a href="#"><img src="{{asset('front/assets')}}/images/banner/banner-5.jpg" alt="Banner"></a></div>--}}
                <div class="banner"><a href="#"><img src="https://picsum.photos/g/370/244/?random" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="https://picsum.photos/370/244/?random" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

@endsection

