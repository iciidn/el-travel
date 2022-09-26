
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>EL-Travel | Home </title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'tampilan_web/images/logobrow.png'?>">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->


	<!-- pop up box -->
	<link href="<?php echo base_url().'tampilan_web/css/popuo-box.css'?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop up box -->

	<link rel="stylesheet" href="<?php echo base_url().'tampilan_web/css/jquery.desoslide.css'?>">

	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url().'tampilan_web/css/bootstrap.css'?>"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'tampilan_web/css/style.css'?>" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'tampilan_web/css/font-awesome.css'?>"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<link rel="stylesheet" href="<?php echo base_url().'tampilan_web/css/jquery-ui.css'?>" />
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->

</head>
<?php
           function limit_words($string, $word_limit){
               $words = explode(" ",$string);
               return implode(" ",array_splice($words,0,$word_limit));
           };

       ?>
<body>

	<header class="main_menu">
			 <div class="sub_menu">
					 <div class="container">
							 <div class="row">

									 <div class="col-lg-12 col-sm-12 col-md-12">
											 <div class="sub_menu_social_icon">

													 <a href="https://facebook.com/el.travel.indonesia/" target="blank"><i class="fa fa-facebook"></i></a>
													 <a href="https://twitter.com/ElTravel_Indo" target="_blank">
														 <i class="fa fa-twitter"></i></a>
													 <a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank" ><i class="fa fa-whatsapp"></i></a>
													 <a href="https://www.instagram.com/eltravel.indo/" target="blank"><i class="fa fa-instagram"></i></a>
													 <a href="tel://+622159729429" target="blank"><i class="fa fa-phone"></i></a>
													 
											 </div>
									 </div>
							 </div>
					 </div>
			 </div>
			 <div class="main_menu_iner">
					 <div class="container-fluid">
							 <div class="row align-items-center ">
									 <div class="col-lg-12">
											 <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
													 <a class="navbar-brand" href="<?php echo base_url().'welcome'?>"> <img src="<?php echo base_url().'tampilan_web/images/logoel.png'?>" alt="logo"> </a>
													 <button class="navbar-toggler" type="button" data-toggle="collapse"
															 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
															 aria-expanded="false" aria-label="Toggle navigation">
															 <span class="navbar-toggler-icon"></span>
													 </button>

													 <div class="collapse navbar-collapse main-menu-item justify-content-center"
															 id="navbarSupportedContent">
															 <?php
 			                        $this->load->view('front/menu');
 			                        ?>
													 </div>

											 </nav>
									 </div>
							 </div>
					 </div>
			 </div>
	 </header>



<?php foreach ($wisata->result_array() as $i); { 	?>
<?php foreach ($wisatadua->result_array() as $o);{ ?>
<?php foreach ($wisatatiga->result_array() as $k); { 	?>


		<!-- banner-text -->
		<div class="slider">


			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner-top">
							<img src="<?php echo base_url().'tampilan_web/images/'.$i['gambar'];?>"  alt="" class="img-fluid">
						</div>
					</li>
					<li>
						<div class="banner-top1">
							<img src="<?php echo base_url().'tampilan_web/images/'.$o['gambar'];?>"  alt="" class="img-fluid">
						</div>
					</li>
					<li>
						<div class="banner-top2">
							<img src="<?php echo base_url().'tampilan_web/images/'.$k['gambar'];?>"  alt="" class="img-fluid">
						</div>
					</li>

				</ul>

			</div>
<div class="clearfix">

</div>



		<!-- Social Icons -->

		<!-- //Social Icons -->
		<!-- To bottom button-->
		<!-- //To bottom button-->
	<?php }; ?>
<?php }; ?>
<?php }; ?>
		</div>

		<!--//Slider-->


<!-- booking form -->

