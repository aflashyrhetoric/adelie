@extends('app')
@section('content')

{!! Form::open(['url' => 'cases']) !!}
  @include('partials._case-study-form')
{!! Form::close() !!}

@include('errors._list')

@stop
