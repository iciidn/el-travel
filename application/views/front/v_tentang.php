<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EL-Travel | Profil</title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'tampilan_web/images/logobrow.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/bootstrap.min.css'?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/animate.css'?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/owl.carousel.min.css'?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/themify-icons.css'?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/flaticon.css'?>">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/fontawesome/css/all.min.css'?>">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/magnific-popup.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/gijgo.min.css'?>">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/nice-select.css'?>">
    <!-- slick CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/slick.css'?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'tampilan_web/web2/css/style.css'?>">
</head>
<?php
           function limit_words($string, $word_limit){
               $words = explode(" ",$string);
               return implode(" ",array_splice($words,0,$word_limit));
           };

       ?>
<body>
  <!--::header part start::-->
  <header class="main_menu">
       <div class="sub_menu">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-sm-12 col-md-6">
                       </div>
                   <div class="col-lg-6 col-sm-12 col-md-6">
                       <div class="sub_menu_social_icon">
													 <a href="https://facebook.com/el.travel.indonesia/" target="blank"><i class="flaticon-facebook"></i></a>
													 <a href="https://twitter.com/ElTravel_Indo" target="_blank"><i class="flaticon-twitter"></i></a>
														
													 <a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank" ><i class="fab fa-whatsapp"></i></a>
													 <a href="https://www.instagram.com/eltravel.indo/" target="blank"><i class="flaticon-instagram"></i></a>
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
                           <a class="navbar-brand" href="<?php echo base_url().'welcome'?>" ><img src="<?php echo base_url().'tampilan_web/images/logoel.png'?>" alt="logo"> </a>
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
        <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                          <h2>Who We Are </h2>
                          <p>El-Travel Adalah Plihan Provider Pariwisata Yang Berkualitas Dan Profesional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--/pricing -->
    	<section class="team py-5" id="pricing">
    		<div class="container p-lg-5 p-sm-3">
    			<div class="inner-sec-w3ls-agileits">
    				<div class="gallery_grids">
    					<div class="card-desk text-center">
    						<div class="row prime">
    							<div class="col-lg-6 col-sm-6 mt-lg-0 mt-5 ">
                    	<img src="<?php echo base_url().'tampilan_web/web2/img/visi.png'?>"  class="img-fluid" alt="user-image">
    							</div>
    							<div class="col-lg-6 col-sm-6 mt-lg-0 mt-5">
                <div class="price-main-info card box-shadow">
    								<div class="card-body">
    									<h5 class="card-title pricing-card-title">
    								VISI :
    									</h5>
    									<ul class="list-unstyled mt-3 mb-4">
    										<li class="py-2 border-bottom">Menjadikan penyedia layanan perjalanan yang berkualitas </li>

    									</ul>
    								</div>
                    </div>

                    <div class="price-main-info card box-shadow">
        								<div class="card-body">
        									<h5 class="card-title pricing-card-title">
                            MISI :
        									</h5>
        									<ul class="list-unstyled mt-3 mb-4">
        										<li class="py-2 border-bottom">Menjalankan jaringan terintegrasi dalam memberikan layanan perjalanan yang menyeluruh secara professional</li>

        									</ul>
        								</div>
                        </div>
    							</div>


    						</div>
    					</div>

    				</div>
    			</div>
    		</div>
    	</section>
    	<!--//pricing -->


      <!-- testimonials -->
      <section class="testimonials py-5" id="testi">
      	<div class="container py-lg-5 py-md-3">
      			<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> Kenapa Memilih EL-Travel ?</h3>
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

    <!--top place start-->
    <section class="event_part section_padding">
        <div class="container">
          	<h3 class="heading text-capitalize text-center mb-lg-5 mb-4">Profil Pengurus</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <div class="single_event_slider">
                <div class="row align-items-center">
              <div class="col-lg-6">
                  <div >
                    <img src="<?php echo base_url().'tampilan_web/web2/img/santo.png'?>"  class="img-fluid" alt="user-image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about_text">
                      <h2>Ir. Susanto Djaya Alexander</h2>
                      <h5>Founder</h5>
                      <p>Strong Leadership (communication and interpersonal skills), dealing with globalization and treating people as human beings, regardless of nationality or origin. Quick Learner, having more than 25 years of progressive experience in information technology, both large or medium size local and overseas business enterprises company.