<section class="booking py-5" id="booking">
	<h3 class="text-center mb-4">Cari Paket Travel Anda</h3>
	<div class="container">
		<div class="book-form">
		     <form action="<?php echo base_url().'paket_tour/search_paket'?>" method="post" >
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6 px-2 form-time-w3layouts editContent">
						<label class="editContent"><span class="fa fa-user" aria-hidden="true"></span>Nama</label>
						<input type="text" placeholder="Nama Anda" required="">
				</div>
				<div class="col-md-3 col-sm-6 col-6 px-2 form-date-w3-agileits editContent">
						<label class="editContent"><span class="fa fa-map-marker" aria-hidden="true"></span> Paket Tujuan</label>
						<select name="keyword" class="form-control"  >
							<option>Israel</option>
							<option>Arab</option>
							<option>India</option>
							<option>Mesir</option>
							<option>Thailand</option>
						</select>
				</div>
				<div class="col-md-2 col-sm-4 col-6 px-2 form-left-agileits-w3layouts editContent">
						<label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span>Mulai Tanggal</label>
					<div class="agileits_w3layouts_main_gridl">
						<input class="date has Datepicker" id="datepicker"  type="text" value="Start Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select Date';}" required="">
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6 px-2 form-left-agileits-w3layouts editContent">
						<label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span>Selesai</label>
					<div class="agileits_w3layouts_main_gridl">
						<input class="date has Datepicker" id="datepicker1"  type="text" value="Return Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select Date';}" required="">
					</div>
				</div>
				<div class="col-md-2 px-2 col-sm-4 col-6 form-left-agileits-submit editContent">
					  <input type="submit" value="Cari">
				</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- //booking form -->

<!-- booking bottom -->
<section class="bottom py-5" >
	<div class="container">
		<div class="row bottom-grids">
			<div class="col-md-6 grid1">
				<h4 class="mb-4">Discount 10-35% Travel </h4>
				<h3 class="mb-4">Daftarkan Diri Anda Dan Dapatkan Promo Menarik Di El-Travel </h3>
				<a href="<?php echo base_url().'pendaftaran'?>">Daftar Sekarang</a>
			</div>
			<div  class="col-md-6 grid9" >

				<!-- video -->
			<iframe 
src="https://www.youtube.com/embe
d/Xos8PYd8WiI" frameborder="0"
allow="accelerometer; autoplay;
encrypted-media; gyroscope;
picture-in-picture"  width="600"
height="300" frameborder="0"
style="border:0;"
allowfullscreen=""
></iframe>
				</div>
				</div>
	</div>
</section>
<!-- //booking bottom -->

<section class="best-offers py-5">
	<div class="container py-3">
		<h3 class="heading text-center mb-sm-5 mb-3"> Promo Travel</h3>
			<div class="row offer-grids pt-5">
				<?php
																	foreach ($paket->result_array() as $h) {
																			$idpaketf=$h['idpaket'];
																			$namapaketf=$h['nama_paket'];
																			$gambarf=$h['gambar'];
																	?>
				<div class="col-lg-4 col-sm-6 mt-lg-4 mt-5 offer-grid price-main-info card box-shadow">
					<img src="<?php echo base_url().'assets/gambars/'.$gambarf;?>"  alt="" class="img-fluid" />
					<h4 ><span class="fa fa-plane" aria-hidden="true"></span><?php echo $namapaketf;?></h4>
					<div class="offer">
						<h3>30% off </h3>
					</div>
					<div class="card-paket">
						<h5 class="card-title pricing-card-title">
							<span>$</span>2.449
							<small class="text-muted">/PACK </small>
						</h5>
						<ul class="list-unstyled mt-3 mb-4">
							<li class="py-1 border-bottom">Duration &nbsp;&nbsp;10 Hari </li>
							<li class="py-1 border-bottom">Bandara &nbsp;&nbsp; Soekarno </li>
							<li class="py-1">Extras &nbsp;&nbsp;&nbsp;&nbsp;All in Package</li>
						</ul>

						<a href=	"<?php echo base_url().'paket_tour/detail_paket/'.$idpaketf;?>" class="btn btn-sm price mt-3">Detail Pemesanan</a>
					</div>
				</div>
			<?php }; ?>
				<div class="mx-auto mt-lg-4 mt-5 text-center klik">
					<a href="<?php echo base_url().'paket_tour'?>" >Lihat Paket Lainya</a>
				</div>
			</div>
	</div>
