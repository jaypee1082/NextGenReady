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
				<i class="fa fa-reorder"></i>Editing Question
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
			{{ Form::open(array('route' => array('admin.questions.update', $question->id), 'method' => 'PATCH', 'class' => 'form-horizontal form-bordered form-row-stripped')) }}
				<div class="form-body">
					<span class="help-block">
						@if($errors->has())
		               		{{ $errors->first('choice_1', '<li style="color: red;">:message</li>') }}
		               	@endif	
					</span>
					<span class="help-block">
						@if($errors->has())
		               		{{ $errors->first('choice_2', '<li style="color: red;">:message</li>') }}
		               	@endif	
					</span>
					<span class="help-block">
						@if($errors->has())
		               		{{ $errors->first('choice_3', '<li style="color: red;">:message</li>') }}
		               	@endif	
					</span>
					<span class="help-block">
						@if($errors->has())
		               		{{ $errors->first('choice_4', '<li style="color: red;">:message</li>') }}
		               	@endif	
					</span>
					<div class="form-group">
						<label class="control-label col-md-3">Question<span style="color: red;">*</span></label>
						<div class="col-md-9">
							 {{ Form::text('question', $question->question, array('placeholder' => 'Question', 'class' => 'form-control')) }}
							 <span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('question', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
					<?php  $ctr = 0 ?>
					@foreach($choices as $choice)
						<?php $ctr++ ?>
						<div class="form-group">
							<label class="control-label col-md-3">Choice {{ $ctr }}<span style="color: red;">*</span></label>
							<div class="col-md-9">
								<input type="text" name="choices[]" value="{{ $choice->choice }}" class="form-control">
								<!--<span class="help-block">
									@if($errors->has())
		                           		{{ $errors->first('choice_<?php echo $ctr ?>', '<li style="color: red;">:message</li>') }}
		                           	@endif	
								</span>-->
								<input type="hidden" name="choice_ids[]" value="{{ $choice->id }}" class="form-control">
							</div>
						</div>
					@endforeach
					<div class="form-group">
						<label class="control-label col-md-3">Answer<span style="color: red;">*</span></label>
						<div class="col-md-9">
							{{ Form::text('answer', $question->answer, array('placeholder' => 'Please choose an answer from (A,B,C or D)', 'class' => 'form-control')) }}
							<span class="help-block">
							@if($errors->has())
                           		{{ $errors->first('answer', '<li style="color: red;">:message</li>') }}
                           	@endif
						</span>
						</div>
					</div>
				</div>
				<div class="form-actions fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-offset-3 col-md-9">
								{{ Form::submit('Update', array('class' => 'btn green', 'name' => 'update_module')) }}
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