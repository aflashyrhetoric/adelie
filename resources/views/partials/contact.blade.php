@extends('app')
@section('content')

<div class="row contact-container">
  <div class="small-12 small-centered medium-9 columns">
  <div class="contact-header">
    <h1>Contact Us</h1>
    <p><em>We try to reply to all emails within 24 hours.</em></p>
    <hr>
  </div>

  {!! Form::open() !!}
    {!! Form::label('Contact Us', 'Name') !!}
  {!! Form::close() !!}
  </div>
</div>
@endsection