</section>


<!-- testimonials -->
<section class="testimonials py-5" id="testi">
	<div class="container py-lg-5 py-md-3">
			<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> Kenapa Memilih EL-Travel</h3>
		<div class="row pt-xl-4">
			<div class="col-md-6 test-grid px-lg-4">
				<div class="testi-info text-center">
					<div class="test-img text-center mt-4">
						<img src="<?php echo base_url().'tampilan_web/images/jempol.png'?>" class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">TERPERCAYA</h3>
						<p class="text-li">Kami Memastikan Keselurahan Proses Liburan Anda Berjalan Baik Dan Tak Terlupakan</p>
				</div>
			</div>
			<div class="col-md-6 test-grid px-lg-4 my-md-0 my-5">
				<div class="testi-info text-center">
					<div class="test-img text-center mt-4">
						<img src="<?php echo base_url().'tampilan_web/images/pro.png'?>"  class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">PROFESIONAL</h3>
					<p class="text-li">Kami Mengetahui Kepentingan Anda Lebih Utama Dari Program Apapun Yang Dapat Kami Tawarkan</p>
				</div>
			</div>

		</div>
		<!-- //testimonials -->

		<div class="row pt-xl-4">
			<div class="col-md-6 test-grid px-lg-4">
				<div class="testi-info text-center">
					<div class="test-img text-center mt-4">
						<img src="<?php echo base_url().'tampilan_web/images/botak.png'?>" class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">BERPENGALAMAN</h3>
						<p class="text-li">Pengalaman Dan Jam Terbang Kami Telah Membuktikan Bahwa Kepuasan Pelanggan Adalah Nomor Satu</p>
				</div>
			</div>
			<div class="col-md-6 test-grid px-lg-4 my-md-0 my-5">
				<div class="testi-info text-center">
					<div class="test-img text-center mt-4">
						<img src="<?php echo base_url().'tampilan_web/images/pes.png'?>"  class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">TERJANGKAU</h3>
					<p class="text-li">Kami Adalah Solusi Dengan Biaya Yang Relatif Terjangkau, Tapi Anda Dapat Merasakan Momen Liburan Yang Tidak Terlupakan</p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- //testimonials -->


