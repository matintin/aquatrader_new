@extends('templates.main')


@section('content')			
	<h2>Register</h2>

	{!! Form::open(array('url' => 'users')) !!}
	<fielset>
		{!! Form::label('username', 'Username') !!}
		{!! Form::text('username') !!}
		{!! $errors->first('username','<p class="error">:message</p>') !!}

		{!! Form::label('firstname', 'Firstname') !!}
		{!! Form::text('firstname') !!}
		{!! $errors->first('firstname','<p class="error">:message</p>') !!}

		{!! Form::label('lastname', 'Lastname') !!}
		{!! Form::text('lastname') !!}
		{!! $errors->first('lastname','<p class="error">:message</p>') !!}

		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email') !!}
		{!! $errors->first('email','<p class="error">:message</p>') !!}

		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password') !!}

		{!! Form::label('password_confirmation', 'Confirm password') !!}
		{!! Form::password('password_confirmation') !!}


		<input type="submit" value="Register">
	</fielset>
	{!! Form::close() !!}
@endsection		
