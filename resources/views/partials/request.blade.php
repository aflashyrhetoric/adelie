@extends('app')
@section('content')
<div class="row contact-container">
  <div class="small-12 small-centered medium-9 columns">
    <div class="contact-header">
      <h1 class="animated fadeIn">Request A Quote</h1>
      <p><em>Tell us more about your project and we'll give you a ballpark estimate! Project minimums vary.</em></p>
      <p>We try to reply to all messages within 24 hours.</p>
      <hr>
    </div>
    <div class="errors and flash">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>

      @if(Session::has('flash_message'))
        <p>{{ Session::get('flash_message') }}</p>
       @endif 
    </div>
    <!-- Form -->
    {!! Form::open(array('url' => '/contact')) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email') !!}
    {!! Form::label('message', 'Message') !!}
    {!! Form::textarea('message') !!}
    {!! Form::submit('Send Message', array('class' => 'button')) !!}
    {!! Form::close() !!}
    <hr/>
    <p> Estimates given are just that - estimates! We'll do our best to give a ballpark range, but please keep in mind that final costs may vary. As we learn more about your project, we'll be able to give you more accurate quotes. Thanks! </p>
  </div>
</div>
@endsection