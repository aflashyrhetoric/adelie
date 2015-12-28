@extends('app')
@section('content')
<div class="section-one">
    <h1>adelie</h1>
    <p>We are a small, full-service creative studio based in Long Island, NY.</p>
    <p>We aim to elevate small businesses by leveraging the power of the web.</p>
</div>
<div class="row section section-two">
    <div class="small-12 medium-8 small-centered columns service-description">
        <h3>Establishing a unique business identity is no small task.</h3>
        <h3>Here's how we can help you.</h3>
        <p></p>
    </div>
</div>
<div class="row columns section section-two services-list">
    @include('services/one')
    @include('services/two')
    @include('services/three')
    @include('services/four')
</div>
@endsection