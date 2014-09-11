@extends('admin.layouts.default')
@section('admin.content')
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					 Widget settings form goes here
				</div>
				<div class="modal-footer">
					<button type="button" class="btn blue">Save changes</button>
					<button type="button" class="btn default" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	@if(Session::has('message'))
		<h4 style="color: green">{{ Session::get('message') }}</h4>
	@endif
<div class="tab-pane" id="tab_6">
	<div class="portlet box blue ">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-reorder"></i>Create User
			</div>
			<div class="tools">
				<a href="javascript:;" class="collapse">
				</a>
				<a href="#portlet-config" data-toggle="modal" class="config">
				</a>
				<a href="javascript:;" class="reload">
				</a>
				<a href="javascript:;" class="remove">
				</a>
			</div>
		</div>
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			{{ Form::open(array('route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-row-stripped')) }}
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">Username <span style="color: red;">*</span></label>
						<div class="col-md-9">
							 {{ Form::text('username','', array('placeholder' => 'Username', 'class' => 'form-control')) }}
							 <span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('username', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Password <span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
							<span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('password', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Confirm Password <span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::password('confirm_password', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) }}
							<span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('confirm_password', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Role</label>
						<div class="col-md-9">
							<select class="form-control" name="role_id">
								@foreach($roles as $role)
									<option value="{{ $role->id }}">{{ $role->role_name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">First Name</label>
						<div class="col-md-9">
							{{ Form::text('first_name','', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Last Name</label>
						<div class="col-md-9">
							{{ Form::text('last_name','', array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Gender</label>
						<div class="col-md-9">
							<select class="form-control" name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-actions fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-offset-3 col-md-9">
								{{ Form::submit('Add User', array('class' => 'btn green', 'name' => 'add_user')) }}
							</div>
						</div>
					</div>
				</div>
			{{ Form::close() }}
			<!-- END FORM-->
		</div>
	</div>
</div>
@stop