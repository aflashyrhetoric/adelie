@extends('app')
@section('content')
<div class="section-one">
    <h1>adelie</h1>
    <p>We are a small, full-service creative studio based in Long Island, NY.</p>
    <p>We aim to elevate small businesses by leveraging the power of the web.</p>
    <a href="#learn-more" class="button">LEARN MORE</a>
</div>
<div class="row section section-two">
    <div class="small-12 medium-6 small-centered columns feature-description">
        <h1 id="learn-more">WHY ADELIE?</h1>
    </div>
</div>
<div class="row section section-two features-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        @include('features/one')
        @include('features/two')
        @include('features/three')
        @include('features/four')
    </div>
</div>
<div class="row section section-three">
    <div class="
        small-12
        medium-8
        small-centered
        columns
        service-description">
        
    </div>
</div>

<div class="row section section-two features-list">
    <div class="small-12 medium-10 large-8 small-centered columns">
        @include('features/one')
        @include('features/two')
        @include('features/three')
        @include('features/four')
    </div>
</div>
@endsection