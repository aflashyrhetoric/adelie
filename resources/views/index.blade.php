@extends('app')
@section('content')
<div class="section-one outer-flex">
    <div class="inner-flex">
        <h1 class="animated fadeInDown no-cursor">hello!</h1>
        <p class="animated fadeIn adelie-description no-cursor">We are Adelie. <br class="show-for-small-only">A small, full-service creative studio based in Long Island, NY.</p>
        <a id="learn-more" class="animated fadeIn button">LEARN MORE <i id="down-arrow" class="v-h fa fa-arrow-down animated"></i></a>

    </div>
</div>
<!--
* Services
-->
<div id="services" class="row section section-two services-list web-blue mbn">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <div class="web-services">
            <h3 class="service-header">WEB SERVICES</h3>
            <p class="service-subheader">
                Looking to refresh an old website? We'll help you get started on a platform that suits your budget, experience, and marketing needs. From choosing a domain name to configuring your DNS records, from wireframe to deployment, we'll guide you every step of the way.
            </p>
            @include('partials/web-services')
        </div>
    </div>
</div>
<div id="learn-more" class="row section section-two services-list branding-section branding-red mbn">
    <div class="small-12 medium-10 large-8 small-centered columns">
        <div class="branding-services">
            <h3 class="service-header">BRANDING SERVICES</h3>
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
    <div class="small-12 medium-10 large-12 small-centered columns">
        <h3 class="feature-description">WHY ADELIE?</h3>
        @include('partials/features')
    </div>
</div>
    <div class="
        small-12
        small-centered
        medium-10
        large-12
        tac 
        columns
        section-four
        ">

        <div id="cta" class="cta">
            <i class="fa fa-5x fa-check"></i>
            <h1>Ready to begin?</h1>
            <h4>Let's build something great.</h4>
            <hr class="mini-hr">
            <a id="request-quote" class="animated button" href="/request">Request A Quote</a>
            <br>
            <a href="meet">Or, click here to meet the team!</a>
        </div>
    </div>
@endsection
