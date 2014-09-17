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
				<i class="fa fa-reorder"></i>Create Module Questions
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
			{{ Form::open(array('route' => array('admin.questions.store', $module->module_slug), 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-row-stripped')) }}
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">Question Type</label>
						<div class="col-md-9">
							<select class="form-control" name="question_type" id="question_type">
								@foreach($question_types as $question_type)
									<option value="{{ $question_type->id }}">{{ $question_type->question_type }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Question <span style="color: red;">*</span></label>
						<div class="col-md-9">
							 {{ Form::text('question','', array('placeholder' => 'Question', 'class' => 'form-control')) }}
							 <span class="help-block">
								@if($errors->has())
	                           		{{ $errors->first('question', '<li style="color: red;">:message</li>') }}
	                           	@endif
							</span>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-md-3">Choice 1</label>
						<div class="col-md-9">
							{{ Form::text('choices[]', '', array('placeholder' => 'Choice 1 - A', 'class' => 'form-control')) }}
							<span class="help-block">
								@if($errors->has())
	                           		{{ $errors->first('choice_1', '<li style="color: red;">:message</li>') }}
	                           	@endif
							</span>
						</div>
					</div>
					<div class="question_type_2">
						<div class="form-group">
							<label class="control-label col-md-3">Image for Choice 1</label>
							<div class="col-md-9">
								{{ Form::text('choice_images[]', '', array('placeholder' => 'Image for Choice 1 - A', 'class' => 'form-control')) }}
								<span class="help-block">
									@if($errors->has())
		                           		{{ $errors->first('choice_image_1', '<li style="color: red;">:message</li>') }}
		                           	@endif
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Choice 2</label>
						<div class="col-md-9">
							{{ Form::text('choices[]', '', array('placeholder' => 'Choice 2 - B', 'class' => 'form-control')) }}
							<span class="help-block">
								@if($errors->has())
	                           		{{ $errors->first('choice_2', '<li style="color: red;">:message</li>') }}
	                           	@endif
							</span>
						</div>
					</div>
					<div class="question_type_2">
						<div class="form-group">
							<label class="control-label col-md-3">Image for Choice 2</label>
							<div class="col-md-9">
								{{ Form::text('choice_images[]', '', array('placeholder' => 'Image for Choice 2 - B', 'class' => 'form-control')) }}
								<span class="help-block">
									@if($errors->has())
		                           		{{ $errors->first('choice_image_2', '<li style="color: red;">:message</li>') }}
		                           	@endif
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Choice 3</label>
						<div class="col-md-9">
							{{ Form::text('choices[]', '', array('placeholder' => 'Choice 3 - C', 'class' => 'form-control')) }}
							<span class="help-block">
								@if($errors->has())
	                           		{{ $errors->first('choice_3', '<li style="color: red;">:message</li>') }}
	                           	@endif
							</span>
						</div>
					</div>
					<div class="question_type_2">
						<div class="form-group">
							<label class="control-label col-md-3">Image for Choice 3</label>
							<div class="col-md-9">
								{{ Form::text('choice_images[]', '', array('placeholder' => 'Image for Choice 3 - B', 'class' => 'form-control')) }}
								<span class="help-block">
									@if($errors->has())
		                           		{{ $errors->first('choice_image_3', '<li style="color: red;">:message</li>') }}
		                           	@endif
								</span>
							</div>
						</div>
					</div>
					<div id="choices_group">
						<div class="choices_form">
							<div class="form-group">
								<label class="control-label col-md-3">Choice 4</label>
								<div class="col-md-9">
									{{ Form::text('choices[]', '', array('placeholder' => 'Choice 4 - D', 'class' => 'form-control')) }}
									<span class="help-block">
									@if($errors->has())
		                           		{{ $errors->first('choice_4', '<li style="color: red;">:message</li>') }}
		                           	@endif
								</span>
								</div>
							</div>	
							<div class="question_type_2">
								<div class="form-group">
									<label class="control-label col-md-3">Image for Choice 4</label>
									<div class="col-md-9">
										{{ Form::text('choice_images[]', '', array('placeholder' => 'Image for Choice 4 - B', 'class' => 'form-control')) }}
										<span class="help-block">
											@if($errors->has())
				                           		{{ $errors->first('choice_image_4', '<li style="color: red;">:message</li>') }}
				                           	@endif
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Answer</label>
						<div class="col-md-9">
							{{ Form::text('answer', '', array('placeholder' => 'Answer', 'class' => 'form-control')) }}
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
								{{ Form::submit('Add Question', array('class' => 'btn green', 'name' => 'add_module')) }}
								<a href="#" id="addScnt" class="btn green">Add more choices</a>
								<a href="#" id="addScnt2" class="btn green">Add more choices</a>
								<a href="{{ URL::route('admin.questions', $module->module_slug) }}" class="btn green">View List</a>
							</div>
						</div>
					</div>
				</div>
			{{ Form::close() }}
			<!-- END FORM-->
		</div>
	</div>
	<script>
		$(function() {
	        var scntDiv = $('#choices_group');
	        var k = $('#choices_group div.form-group').size() + 3;
	        var i = $('#choices_group div.choices_form').size() + 4;
	        
	         $('#question_type').change(function() {
	         	var type = $(this).val();
	         	if(type == 2)
	         	{
	         		$('#addScnt').css('display', 'inline-block');
			    	$('#addScnt2').css('display', 'none');
			        $('#addScnt').live('click', function() {
			                $('<div class="choices_form"><div class="form-group"><label class="control-label col-md-3">Choice '+ i +'</label><div class="col-md-9"><input type="text" class="form-control" name="choices[]" value="" placeholder="Choice '+ i +'" /><span class="help-block"></span></div></div><div class="form-group"><label class="control-label col-md-3">Choice '+ i +'</label><div class="col-md-9"><input type="text" class="form-control" name="choice_images[]" value="" placeholder="Choice Images'+ i +'" /><span class="help-block"><a href="#" id="remScnt">Remove</a></span></div></div></div>').appendTo(scntDiv);
			                i++;
			                return false;
			        });
			        
			        $('#remScnt').live('click', function() { 
			                if( i > 4 ) {
			                        $(this).parents('div.choices_form').remove();
			                        i--;
			                }
			                return false;
			        });
			    }
			    if(type == 1)
			    {
			    	$('#addScnt2').css('display', 'inline-block');
			    	$('#addScnt').css('display', 'none');
			    	$('#addScnt2').live('click', function() {
			                $('<div class="form-group"><label class="control-label col-md-3">Choice '+ k +'</label><div class="col-md-9"><input type="text" class="form-control" name="choices[]" value="" placeholder="Choice '+ k +'" /><span class="help-block"><a href="#" id="remScnt2">Remove</a></span></div></div>').appendTo(scntDiv);
			                k++;
			                return false;
			        });
			        
			        $('#remScnt2').live('click', function() { 
			                if( k > 4 ) {
			                        $(this).parents('div.form-group').remove();
			                        k--;
			                }
			                return false;
			        });
			    } 
		    }); 

	        //hiding and showing question on change

	        $('#question_type').change(function() {
	        	var type = $(this).val();
	        	if(type == 1)
	        	{
	        		$('.question_type_2').hide();
	        	}
	        	else if(type == 2)
	        	{
	        		$('.question_type_2').each(function(){
	        			$(this).css('display','block');
	        		});
	        	}
	        	else if(type == 3)
	        	{
	        		$('.question_type_2').hide();
	        	}
	        	else if(type == 4)
	        	{
	        		$('.question_type_2').each(function(){
	        			$(this).css('display','block');
	        		});
	        	}
	        	else
	        	{
	        		$('.question_type_2').hide();
	        	}
			}).change(); 

		});
	</script>
</div>
@stop