<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->
{{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
{{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/plugins/jquery.blockui.min.js') }}
{{ HTML::script('assets/plugins/jquery.cokie.min.js') }}
{{ HTML::script('assets/plugins/uniform/jquery.uniform.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}
{{ HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js') }}
{{ HTML::script('assets/plugins/select2/select2.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/scripts/core/app.js') }}
{{ HTML::script('assets/scripts/custom/login-soft.js') }}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
      });
   </script>
<!-- END JAVASCRIPTS -->