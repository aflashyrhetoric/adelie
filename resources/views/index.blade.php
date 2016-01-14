@extends('app')
@section('content')
<div class="section-one outer-flex">
    <div class="inner-flex">
        <h1>hello!</h1>
        <p class="adelie-description">We are Adelie. <br class="show-for-small-only">A small, full-service creative studio based in Long Island, NY.</p>
        <a href="#learn-more" class="button">LEARN MORE</a>
    </div>
</div>
<!--
* Services
-->
<div id="learn-more" class="row section section-two services-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <div class="web-services">
            <h3 class="service-header">WEB SERVICES</h3>
            <p class="service-subheader">
                Looking to refresh an old website? We'll help you get started on a platform that suits your budget, experience, and marketing needs. From choosing a domain name to configuring your DNS records, from wireframe to deployment, we'll guide you every step of the way.
            </p>
            @include('partials/web-services')
            <hr class="mini-hr">
        </div>
        <div class="features">
            <h3 class="service-header">DESIGN SERVICES</h3>
            <p class="service-subheader">
                Establishing and marketing a cohesive brand identity is no small undertaking. Today's digital era demands consistency and a unique voice. We'll help you craft a visual identity that gracefully combines your brand with modern design trends to leave a striking impression.
            </p>
            @include('partials/branding-services')
        </div>
    </div>
</div>
<!--
* Features
-->
<div class="row section section-three features-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <h4 class="feature-description">Why Adelie?</h4>
        @include('partials/features')
    </div>
</div>
<div class="row section section-four cta">
    <div class="
    small-12 
    small-centered
    medium-10 
    large-4
    columns">
        <h1>Ready to begin?</h1>
        <h4>Let's build something great.</h4>
        <hr class="mini-hr">
        <a class="button" href="contact">Request A Quote</a>
        <br>
        <a href="meet">Or, click here to meet the team!</a>
    </div>
</div>
@endsection