<!--/pricing -->
	<section class="team py-5" id="pricing">
		<div class="container-fluid p-lg-5 p-sm-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Kata Mereka</h2>
			<div class="inner-sec-w3ls-agileits">
				<div class="gallery_grids">
					<div class="card-desk text-center">
						<div class="row prime">
							<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5 price-main-info card box-shadow">
								<div class="card-body">
									<img src="<?php echo base_url().'tampilan_web/web2/img/santo.png'?>" class="img-fluid" alt="user-image">
									<h5 class="card-title pricing-card-title">
									Jonathan Prawira
									</h5>
									<p>Founder</p>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Saya pernah berangkat dengan panitia EL TRAVEL. Perjalanannya terjamin, Pelayanannya segenap
                                    hati, pengalaman rohaninya berkesan, dan suasana wisata nya menyenangkan. Menanti bisa
                                    kembali ke Israel bersama EL lagi. God bless all.
										</li>

									</ul>

								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5 price-main-info card box-shadow">
								<div class="card-body">
									<img src="<?php echo base_url().'tampilan_web/web2/img/aurel.png'?>" class="img-fluid" alt="user-image">
									<h5 class="card-title pricing-card-title">
							Aurelia Octianggita 
									</h5>
									<p>Finance Director</p>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Melalui El-Travel, Saya Mendapatkan Perjalanan Yang Menyenangkan Dengan Profesional Dan Harga Terjangkau</li>

									</ul>

								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5 price-main-info card box-shadow">
								<div class="card-body">
									<img src="<?php echo base_url().'tampilan_web/web2/img/erlanga.png'?>" class="img-fluid" alt="user-image">
									<h5 class="card-title pricing-card-title">
									Herajana Salim
									</h5>
									<p>Marketing Director</p>
									<ul class="list-unstyled mt-3 mb-4">
										<li class="py-2 border-bottom">Ini perjalanan saya yang ke 2 kali ke Israel. Bersama El Travel perjalan terasa sangat menyenangkan.
                                        Dengan fasilitas hotel yang bagus, tour leader dan Tour guide yang pengalaman menambah
                                        wawasan pengalaman rohani bertambah dan tentunya perjalanan saya terjamin bersama El Travel.
                                        Engga sabar mau balik lagi ke Israel bersama El Travel
										</li>

									</ul>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//pricing -->



	<!-- /services -->
	<section class="featured_services py-5">
		<div class="container py-3">
			<h3 class="heading text-center mb-5">Blog  </h3>
			<div class="row agile_inner_info">
				<?php
						foreach ($berita->result_array() as $b) {
								$idberita=$b['idberita'];
								$judul=$b['judul'];
								$isi=limit_words($b['isi'],15);
								$tglpost=$b['tglpost'];
								$gbr=$b['gambar'];
								$user=$b['user'];
				?>
				<div class="col-md-3 col-sm-6 col-6 px-2  w3_agile_services_grid">

					<div class="agile_services_grid">
						<div class="hover06 column">
							<div>
										<img src="<?php echo base_url().'assets/gambars/'.$gbr;?>" class="img-fluid" alt="" />
							</div>
						</div>
						<div class="agile_services_grid_pos">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
					</div>
					<h4><?php echo $judul; ?></h4>
						<p><?php echo $isi;?></p>
							<a href="<?php echo base_url().'berita_post/detail_berita/'.$idberita;?>">Read More >>></a>
                <div class="clearfix"></div>
				</div>
<?php }; ?>


			</div>

		</div>
	</section>
	<!-- //services -->
			<section id="bacot" >
					<div class="kuah">
					<div class="container">
						<div class="row">

							<div class="col-md-6">
								<h1>
									 Ingin Diskon Khusus?
			  </h1>
			</div>
			<div class="col-md-6">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><p>
									<a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="blank">Chat Via WhatsApp</a>
								</p>
						</div>
						</div>
					</div>
				</div>
			</section>

