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
				<i class="fa fa-reorder"></i>Create Activities for {{ $module->module_name }}
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
			{{ Form::open(array('route' => array('admin.activities.store', $module->module_slug), 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-row-stripped', 'enctype' => 'multipart/form-data')) }}
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">Exercise Slug <span style="color: red;">*</span></label>
						<div class="col-md-9">
							 {{ Form::text('exercise_slug','', array('placeholder' => 'Exercise Slug', 'class' => 'form-control')) }}
							 <span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('exercise_slug', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Title <span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::text('activity_title', '',array('placeholder' => 'Title', 'class' => 'form-control')) }}
							<span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('activity_title', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Type</label>
						<div class="col-md-9">
							<select class="form-control" name="activity_type" id="activity_type">
								<option value="0">From module review</option>
								<option value="1">Not from module review</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Shortcode <span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::text('shortcode', '',array('placeholder' => 'Shortcode', 'class' => 'form-control')) }}
							<span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('shortcode', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Screenshot <span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::file('screenshot', '', array('id' => 'file', 'class' => 'form-control', 'id' => 'exampleInputFile1', 'accept' => 'image/jpeg,image/png,image/gif',)) }}
						</div>
					</div>
				</div>
				<div class="form-actions fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-offset-3 col-md-9">
								{{ Form::submit('Add Activity', array('class' => 'btn green', 'name' => 'add_activity')) }}
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