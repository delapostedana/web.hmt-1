<!--================ start footer Area  =================-->
<footer class="footer-area">
<?php 
	$footer = [
		'kantor' => [
			'id'	=> 'Kantor Pusat',
			'en'	=> 'Office'
		],
		'cabang' => [
			'id'	=> 'Kantor Cabang',
			'en'	=> "Branch Office"
		]
	];
?>
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget text-center">
						<img style="width:200px" src="img/logo-hd.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6><?= $footer["kantor"][$lang]; ?></h6>
						<p>
						Ruko Kelapa Gading Square <br> Mall of Indonesia Blok B No. 50A <br> Jl. Boulevard Barat Raya, Kelapa Gading, Jakarta Utara 14240 <br> Telp. 021-2245-9897, 021-2245-9342 <br> WA Hotline: 0813-8899-0505
						</p>
					</div>
				</div>

				<div class="col-lg-6  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6><?= $footer["cabang"][$lang]; ?></h6>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>MEDAN</li>
								<li>NIAS</li>
								<li>BATAM</li>
								<li>PALEMBANG</li>
								<li>LUBUK LINGGAU</li>
								<li>TANGERANG</li>
								<li>BSD, TANGERANG SELATAN</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>BEKASI</li>
								<li>BOGOR</li>
								<li>KARAWANG</li>
								<li>PURWAKARTA</li>
								<li>BANDUNG</li>
								<li>TASIKMALAYA</li>
								<li>MALANG</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>PONTIANAK</li>
								<li>PALANGKARAYA</li>
								<li>MANADO</li>
								<li>TORAJA</li>
								<li>KUPANG</li>
								<li>MANOKWARI</li>
								<li>TIMIKA</li>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
			<div class="container">
				<div class="row justify-content-between">
					<div>
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | <strong>PT Hidup Makmur Terencana</strong>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
					<div class="footer-social d-flex align-items-center">
						<a href="https://www.facebook.com/hmt.tourtravel2021/" target="_BLANK"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/hmttour.official/" target="_BLANK"><i class="fa fa-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UCEOPUH23cclY5vRmfBCgfWA" target="_BLANK"><i class="fa fa-youtube"></i></a>
						<a href="mailto:info@hmttour.com"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
	<script src="vendors/swiper/js/swiper.min.js"></script>
	<script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
	<script src="js/theme.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	<!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
	<script>
		$(window).scroll(function () {
			var y = $(window).scrollTop()
			if (y > 10) {
				$('nav').css('background-color', '#f8f9fa!important;');
			} else {
				$('nav').css('background-color', 'white');
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			var nextUri = "<?php echo $url ?>";
			var currentLang = "<?php echo $lang ?>";
			$('#lang').on('change', function(e) {
				e.preventDefault();
				var lang = $(this).val();
				var actualUrl = nextUri.replaceAll(langParamBuilder(currentLang), langParamBuilder(lang));
				window.location.href = actualUrl;
			})

			function langParamBuilder(value) {
				return "lang=" + value;
			}
		})
	</script>

	<script>
		$(document).ready(function(){
			$('#nav-profile-tab').on("click",function(){
				$('#konvert').show();
			});
			$('#nav-home-tab').on("click", function(){
				$('#konvert').hide();
			})
		});
	</script>
</body>

</html>