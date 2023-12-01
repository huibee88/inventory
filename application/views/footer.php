<hr>

<!-- Footer Top -->
<section class="footer-top-section" style="color: #3d3934;">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="footer-widget">
					<h4>Connect with Us</h4>
					<div class="row">
						<ul>
							<li>Tel :03-7710 8118 Ext: 9937 (Kuala Lumpur), </li>
							<li>03-7710 4793 Ext: 3004 (Shah Alam)</li>
							<li>Fax :03-7710 8890</li>                         
							<li>Email: koheventory [at] kohe.my</li>
						</ul>	
					</div>								
				</div>				
			</div>

			<div class="col-lg-4">
				<div class="footer-widget">
					<h4>KOHEventory Management</h4>
					<div class="row">
						<ul>
							<li>1, Lebuh Bandar Utama,</li>	
							<li>Bandar Utama, </li>	
							<li>47800 Petaling Jaya, Selangor</li>	
						</ul>			
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="footer-widget">
					<div class="footer-logo" style="width: 100%">
						<img src="<?=base_url()?>public/img/loggoo.png">
					</div>									
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Footer -->
<footer>
	<div class="container">
		<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Petaling Jaya, Selangor KOHEventory Management</div>
		<div class="report">Report Accessibility Issues and Get Help</div>
	</div>
</footer>


<!-- Javascript & JQuery ---->
<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" style="size: 10px;"></script>

<script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>public/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>public/js/circle-progress.min.js"></script>
<script src="<?=base_url()?>public/js/main.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script>
    $(document).ready(setTimeout(function() {
      $('#myTable').DataTable({
        'responsive': true,
        'pageLength': 10
      });
    }), 5000);
</script>
<script>

	$(document).ready(setTimeout(function() {
      $('#myTable2').DataTable({
        'responsive': true,
        'pageLength': 10
      });
    }), 5000);
 </script>

</body>
</html>