Having excellent experience and knowledge to develop, implement and maintain disaster recovery procedure, lead Infrastructure project to make company business more efficient.
.</p>
                  </div>
              </div>
          </div>
                        </div>
                        <div class="single_event_slider">
                <div class="row align-items-center">
              <div class="col-lg-6">
                  <div >
                    <img src="<?php echo base_url().'tampilan_web/web2/img/erna.png'?>"  class="img-fluid" alt="user-image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about_text">
                      <h2>Erna Indah Susanti SE</h2>
                      <h5>Operasional Director</h5>
                    <p>Highly motivated, accurate, though and precise in attention to details. Experienced in General Affair, Procurement, Vendor Management and Information Technology. Have been in Banking or finance Industry for 10+ years. Professional with extensive experience supporting business goals and objectives. Work as Individual and Team Player.</p>
                  </div>
              </div>
          </div>
                        </div>
                        <div class="single_event_slider">
                <div class="row align-items-center">
              <div class="col-lg-6">
                  <div >
                    <img src="<?php echo base_url().'tampilan_web/web2/img/aurel.png'?>"  class="img-fluid" alt="user-image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about_text">
                      <h2>Aurelia Octianggita Susanto, S.Tr.Par</h2>
                      <h5>Finance Director</h5>
                      <p>Graduate with excellent outstanding achievement and worldwide experience, Good analytical thinking in order to be able to take an overall view, analyse situations, identify the core of problems and develop the appropriate solutions. Ability to get things done at the given limited time frame. Common sense, brush away extraneous ideas to get to core of what matters.</p>
                  </div>
              </div>
          </div>
                        </div>
                        <div class="single_event_slider">
                <div class="row align-items-center">
              <div class="col-lg-6">
                  <div >
                    <img src="<?php echo base_url().'tampilan_web/web2/img/erlanga.png'?>"  class="img-fluid" alt="user-image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about_text">
                      <h2>Erlangga Febriananta Susanto, S.Tr.Par </h2>
                      <h5>Marketing Director</h5>
                      <p>Self-motivated well organized and customer oriented. Good in teamwork, good in communication. Quick Learner and easy adaptation in every single condition, Strong and having excellent experience and knowledge in communication and marketing skills, Excellent knowledge and have a good analytical to understand business issue and to map it to the system functionality. </p>
                  </div>
              </div>
          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place end-->



          <section class="jump section_padding">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="ol-lg-6">
                          <h2>7 Alasan Kenapa Harus Menggunakan EL Travel ?</h2>
                        </div>
                          <div class="ol-lg-6">
                          <div class="event_slider owl-carousel" >
                              <div class="single_event_slider">
                                  <div class="row">
                                      <div class="col-md-4">
                            <h1 class="text-center">1.</h1>
                            </div>
                            <div class="col-md-8">
                          <p>Memiliki Partner pada destinasi tujuan yang kuat, professional dan terpercaya.</p>
                           </div>
                         </div>
                    </div>

                    <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">2.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Memiliki destinasi wisata pilihan yang lebih menarik dari destinasi wisata yang lain.</p>
                            </div>
                         </div>
                 </div>
                 
                 <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">3.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Memiliki rencana kerja jangka panjang dengan berbagai program penawaran </br>
                                 -- Harga yang menarik </br>
                                 -- Youth, Couple, Oldest, General </br>
                                 -- Thematic </br>
                                -- Special Program (exclusive)
                                 </p>
                            </div>
                         </div>
                 </div>
                 
                 <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">4.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Pembayaran Tunai, Tunai bertahap, Tunai dengan angsuran.</p>
                            </div>
                         </div>
                 </div>
                 
                 <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">5.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Transparant transaction (web base application).</p>
                            </div>
                         </div>
                 </div>
                 
                 <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">6.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Memberi kesempatan bagi Hamba Tuhan yang belum pernah melakukan perjalanan Wisata Ziarah Rohani.</p>
                            </div>
                         </div>
                 </div>
                 
                 <div class="single_event_slider">
                         <div class="row">
                            <div class="col-md-4">
                                <h1 class="text-center">7.</h1>
                            </div>
                            <div class="col-md-8">
                                <p>Mengutamakan kepuasan wisatawan.</p>
                            </div>
                         </div>
                 </div>

                      
                      </div>
                        </div>
                          </div>
                    <div class="col-md-6">
                          <img src="<?php echo base_url().'tampilan_web/web2/img/alasan.png'?>"  class="img-fluid" alt="user-image">
                    </div>

                  </div>
              </div>
          </section>
          <!--top place end-->

    				<section id="bacot" >
    					<div class="kuah">
    					<div class="container">
    						<div class="row">

    							<div class="col-md-6">
    								<h1>
    									 Masih Bingung?
    			  </h1>
    			</div>
    			<div class="col-md-6">
    			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><p>
    									<a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank">Chat Via WhatsApp</a>
    								</p>
    						</div>
    						</div>
    					</div>
    				</div>
    			</section>
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
                        <li><a href="https://facebook.com/el.travel.indonesia/" target="blank"><i class="flaticon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ElTravel_Indo" target="_blank"><i class="flaticon-twitter"></i></a></li>
                        <li><a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank" ><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/eltravel.indo/" target="blank"><i class="flaticon-instagram"></i></a></li>
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
                        <img  src="<?php echo base_url().'assets/gambars/'.$gambarf;?>" alt=""  class="img-responsive"/>
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
                    .</li>
                      	<li><a href="tel://+622159729429"><i class="fa fa-phone"></i> 021 59729429</a></li>
            	<li><a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank"><i class="fab fa-whatsapp"></i>+62853 1133 5522</a></li>
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

    <!-- jquery plugins here-->
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery-1.12.1.min.js'?>"></script>
    <!-- popper js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/popper.min.js'?>"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/bootstrap.min.js'?>"></script>
    <!-- magnific js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery.magnific-popup.js'?>"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/owl.carousel.min.js'?>"></script>
    <!-- masonry js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/masonry.pkgd.js'?>"></script>
    <!-- masonry js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery.nice-select.min.js'?>"></script>
    <script src="<?php echo base_url().'tampilan_web/web2/js/gijgo.min.js'?>"></script>
    <!-- contact js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery.ajaxchimp.min.js'?>"></script>
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery.form.js'?>"></script>
    <script src="<?php echo base_url().'tampilan_web/web2/js/jquery.validate.min.js'?>"></script>
    <script src="<?php echo base_url().'tampilan_web/web2/js/mail-script.js'?>"></script>
    <script src="<?php echo base_url().'tampilan_web/web2/js/contact.js'?>"></script>
    <!-- custom js -->
    <script src="<?php echo base_url().'tampilan_web/web2/js/custom.js'?>"></script>
</body>

</html>
