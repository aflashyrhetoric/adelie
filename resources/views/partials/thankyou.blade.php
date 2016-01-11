@extends('app')
@section('content')
@if(Session::has('flash_message'))
<div class="callout success">
  <p>{{ Session::get('flash_message') }}</p>
</div>
@endif
<div class="thankyou">
  <div class="row thankyou">
    <div class="small-12 small-centered medium-8 columns tac">
      <h1>Thank you for your message.</h1>
      <p>We'll get back to you as soon as possible. (Usually within 24 hours.)</p>
      <a href="/" class="button">Return Home</a>
    </div>
  </div>
</div>
@endsection