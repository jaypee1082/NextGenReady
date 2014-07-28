<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="{{ URL::route('admin.index') }}">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-user"></i>
						<span class="title">
							Users
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
								<i class="fa fa-list"></i>
								View list
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-plus"></i>
								Add new user
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-book"></i>
						<span class="title">
							Modules
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
								<i class="fa fa-list"></i>
								View list
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-plus"></i>
								Add new module
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-question-circle"></i>
						<span class="title">
							Questions
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
								<i class="fa fa-list"></i>
								View list
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-plus"></i>
								Add new question
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-list-alt"></i>
						<span class="title">
							Exercises
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
								<i class="fa fa-list"></i>
								View list
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-plus"></i>
								Add new question
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->