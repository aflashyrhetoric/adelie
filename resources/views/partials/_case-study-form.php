  <!-- This form gets processed as a POST request -->
  <!-- which is accessible by accessing $REQUEST variable-->
{!! Form::model($prayer, ['method'=> 'PATCH', 'action' => ['CaseStudiesController@update', $prayer->id]]) !!}
  {!! Form::hidden('author', $author->id) !!}

  {!! Form::label('client-name', 'Client Name:') !!}
  {!! Form::text('client-name') !!}
  {!! Form::label('about', 'Description:') !!}
  {!! Form::textarea('about') !!}
  {!! Form::label('phase-one', 'Phase One:') !!}
  {!! Form::textarea('phase-one') !!}
  {!! Form::label('phase-two', 'Phase Two (Optional)') !!}
  {!! Form::textarea('phase-two') !!}
  {!! Form::label('phase-one', 'Phase Three (Optional)') !!}
  {!! Form::textarea('phase-') !!}

  <br>
  {!! Form::submit("Submit Case Study") !!}
{!! Form::close() !!}
