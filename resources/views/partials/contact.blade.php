@extends('app')
@section('content')
<div class="row contact-container">
  <div class="small-12 small-centered medium-9 columns">
    <div class="contact-header">
      <h1>Contact Us</h1>
      <p><em>We try to reply to all messages within 24 hours.</em></p>
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
  </div>
</div>
@endsection