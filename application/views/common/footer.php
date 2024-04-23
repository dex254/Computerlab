<footer class="page-footer">
			<p class="mb-0">Desigened and developed  by  Dennis<?php echo date("Y ");?>.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Dennis Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Dex Texture</p>
			  <hr>

			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">lab Background</p>
			  <hr>

			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js");?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url("assets/js/jquery.min.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/simplebar/js/simplebar.min.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/metismenu/js/metisMenu.min.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/highcharts/js/highcharts.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/highcharts/js/exporting.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/highcharts/js/variable-pie.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/highcharts/js/export-data.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/highcharts/js/accessibility.js");?>"></script>
	<script src="<?php echo base_url("assets/plugins/apexcharts-bundle/js/apexcharts.min.js");?>"></script>
    <script>
		new PerfectScrollbar('.dashboard-top-countries');
	</script>

	<script src="<?php echo base_url("assets/js/dashboard-alternate.js");?>"></script>
	<!--app JS-->
	<script src="<?php echo base_url("assets/js/app.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/css/datatables.min.js');?>" defer></script>
    <script>
        $(document).ready( function () {
        $('.table').DataTable();
        } );
    </script>

</body>



</html>
