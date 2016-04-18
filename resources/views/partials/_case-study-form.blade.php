<div>
{!! Form::label('client_name', 'Client Name:') !!}
{!! Form::text('client_name') !!}

{!! Form::label('tagline', 'Tagline') !!}
{!! Form::text('tagline') !!}

{!! Form::label('thumbnail', 'Upload Thumbnail - 350x350') !!}
{!! Form::file('thumbnail') !!}

{!! Form::label('hero', 'Upload Hero - 450 x 150') !!}
{!! Form::file('hero') !!}

{!! Form::label('about', 'Description:') !!}
{!! Form::textarea('about') !!}

{!! Form::label('phase_one', 'Phase One:') !!}
{!! Form::textarea('phase_one') !!}

{!! Form::label('phase_two', 'Phase Two (Optional)') !!}
{!! Form::textarea('phase_two') !!}

{!! Form::label('phase_one', 'Phase Three (Optional)') !!}
{!! Form::textarea('phase_three') !!}

<br>
{!! Form::submit("Submit Case Study", ['class'=>'button']) !!}
</div>
