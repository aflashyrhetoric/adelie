@extends('app')
@section('content')
<div class="section-one">
    <h1>adelie</h1>
    <p>We are a small, full-service creative studio based in Long Island, NY.</p>
    <p>We aim to elevate small businesses by leveraging the power of the web.</p>
</div>
<div class="features section section-two">
    <h1>Boop</h1>
    <div class="row">
        @include('services/one')
        @include('services/two')
    </div>
    <div class="row">
        @include('services/three')
        @include('services/four')
    </div>
</div>
@endsection