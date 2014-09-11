<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
{{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{ HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/plugins/jquery.blockui.min.js') }}
{{ HTML::script('assets/plugins/jquery.cokie.min.js') }}
{{ HTML::script('assets/plugins/uniform/jquery.uniform.min.js') }}
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('assets/plugins/jqvmap/jqvmap/jquery.vmap.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.min.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.resize.min.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.categories.min.js') }}
{{ HTML::script('assets/plugins/jquery.pulsate.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('assets/plugins/gritter/js/jquery.gritter.js') }}

<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
{{ HTML::script('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}
{{ HTML::script('assets/plugins/jquery.sparkline.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/scripts/core/app.js') }}
{{ HTML::script('assets/scripts/custom/index.js') }}
{{ HTML::script('assets/scripts/custom/tasks.js') }}

<!-- TABLE LAYOUTS FOR ADMIN -->
{{ HTML::script('assets/plugins/select2/select2.min.js') }}
{{ HTML::script('assets/plugins/data-tables/jquery.dataTables.js') }}
{{ HTML::script('assets/plugins/data-tables/DT_bootstrap.js') }}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/scripts/core/app.js') }}
{{ HTML::script('assets/scripts/custom/table-managed.js') }}


<script>
jQuery(document).ready(function() {       
   App.init();
   TableManaged.init();
});
</script>

<!--<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();
});
</script>-->