<!--/middle-->

	<!--//middle-->


        <!-- footer part start-->

            		<section class="zonk" id="colorlib-footer">
            			<div class="container">
            				<div class="row ">
            					<div class="col-md-3 colorlib-widget">
            						<h3>El-Travel Agent</h3>
            						<p>
                    Menjadikan penyedia layanan perjalanan yang berkualitas.
                    Menjalankan jaringan terintegrasi dalam memberikan layanan perjalanan yang menyeluruh secara professional</p>
                    <h2>Follow Media Sosial Kami</h2>
            						<p>
            							 <ul class="colorlib-social-icons">
                        <li><a href="https://facebook.com/el.travel.indonesia/" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ElTravel_Indo" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/eltravel.indo/" target="blank"><i class="fa fa-instagram"></i></a></li>
                      </ul>
            						</p>
            					</div>
            					<div class="col-md-3 colorlib-widget">
            						<h3>Information</h3>
            						<p>
            							<ul class="colorlib-footer-links">
            								<li><a href="<?php echo base_url().'welcome'?>"><i class="fa fa-bookmark"></i> Home</a></li>
            								<li><a href="<?php echo base_url().'about'?>"><i class="fa fa-bookmark"></i> Tentang El-Travel</a></li>
                            <li><a href="<?php echo base_url().'paket_tour'?>"><i class="fa fa-bookmark"></i> Paket Wisata</a></li>
            								<li><a href="<?php echo base_url().'berita_post'?>"><i class="fa fa-bookmark"></i> Blog Dokumentasi</a></li>
            								<li><a href="<?php echo base_url().'detail_photo'?>"><i class="fa fa-bookmark"></i> Galerry</a></li>
            								<li><a href="<?php echo base_url().'kontak'?>"><i class="fa fa-bookmark"></i> Contact</a></li>
            								<li><a href="<?php echo base_url().'semua_album'?>"><i class="fa fa-bookmark"></i> Pendaftaran</a></li>
            							</ul>
            						</p>
            					</div>

            				
												<div class="col-md-3 colorlib-widget">
												<h3>Paket Wisata</h3>
												<?php
																									foreach ($paket->result_array() as $h) {
																											$idpaketf=$h['idpaket'];
																											$namapaketf=$h['nama_paket'];
																											$gambarf=$h['gambar'];
																									?>
												<div class="f-blog">
													<a href="<?php echo base_url().'paket_tour/detail_paket/'.$idpaketf;?>" class="blog-img">
														 <img  src="<?php echo base_url().'assets/gambars/'.$gambarf;?>" alt=""  class="img-fluid"/>
													</a>
													<div class="desc">
														<h5><a href="<?php echo base_url().'paket_tour/detail_paket/'.$idpaketf;?>"><?php echo $namapaketf;?></a></h5>

													</div>
												</div>
												<?php }; ?>
											</div>

            					<div class="col-md-3 colorlib-widget">
            						<h3>Contact Info</h3>
            						<ul class="colorlib-footer-links">
            							<li>Rukan Mahkota Mas Lt 2 Blok M1/7
                                            Jl. MH. Thamrin, Cikokol
                                            Tangerang – 15117
                                        </li>
            							<li><a href="tel://+622159729429"><i class="fa fa-phone"></i> 021 59729429</a></li>
            							<li><a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank"><i class="fa fa-whatsapp"></i>+62853 1133 5522</a></li>
            							<li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i> info@eltravel.com</a></li>
            							<li><a href="<?php echo base_url().'welcome'?>"><i class="fa fa-map"></i> www.el-travel.com</a></li>
            						</ul>
            					</div>
            				</div>
            			</div>
            			<div class="copy">
            				<div class="container-fluid">
            					<div class="row">
            						<div class="col-md-6">
            							<p>
            								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script>&nbsp; EL-Travel. All Right Reserved </p>
						</div>
						<div class="col-md-6 text-right">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><p>
            								<a href="http://deelabs.com/" target="_blank">Designed By Deelabs</a>
            							</p>
            						</div>
            					</div>
            				</div>
            			</div>
            		</section>
            <!-- footer part end-->


<!-- js-scripts -->

	<!-- js -->


	<script type="text/javascript" src="<?php echo base_url().'tampilan_web/js/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'tampilan_web/js/bootstrap.js'?>"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- desoslide-JavaScript -->
		<script src="<?php echo base_url().'tampilan_web/js/slideshow.min.js'?>"></script>
	<script src="<?php echo base_url().'tampilan_web/js/jquery.desoslide.js'?>"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- Calendar -->
		<script src="<?php echo base_url().'tampilan_web/js/jquery-ui.js'?>"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
	<!-- //Calendar -->

	<!-- banner slider -->
	<script src="<?php echo base_url().'tampilan_web/js/responsiveslides.min.js'?>"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!--pop-up-box -->
	<script src="<?php echo base_url().'tampilan_web/js/jquery.magnific-popup.js'?>"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 700,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->

	<!-- start-smoth-scrolling -->
	<script src="<?php echo base_url().'tampilan_web/js/SmoothScroll.min.js'?>"></script>
	<script src="<?php echo base_url().'tampilan_web/js/launcher.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'tampilan_web/js/move-top.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'tampilan_web/js/easing.js'?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
<script src="<?php echo base_url().'tampilan_web/web2/js/custom.js'?>"></script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
