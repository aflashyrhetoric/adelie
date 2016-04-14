<div>
{!! Form::label('client-name', 'Client Name:') !!}
{!! Form::text('client-name') !!}

{!! Form::label('tagline', 'Tagline') !!}
{!! Form::text('tagline') !!}

{!! Form::label('thumbnail_url', 'Upload hero') !!}
{!! Form::file('thumbnail_url') !!}

{!! Form::label('about', 'Description:') !!}
{!! Form::textarea('about') !!}

{!! Form::label('phase-one', 'Phase One:') !!}
{!! Form::textarea('phase-one') !!}

{!! Form::label('phase-two', 'Phase Two (Optional)') !!}
{!! Form::textarea('phase-two') !!}

{!! Form::label('phase-one', 'Phase Three (Optional)') !!}
{!! Form::textarea('phase-three') !!}

<br>
{!! Form::submit("Submit Case Study", ['class'=>'button']) !!}
</div>
