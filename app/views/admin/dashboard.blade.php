@extends('admin.layouts.default')
@section('admin.content')
	<!-- BEGIN PAGE HEADER-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
			NexGenReady Dashboard <small>statistics and more</small>
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="{{ URL::route('admin.index') }}">
						Dashboard
					</a>
					<!--<i class="fa fa-angle-right"></i>-->
				</li>
				<li>
					<a href="#">
						
					</a>
				</li>

				<!-- DATE TIME MANAGEMENT -->
				<!--<li class="pull-right">
					<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
						<i class="fa fa-calendar"></i>
						<span>
						</span>
						<i class="fa fa-angle-down"></i>
					</div>
				</li>-->
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN DASHBOARD STATS -->
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="fa fa-book"></i>
				</div>
				<div class="details">
					<div class="number">
						 45
					</div>
					<div class="desc">
						Total Modules
					</div>
				</div>
				<!--<a class="more" href="#">
					 View more <i class="m-icon-swapright m-icon-white"></i>
				</a>-->
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="fa fa-user"></i>
				</div>
				<div class="details">
					<div class="number">
						 1200
					</div>
					<div class="desc">
						Total Students
					</div>
				</div>
				<!--<a class="more" href="#">
					 View more <i class="m-icon-swapright m-icon-white"></i>
				</a>-->
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat purple">
				<div class="visual">
					<i class="fa fa-user"></i>
				</div>
				<div class="details">
					<div class="number">
						 150
					</div>
					<div class="desc">
						Total Teachers
					</div>
				</div>
				<!--<a class="more" href="#">
					 View more <i class="m-icon-swapright m-icon-white"></i>
				</a>-->
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat yellow">
				<div class="visual">
					<i class="fa fa-users"></i>
				</div>
				<div class="details">
					<div class="number">
						 1350
					</div>
					<div class="desc">
						Overall Users
					</div>
				</div>
				<!--<a class="more" href="#">
					 View more <i class="m-icon-swapright m-icon-white"></i>
				</a>-->
			</div>
		</div>
	</div>
	<!-- END DASHBOARD STATS -->
	<div class="clearfix"></div>

	<!-- EXAMPLE PORTLET FOR FUTURE REFERENCES -->
	<!--<div class="row ">
		<div class="col-md-12 col-sm-12">
			BEGIN PORTLET
			<div class="portlet box blue calendar">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-calendar"></i>Calendar
					</div>
				</div>
				<div class="portlet-body light-grey">
					<div id="calendar">
					</div>
				</div>
			</div>
			END PORTLET
		</div>

	</div>-->
@stop