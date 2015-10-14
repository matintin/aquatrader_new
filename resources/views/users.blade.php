@extends('templates.main')


@section('content')			

			<h2>My profile</h2>

			<h5>Username:</h5>
			<h4 data-field="username">{!! $user->username !!}</h4>

			<h5>Firstname:</h5>
			<h4 data-field="firstname">{!! $user->firstname !!}</h4>

			<h5>Lastname:</h5>
			<h4 data-field="lastname">{!! $user->lastname !!}</h4>

			<h5>Email:</h5>
			<h4 data-field="email">{!! $user->email !!}</h4>


			
@endsection		
