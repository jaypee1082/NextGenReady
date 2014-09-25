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
	<!-- BEGIN PAGE HEADER-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
			Managed Modules <small>managed module informations</small>
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li class="btn-group">
					<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
					<span>
						Actions
					</span>
					<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<!--<li>
							<a href="#">
								Suspend
							</a>
						</li>
						<li>
							<a href="#">
								Approve
							</a>
						</li>-->
						<li>
							<a href="#">
								Delete
							</a>
						</li>
						<!--<li class="divider">
						</li>
						<li>
							<a href="#">
								Separated link
							</a>
						</li>-->
					</ul>
				</li>
				<li>
					<i class="fa fa-home"></i>
					<a href="{{ URL::route('admin.index') }}">
						Dashboard
					</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">
						List of Modules
					</a>
					<!--<i class="fa fa-angle-right"></i>-->
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>Managed Modules Table
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
				<div class="portlet-body">
					<form action="{{ URL::route('admin.modules.multiple.destroy') }}" method="post" id="module_table_form">
						<div class="table-toolbar">
							<div class="btn-group">
								<a href="{{ URL::route('admin.modules.create') }}" id="sample_editable_1_new" class="btn green">
								Add New <i class="fa fa-plus"></i>
								</a>
							</div>
							<div class="btn-group pull-right">
								<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
									<span>
										Actions
									</span>
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>
										<a href="#">
											Activate
										</a>
									</li>
									<li>
										<a href="#">
											Deactivate
										</a>
									</li>
									<li>
										<a href="#" id="delete_modules">
											Delete
										</a>
									</li>
									<!--<li class="divider">
									</li>
									<li>
										<a href="#">
											Separated link
										</a>
									</li>-->
								</ul>
							</div>
							<!--<div class="btn-group pull-right">
								<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="#">
											 Print
										</a>
									</li>
									<li>
										<a href="#">
											 Save as PDF
										</a>
									</li>
								</ul>
							</div>-->
						</div>
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									<th class="table-checkbox">
										<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
									</th>
									<th>
										 Module Name
									</th>
									<th>
										 Module Slug
									</th>
									<th>
										 Description
									</th>
									<th>
										 Date Created
									</th>
									<th>
										 Activities
									</th>
									<th>
										 Questions
									</th>
									<th>
										 Action
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($modules as $module)
									<tr>
										<td>
											<input type="checkbox" class="checkboxes" value="{{ $module->id }}" name="module_checkboxes[]"/>
										</td>
										<td>
											{{ $module->module_name }}
										</td>
										<td>
											{{ $module->module_slug }}
										</td>
										<td class="center" style="white-space: normal !important;">
											{{ $module->description }}
										</td>
										<td>
											{{ date('M d, Y', strtotime($module->created_at)) }}
										</td>
										<td>
											<a class="add-exercises" href="{{ URL::route('admin.activities.create', $module->module_slug) }}">
												 Add
											</a>
											|
											<a class="view-exercises" href="{{ URL::route('admin.activities', $module->module_slug) }}">
												 View
											</a>
											<br/>
											<span>Add activities <br/>for this module <br/>or View the activities <br/>that are already<br/> created</span>										
										</td>
										<td>
											<a class="add-questions" href="{{ URL::route('admin.questions.create', $module->module_slug) }}">
												 Add
											</a>
											|
											<a class="view-questions" href="{{ URL::route('admin.questions', $module->module_slug) }}">
												 View
											</a>
											<br/>
											<span>Add questions <br/>for this module <br/>or View the questions <br/>that are already<br/> created</span>
										</td>
										<td>
											<a class="view" href="{{ URL::route('admin.modules.show', $module->module_slug) }}">
												 View
											</a>
											|
											<a class="edit" href="{{ URL::route('admin.modules.edit', $module->module_slug) }}">
												 Edit
											</a>
										
											|
											<a class="delete" href="{{ URL::route('admin.modules.destroy', $module->module_slug) }}">
												 Delete
											</a>
											
										</td>
									</tr>
								@endforeach
							</tbody>
							<script>
								jQuery(document).ready(function() {
									jQuery('#delete_modules').click(function(e){
										e.preventDefault();
										jQuery('#module_table_form').submit();
									});
								});
							</script>
						</table>
					</form>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
@stop