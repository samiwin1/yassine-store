<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include ('layout/header.php'); ?>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Gurdeep singh osahan">
      <meta name="author" content="Gurdeep singh osahan">
      <title>Chpoee - Bootstrap E-Commerce Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/fav-icon.png">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
      <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body>
      <div class="bg-light">
         <div class="header-top border-bottom bg-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                           <a href=""><i class="icofont icofont-iphone"></i> +1-123-456-7890</a>
                        </li>
                        <li class="list-inline-item border-right py-1 pr-2 mr-2">
                           <a href="contact-us.php"><i class="icofont icofont-headphone-alt"></i> Contact Us</a>
                        </li>
                        <li class="list-inline-item">
                           <span>Download App</span> &nbsp;
                           <a href="#"><i class="icofont icofont-brand-windows"></i></a>
                           <a href="#"><i class="icofont icofont-brand-apple"></i></a>
                           <a href="#"><i class="icofont icofont-brand-android-robot"></i></a>
                        </li>
                     </ul>
                     <p class="mb-0 py-1">FREE CASH ON DELIVERY &amp; SHIPPING AVAILABLE OVER <span class="text-danger font-weight-bold">$499</span></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-nav shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
               <?php include ('layout/header-nav.php'); ?>
            </nav>
         </div>
         
      <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                  Contact Us       
               </div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="#"><i class="icofont-ui-home"></i> Home</a>  /  <span>Contact Us</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us -->
      <section class="py-5 bg-light border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 h-100 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">Get In Touch</h4>
                     <h6 class="text-dark"><i class="icofont-location-pin pr-1"></i> Address :</h6>
                     <p class="pl-4">El Menzah 1, Tunis</p>
                     <h6 class="text-dark"><i class="icofont-smart-phone pr-1"></i> Phone :</h6>
                     <p class="pl-4"> (+216) 56404772</p>
                     
                     <h6 class="text-dark"><i class="icofont-email pr-1"></i> Email :</h6>
                     <p class="pl-4">yassinestore@gmail.com</p>
                     <h6 class="text-dark"><i class="icofont-link pr-1"></i> Website :</h6>
                     <p class="pl-4">www.yassine store.com</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">Feedback</h4>
                     <form name="sentMessage" id="contactForm" method="post" action="php/contact.php" >
  <div class="control-group form-group">
    <div class="controls">
      <label>Full Name <span class="text-danger">*</span></label>
      <input type="text" placeholder="Full Name" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="row">
    <div class="control-group form-group col-md-6">
      <label>Phone Number <span class="text-danger">*</span></label>
      <div class="controls">
        <input type="tel" placeholder="Phone Number" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
      </div>
    </div>
    <div class="control-group form-group col-md-6">
      <div class="controls">
        <label>Email Address <span class="text-danger">*</span></label>
        <input type="email" placeholder="Email Address"  class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
      </div>
    </div>
  </div>
  <div class="control-group form-group">
    <div class="controls">
      <label>Message <span class="text-danger">*</span></label>
      <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
    </div>
  </div>
  <div id="success"></div>
  <!-- For success/fail messages -->
  <button type="submit" class="btn btn-primary btn-sm float-right">Send Message</button>
</form>

                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="h-100 p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.34550260105!2d10.173886974945681!3d36.840407351892246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34bd234ee90b%3A0x2adcf52bfbb73f78!2sEl%20Menzah%201%2C%20Tunis!5e0!3m2!1sfr!2stn!4v1678042569008!5m2!1sfr!2stn" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Contact Us -->
      <!-- Footer -->
      <footer class="bg-white border-bottom border-top">
         
         <!-- /.container -->
      </footer>
      
      <?php include ('layout/bot-footer.php'); ?>
   </body>
</html>