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

      @if(Session::has('message'))
        <p>{{ Session::get('message') }}</p>
       @endif 
    </div>
    <!-- Form -->
    {!! Form::open(array('url' => '/contact')) !!}
    {!! Form::label('contactname', 'Name') !!}
    {!! Form::text('contactname') !!}
    {!! Form::label('contactemail', 'Email Address') !!}
    {!! Form::text('contactemail') !!}
    {!! Form::label('contactmessage', 'Message') !!}
    {!! Form::textarea('contactmessage') !!}
    {!! Form::submit('Send Message', array('class' => 'button')) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection