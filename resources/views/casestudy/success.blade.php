@extends('app')
@section('content')
<div class="case-form-container">
  <div class="case-form">
    <h2>Successfully added.</h2>
      <img src="images/{{ $image }}" alt="">
<br>
     <a href="/cases">Click to return</a>
  </div>
</div>
@endsection
