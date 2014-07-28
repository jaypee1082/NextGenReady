@extends('layouts.default')
@section('content')
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	{{ Form::open(array('route' => 'users.login.attempt', 'method' => 'POST', 'class' => 'login-form')) }}
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter any username and password.
			</span>
		</div>
		 @if(Session::has('message_error'))
		 	<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
				<span style="color: red">{{ Session::get('message_error') }}</span>
			</div>
		 @endif
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<!--<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>-->
				{{ Form::text('username', '', array('placeholder' => 'Username', 'class' => 'form-control placeholder-no-fix', 'autocomplete' => 'off')) }}
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<!--<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>-->
				{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control placeholder-no-fix', 'autocomplete' => 'off')) }}
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<!--<button type="submit" class="btn blue pull-right">Login <i class="m-icon-swapright m-icon-white"></i></button>-->
			{{ Form::button('Login <i class="m-icon-swapright m-icon-white"></i>', array('type' => 'submit', 'class' => 'btn blue pull-right')) }}
		</div>
	{{ Form::close() }}
	<!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
@stop