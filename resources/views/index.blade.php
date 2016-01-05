@extends('app')
@section('content')
<div class="section-one outer-flex">
    <div class="inner-flex">
        <h1>Hello!</h1>
        <p>We are Adelie. A small, full-service creative studio based in Long Island, NY.</p>
        <p>We aim to elevate small businesses by leveraging the power of the web.</p>
        <a href="#learn-more" class="button">LEARN MORE</a>
    </div>
</div>
<!--
* Services
-->
<div class="row section section-two services-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <div class="web-services">
            <h3 class="service-header">WEB SERVICES</h3>
            @include('partials/web-services')
        </div>
        <div class="features">
            <h3 class="service-header">BRANDING SERVICES</h3>
            @include('partials/branding-services')
        </div>
    </div>
</div>
<!--
* Features
-->
<div class="row section section-three">
    <div class="small-12 medium-6 small-centered columns feature-description">
        <h4>WHY ADELIE?</h4>
    </div>
</div>
<div class="row section section-three features-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        @include('partials/features')
    </div>
</div>
@endsection