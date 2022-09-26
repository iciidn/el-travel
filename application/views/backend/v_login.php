<!DOCTYPE html>
<head>
<title>El-Travel | Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'tampilan_web/images/logobrow.png'?>">
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url().'assets/css/style.css'?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'assets/css/style-responsive.css'?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/font.css'?>" type="text/css"/>
<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
<!-- //font-awesome icons -->

</head>

<body>
  <header class="main_menu">
       <div class="sub_menu">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-sm-12 col-md-6">

                   </div>
                   <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">

													 <a href="https://facebook.com/el.travel.indonesia/" target="blank"><i class="fa fa-facebook"></i></a>
													 <a href="https://twitter.com/ElTravel_Indo" target="_blank">
														 <i class="fa fa-twitter"></i></a>
													 <a href="https://wa.me/6285311335522?text=halo%20dengan%20marketing%20El-TRAVEL%20....." target="_blank" ><i class="fa fa-whatsapp"></i></a>
													 <a href="https://www.instagram.com/eltravel.indo/" target="blank"><i class="fa fa-instagram"></i></a>
													 <a href="tel://6285311335522" target="blank"><span><i class="fa fa-phone"></i> +085311335522 </span></a>
													 
											 </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="main_menu_iner">
           <div class="container-fluid">
               <div class="row align-items-center ">
                   <div class="col-lg-12">
                       <nav class="navbar navbar-expand-lg navbar-light">
                           <img src="<?php echo base_url().'assets/images/Logo El-Travel.png'?>" alt="logo">

                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </header>


<div class="login-page">
  <div class="login-box">
    <div>
     <p><?php echo $this->session->flashdata('msg');?></p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"> <img src="<?php echo base_url().'assets/images/Logo El-Travel.png'?>"></p><hr/>

      <form action="<?php echo base_url().'administrator/auth'?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username" required>

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" required>

        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
</div>


<footer id="copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <p>
           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script>&nbsp; EL-Travel. All Right Reserved </p>
</div>
<div class="col-md-6 text-right">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><p>
          <a href="<?php echo base_url().'welcome'?>" target="_blank">Designed By Deelabs</a>
        </p>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
