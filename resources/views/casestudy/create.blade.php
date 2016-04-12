@extends('app')
@section('content')
<div class="case-form-container">
<div class="case-form">
  <h2>Create Form</h2>
  {!! Form::open(['url' => 'cases']) !!}
    @include ('partials._case-study-form')
  {!! Form::close() !!}
</div>
</div>
@endsection
