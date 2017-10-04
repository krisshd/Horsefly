
@extends('layouts.app')

@section('content')

<style type="text/css">

body{background: #f5f5f5;}
h5{font-weight: 400;}
.container{margin-top: 10px;width: 400px;}
.tabs .indicator{background-color: #e0f2f1;	height: 60px;opacity: 0.3;}
.form-container{padding: 40px;padding-top: 10px;}
.confirmation-tabs-btn{position: absolute;}

</style>

<div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text active" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
		 <!-- {{--@include('common.errors')--}} -->
		<form class="col s12" method="POST" action="/login">
			<div class="form-group">
				@include('common.errors')
			</div>
			 {{ csrf_field() }}
			<div class="form-container">
				<h3 class="teal-text">Login Here</h3>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="email" type="email" name="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="password" type="password" name=password>
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Connect</button>
					<br>
					<br>
					<a href="">Forgotten password?</a>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		 <!-- {{--@include('common.errors')--}} -->
		<form class="col s12" method="POST" action="/session">

			<div class="form-container">
				<h3 class="teal-text">Welcome</h3>
				 {{ csrf_field() }}
				 <div class="form-group">
				 	@include('common.errors')
				 </div>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="name" type="text" name="name">
						<label for="name">Name</label>
					</div>
				</div>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="email" type="email" name="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="password" type="password" name="password">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="form-group">
					<div class="input-field col s12">
						<input id="password_confirmation" type="password" name="password_confirmation"">
						<label for="password_confirmation">Password Confirmation</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Register</button>
				</center>
			</div>
		</form>
	</div>
</div>

  @endsection