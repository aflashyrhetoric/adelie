@extends('app')
@section('content')
<div class="section-one">
    <h1>adelie</h1>
    <p>We are a small, full-service creative studio based in Long Island, NY.</p>
    <p>We aim to elevate small businesses by leveraging the power of the web.</p>
    <a href="#learn-more" class="button">LEARN MORE</a>
</div>
<!--
* Services
-->
<div class="row section section-two services-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <h3 class="service-header">WEB SERVICES</h3>
        @include('partials/web-services')
        <h3 class="service-header">BRANDING SERVICES</h3>
        @include('partials/branding-services')
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