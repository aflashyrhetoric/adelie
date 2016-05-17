@extends('app')
@section('content')
<div class="row cases-index-container about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered medium-10 columns large-uncollapse">
    <!-- Cases Header -->
    <div class="small-12 columns tac">
      <h1 class="page-title animated fadeInDown">
        Case Studies
      </h1>
      <p>An inside look at how we approach and solve real business problems.</p>
      <p class="case-description">We'll be adding more case studies regularly.</p>
      <p>For a visual overview of our graphic design work, visit our<a class="about-highlight" href="http://behance.net/yuna_oh">Behance Portfolio.</a></p>
    </div>
  </div>
</div>
@if ($cases->isEmpty())
  <div class="row empty-case-container">
    <div class="small-12 small-centered medium-6 tac">
      <h2>We're currently working on adding more case studies. Come back soon!</h2>
    </div>
  </div>
@else
  <div class="case-study-container">
    @foreach ($cases->chunk(3) as $case_row)
    <div class="column row large-uncollapse">
      @foreach ($case_row as $case)
      <div class="small-12 medium-4 case-study-item columns tac"> 
        <a class="thumbnail" href="/cases/{{ $case->id }}"><img alt="{{ $case->client_name }} Case Study" src="/images/{{ $case->thumbnail_url }}"></a>
        <p>{{ $case -> client_name }} </p>
      </div>
      @endforeach
    </div>
      @endforeach 
  </div>
@endif
</div>
@endsection
