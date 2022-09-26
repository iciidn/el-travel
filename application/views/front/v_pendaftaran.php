 <!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EL-Travel | Pendaftaran</title>
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
													 <a href="https://twitter.com/ElTravel_Indo" target="_blank">
														 <i class="flaticon-twitter"></i></a>
														
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
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Pendaftaran Akun </h2>
                            <p>Isi Data Diri Anda Dan Dapatkan Pengalaman Bersama Kami</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="section_tittle text-center">
                      <h2>From Pendaftaran</h2>
                    <?php echo $this->session->flashdata('msg');?>
                  </div>
                  <form  action="<?php echo base_url().'pendaftaran/kirim_pesan'?>" method="post" >
                      <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">

                  											<select class="form-control" name="xpaket">
                  											
                  									<option value="1">Mesir -Israel-Jordan</option>
                  									<option value="2">Arab-Turkey</option>
                  									
                  									</select>

                              </div>
                        </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'isi Nama Anda'" placeholder='isi Nama Anda' required>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'isi Email Anda'" placeholder='isi Email Anda' required>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="xkontak" id="hp" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'isi Nomor Handphone'" placeholder='isi Nomor Handphone'>
                              </div>
                          </div>
                          <div class="col-sm-6">

                              <div class="form-group">

                  											<select class="form-control" name="xkelamin" placeholder='Jenis Kelamin'>
                  											
                  									<option value="1">Laki-Laki</option>
                  									<option value="2">Perempuan</option>
                  									
                  									</select>

                              </div>
                          </div>

                          <div class="col-12">
                              <div class="form-group">
                                  <textarea class="form-control w-100" name="xalamat" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'isi Alamat Anda'" placeholder='isi Alamat Anda'></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mt-3">
                          <button type="submit" class="button button-contactForm btn_1">Simpan Pendaftaran</button>
                      </div>
                  </form>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                          <li>
                            Perhatiaan !!
                          </li>
                          <p>Isi Dan Lengkapi Data - Data Anda Dengan Benar </p>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategory</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Umroh</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Naik Haji</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                      <p>Rohani Kristen</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Budhha</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Hindu</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Naik Haji</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


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
    									<a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....."  target="_blank">Chat Via WhatsApp</a>
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
</li>
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
