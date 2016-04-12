<div>
{!! Form::label('client-name', 'Client Name:') !!}
{!! Form::text('client-name') !!}

{!! Form::label('about', 'Description:') !!}
{!! Form::textarea('about') !!}

{!! Form::label('phase-one', 'Phase One:') !!}
{!! Form::textarea('phase-one') !!}

{!! Form::label('phase-two', 'Phase Two (Optional)') !!}
{!! Form::textarea('phase-two') !!}

{!! Form::label('phase-one', 'Phase Three (Optional)') !!}
{!! Form::textarea('phase-three') !!}

<br>
{!! Form::submit("Submit Case Study") !!}
</div>
