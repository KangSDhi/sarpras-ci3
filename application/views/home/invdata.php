<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>HOME</title>
	<link href="<?php echo base_url();  ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url();  ?>assets/css/home_style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="<?php echo base_url();  ?>assets3/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();  ?>assets3/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="applicat).ready(function($) {
				$(" .scroll").click(function(event){ event.preventDefault(); $('html,body').animate({scrollTop:$(this.hash).offset().top},1000); }); }); </script>
		<!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
	</script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!---//webfonts--->
	<!----start-top-nav-script---->
	<script>
		$(function() {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function() {
				var w = $(window).width();
				if (w > 320 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		});
	</script>
	<!----//End-top-nav-script---->
</head>

<body>
	<!----container---->
	<div class="container">
		<!----top-header---->
		<div class="top-header">
			<div class="logo">
				<a href="<?php echo base_url();  ?>index.php/welcome">
					<H2><B> INVENTARISASI BARANG SMK SABILUL MUTTAQIN MARGOAGUNG</B></H2>
				</a>
			</div>
			<div class="top-header-info">
				<div class="top-contact-info">
					<ul class="unstyled-list list-inline">

						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="cart-details">

					<div class="login-rigister">
						<ul class="unstyled-list list-inline">
							<li><a class="rigister" href="<?php echo base_url();  ?>login_admin">LOGIN <span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!----//top-header---->
		<!---top-header-nav---->
		<div class="top-header-nav">
			<!----start-top-nav---->
			<nav class="top-nav main-menu">
				<ul class="top-nav">
					<li><a href="<?php echo base_url('home');  ?>">HOME </a><span> </span></li>
					<li><a href="<?php echo base_url('invkelas');  ?>">INVENTARISASI KELAS</a><span> </span></li>
					<li><a href="<?php echo base_url('invupj'); ?>">INVENTARISASI UPJ</a><span> </span></li>
					<li><a href="<?php echo base_url('invkantor'); ?>">INVENTARISASI KANTOR</a><span> </span></li>
					<li><a href="<?php echo base_url('tentangkami');  ?>">TENTANG KAMI</a><span> </span></li>
					<div class="clearfix"> </div>
				</ul>
				<a href="<?php echo base_url();  ?>assets3/#" id="pull"><img src="<?php echo base_url();  ?>assets3/images/nav-icon.png" title="menu" /></a>
			</nav>
			<!----End-top-nav---->
			<!---top-header-search-box--->
			<div class="top-header-search-box">

			</div>
			<!---top-header-search-box--->
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//top-header-nav---->
	<!----start-slider-script---->
	<script src="<?php echo base_url();  ?>assets/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!----//End-slider-script---->
	<!-- Slideshow 4 -->
	<div id="top" class="callbacks_container">
		<ul class="rslides" id="slider4">
			<li>
				<img src="<?php echo base_url();  ?>assets/img/smk 1.jpg" alt="">
				<div class="caption">
					<div class="slide-text-info">
						<h3> </h3>
						<label> </label>

					</div>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url();  ?>assets/img/smk tkj.jpg" alt="">
				<div class="caption">
					<div class="slide-text-info">
						<h3> </h3>
						<label> </label>

					</div>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url();  ?>assets/img/smk tkr.jpg" alt="">
				<div class="caption">
					<div class="slide-text-info">
						<h3> </h3>
						<label> </label>

					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
	<!----- //End-slider---->
	<!----content---->
	<div class="content">
		<!---top-row--->
		<div class="container">

			<!----speical-products---->
			<div class="special-products">
				<div class="s-products-head">
					<div class="s-products-head-left">
						<h3>DAFTAR INVENTARIS BARANG RUANG <?php echo $ruang->nama_ruang; ?></h3>
					</div>

					<div class="clearfix"> </div>
				</div>
				<!----special-products-grids---->

				<div class="row-fluid">

					<div class="widget-body">
						<div>
							<div class="clearfix">
								<div class="btn-group">

								</div>
								<div class="btn-group pull-right">


								</div>
								<div class="space15"></div>
								<table class="table table-striped table-hover table-bordered" id="editable-sample">
									<thead>
										<tr>
										<tr>
											<th>
												<center>No</center>
											</th>
											<th>
												<center>RUANGAN</center>
											</th>
											<th>
												<center>NAMA BARANG</center>
											</th>
											<th>
												<center>KODE INVENTARIS</center>
											</th>
											<th>
												<center>BAHAN</center>
											</th>
											<th>
												<center>TAHUN PEMBELIAN</center>
											</th>
											<th>
												<center>JUMLAH</center>
											</th>
											<th>
												<center>SISA</center>
											</th>
											<th>
												<center>STATUS</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($data as $item) {

											$sisa = $item->jumlah - $item->rusak;

											echo "<tr>
                                                <td><center>$no</center></td>
                                                <td><center>$item->nama_ruang</center></td>
                                                <td><center>$item->nama_barang</center></td>
                                                <td><center>$item->kode_inventaris</center></td>
                                                <td><center>$item->bahan</center></td>
                                                <td><center>$item->tahun_pembelian</center></td>
                                                <td><center>$item->jumlah</center></td>
												<td><center>$sisa</center></td>
                                                <td><center>$item->status</center></td>
                                                
                                                
                                                </tr>";

											$no++;
										}
										?>

									</tbody>
								</table>
								<div class="form-actions">
									<?php echo anchor('inv/excel/'.$id, 'CETAK', array('class' => 'btn btn-danger btn-sm')) ?>


								</div>
								</form>

							</div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE widget-->
				</div>
			</div>


			<div class="clearfix"> </div>
		</div>
		<!---//special-products-grids---->
	</div>
	<!---//speical-products---->
	</div>
	<!----content---->
	<!----footer--->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-logo">

			</div>
			<div class="col-md-7 footer-links">
				<ul class="unstyled-list list-inline">
					<li><a href="<?php echo base_url();  ?>index.php/tentangkami">
							<h4><b>SMK SABILUL MUTTAQIN MARGOAGUNG</b></h4>
						</a> </li>
					<li><b>Alamat : Jl. Pudak Wangi No. 293 Ds. Margoagung Kec. Sumberejo Kab. Bojonegoro Prov. Jawa Timur </b></li>
					<li><b>Telp.(0353) 332638</b></li>

					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="col-md-2 footer-social">
				<ul class="unstyled-list list-inline">
					<li><a class="pin" href="<?php echo base_url();  ?>assets3/#"><span> </span></a></li>
					<li><a class="twitter" href="<?php echo base_url();  ?>assets3/#"><span> </span></a></li>
					<li><a class="facebook" href="<?php echo base_url();  ?>assets3/#"><span> </span></a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
	<!---//footer--->
	<!---copy-right--->
	<div class="copy-right">
		<div class="container">
			<p>Design by Moh Khoirul Huda</p>
			<script type="text/javascript">
				$(document).ready(function() {
					/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/

					$().UItoTop({
						easingType: 'easeOutQuart'
					});

				});
			</script>
			<a href="<?php echo base_url();  ?>assets/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
	<!--//copy-right--->
	</div>
	<!----container---->
</body>

</html>
