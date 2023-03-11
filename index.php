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
   <title>Yassine Store </title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="img/logo 2.png">
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Slider CSS -->
   <link rel="stylesheet" href="vendor/slider/slider.css">
   <!-- Select2 CSS -->
   <link href="vendor/select2/css/select2-bootstrap.css" />
   <link href="vendor/select2/css/select2.min.css" rel="stylesheet" />
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
<div class="btn-primary pt-2 pb-2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 text-center">
               <a href="shop.html" class="mb-0 text-white">
                  40% CASHBACK FOR NEW USERS | CODE: <strong><span class="text-light">Yassine40 <span
                           class="mdi mdi-tag-faces"></span></span> </strong>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade login-modal-main" id="login">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="login-modal">
                  <div class="row">
                     <div class="col-lg-6 d-flex align-items-center">
                        <div class="login-modal-left p-4 text-center pl-5">
                           <img src="img/logo 2.png" alt="Gurdeep singh osahan">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <button type="button" class="close close-top-right position-absolute" data-dismiss="modal"
                           aria-label="Close">
                           <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                           <span class="sr-only">Close</span>
                        </button>
                           <ul class="mt-4 mr-4 nav nav-tabs-login float-right position-absolute" role="tablist">
                              <li>
                                 <a class="nav-link-login active" data-toggle="tab" href="#login-form" role="tab"><i
                                       class="icofont-ui-lock"></i> LOGIN</a>
                              </li>
                              <li>
                                 <a class="nav-link-login" data-toggle="tab" href="#register" role="tab"><i
                                       class="icofont icofont-pencil"></i> REGISTER</a>
                              </li>
                           </ul>
                           <div class="login-modal-right p-4">
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div class="tab-pane active" id="login-form" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">LOGIN</h5>
                                     <form name="signup" id="signup" method="post" action="php/login.php">
                                        <fieldset class="form-group mt-4">
                                           <label>Enter Username</label>
                                           <input type="text" name="username" class="form-control" placeholder="+91 123 456 7890">
                                        </fieldset>
                                        <fieldset class="form-group">
                                           <label>Enter Password</label>
                                           <input type="password" name="password" class="form-control" placeholder="********">
                                        </fieldset>
                                        <fieldset class="form-group">
                                           <button type="submit" class="btn btn-lg btn-primary btn-block">Enter to your
                                              account</button>
                                        </fieldset>
                                     </form>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                                       <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                    <div class="login-with-sites mt-4">
                                       <p class="mb-2">or Login with your social profile:</p>
                                       <div class="row text-center">
                                          <div class="col-6 pr-1">
                                             <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-facebook"></i> Facebook</button>
                                          </div>
                                          <div class="col-6 pl-1">
                                             <button class="btn-google btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-google-plus"></i> Google</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="register" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">REGISTER</h5>
                                     <form name="signup" id="signup" method="post" action="php/register.php">
                                     <fieldset class="form-group mt-4">
                                             <label>Username</label>
                                             <input type="text" name="username" class="form-control" placeholder="username">
                                         </fieldset>
                                         <fieldset class="form-group mt-4">
                                             <label>Enter Email/Mobile number</label>
                                             <input type="text" name="phone" class="form-control" placeholder="+91 123 456 7890">
                                         </fieldset>
                                         <fieldset class="form-group">
                                             <label>Enter Password</label>
                                             <input type="password" name="password" class="form-control" placeholder="********">
                                         </fieldset>
                                         <fieldset class="form-group">
                                             <label>Enter Confirm Password </label>
                                             <input type="password" class="form-control" name="check_password" placeholder="********">
                                         </fieldset>
                                         <fieldset class="form-group">
                                             <input type="submit" class="btn btn-lg btn-primary btn-block">Create Your
                                                 Account</input>
                                         </fieldset>
                                     </form>

                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                                       <label class="custom-control-label" for="customCheck2">I Agree with <a
                                             href="#">Term and Conditions</a></label>
                                    </div>
                                    <div class="login-with-sites mt-4">
                                       <p class="mb-2">or Login with your social profile:</p>
                                       <div class="row text-center">
                                          <div class="col-6 pr-1">
                                             <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-facebook"></i> Facebook</button>
                                          </div>
                                          <div class="col-6 pl-1">
                                             <button class="btn-google btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-google-plus"></i> Google</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bg-light">
      <div class="header-top border-bottom bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="list-inline float-right mb-0">
                     <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                        <a href=""><i class="icofont icofont-iphone"></i> 56112441</a>
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
                  <p class="mb-0 py-1">FREE CASH ON DELIVERY &amp; SHIPPING AVAILABLE OVER <span
                        class="text-danger font-weight-bold">499DT</span></p>
               </div>
            </div>
         </div>
      </div>
      <div class="main-nav shadow-sm">
         <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
            <?php include ('layout/header-nav.php'); ?>
         </nav>
      </div>
      <div class="py-0">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 px-0">
                  <header>
                     <div id="owl-carousel-one" class="owl-carousel">
                        <div class="item"><img class="img-fluid mx-auto" src="img/vape 1.png"></div>
                        <div class="item"><img class="img-fluid mx-auto" src="img/vape 2.png"></div>
                        <div class="item"><img class="img-fluid mx-auto" src="img/vape 3.png"></div>

                     </div>
                  </header>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section class="py-5">
      <div class="container">
         <div class="row">
            <div class="col-4">
               <div class="offers-block"><a href="#">
                     <img class="img-fluid" src="img/offer.jpg" alt=""></a>
               </div>
            </div>
            <div class="col-4">
               <div class="offers-block"> <a href="#"><img class="img-fluid mb-3" src="img/bg.jpg" alt=""></a>
               </div>
               <div class="offers-block"><a href="#"><img class="img-fluid" src="img/puff2.jpg" alt=""></a></div>
            </div>
            <div class="col-4">
               <div class="offers-block"><a href="#"><img class="img-fluid" src="img/pufff.jpg" alt=""></a></div>
            </div>
         </div>
      </div>
   </section>
   <section class="product-list pbc-5 pb-4 pt-5 bg-light">
      <div class="container">
         <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
         <h4 class="mt-0 mb-3 text-dark font-weight-normel">Best Selling Items</h4>
         <div class="row">
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-danger">NEW</span>
                     <img src="img/product5.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-success">50% OFF</span>
                     <img src="img/product1.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span
                           class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-danger">NEW</span>
                     <img src="img/product2.png" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span
                           class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-success">50% OFF</span>
                     <img src="img/product3.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <a href="#">
                     <span class="badge badge-danger">NEW</span>
                     <img src="img/product4.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-success">50% OFF</span>
                     <img src="img/product6.png" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-danger">NEW</span>
                     <img src="img/prod10.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                  <a href="#">
                     <span class="badge badge-success">50% OFF</span>
                     <img src="img/prod11.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                     <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <section class="offer-product py-5">
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="offers-block"><a href="#"><img class="img-fluid" src="img/poster3.jpg" alt=""></a></div>
            </div>
            <div class="col-6">
               <div class="offers-block"><a href="#"><img class="img-fluid" src="img/poster4.jpg" alt=""></a></div>
            </div>
         </div>
      </div>
   </section>
   <section class="product-list pbc-5 pb-4 pt-5 bg-light">
      <div class="container">
         <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
         <h4 class="mt-0 mb-3 text-dark">Top Savers Today</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-carousel-category owl-theme">
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-danger">NEW</span>
                           <img src="img/pufff.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span>
                              <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-success">50% OFF</span>
                           <img src="img/prod10.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a class="active" href="#"> <i
                                 class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-danger">NEW</span>
                           <img src="img/prod11.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-success">50% OFF</span>
                           <img src="img/product 7.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-danger">NEW</span>
                           <img src="img/product 8.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                           <span class="badge badge-success">50% OFF</span>
                           <img src="img/prod11.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                           <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                           <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                 class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                              <span>613</span></div>
                           <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Footer -->
   <footer class="bg-white border-bottom border-top">
      <div class="container">
         <div class="row no-gutters">
            <div class="col-md-4">
               <div class="border-right py-5 px-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">ABOUT US</h6>
                  <div class="row no-gutters">
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                           <li><a href="#">History</a></li>
                           <li><a href="#">Band of Trust</a></li>
                           <li><a href="#">Brand Guidelines</a></li>
                           <li><a href="#">TV Commercials</a></li>
                           <li><a href="#">In the News
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                           <li><a href="#">Awards</a></li>
                           <li><a href="#">Terms & Conditions</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">Careers</a></li>
                           <li><a href="#">Offers</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="py-5 pl-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">DOWNLOAD APP</h6>
                  <div class="app">
                     <a href="#">
                        <img class="img-fluid" src="img/google.png">
                     </a>
                     <a href="#">
                        <img class="img-fluid" src="img/apple.png">
                     </a>
                  </div>
                  <h6 class="mt-4 mb-4 f-14 text-dark font-weight-bold">KEEP IN TOUCH</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="#"><i class="icofont-facebook"></i></a>
                     <a class="btn-twitter" href="#"><i class="icofont-twitter"></i></a>
                     <a class="btn-instagram" href="#"><i class="icofont-instagram"></i></a>
                     <a class="btn-whatsapp" href="#"><i class="icofont-whatsapp"></i></a>
                     <a class="btn-messenger" href="#"><i class="icofont-facebook-messenger"></i></a>
                     <a class="btn-google" href="#"><i class="icofont-google-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
   </footer>

   <div class="copyright bg-light py-3">
      <div class="container">
         <div class="row">
            <div class="col-md-6 d-flex align-items-center">
               <p class="mb-0">© Copyright 2023 <a href="#">Yassine Store</a> . All Rights Reserved
               </p>
            </div>
            <div class="col-md-6 text-right">
               <img class="img-fluid" src="img/payment_methods.png">
            </div>
         </div>
      </div>
   </div>
   <div class="cart-sidebar">
      <div class="cart-sidebar-header">
         <h5>
            My Cart <span class="text-info">(5 item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i
                  class="icofont icofont-close-line"></i>
            </a>
         </h5>
      </div>
      <div class="cart-sidebar-body">
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="img/item/1.jpg" alt="">
            <span class="badge badge-success">50% OFF</span>
            <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del></p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="img/item/2.jpg" alt="">
            <span class="badge badge-danger">55% OFF</span>
            <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$250.00 <del class="small text-secondary">$ 500.00 </del> <span
                  class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small">NEW</span> </p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="img/item/3.jpg" alt="">
            <span class="badge badge-info">NEW</span>
            <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$900.00 <del class="small text-secondary">$ 500.00 </del> <span
                  class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span> </p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="img/item/4.jpg" alt="">
            <span class="badge badge-danger">NEW</span>
            <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del> <span
                  class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span> </p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="img/item/5.jpg" alt="">
            <span class="badge badge-info">NEW</span>
            <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del> <span
                  class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span> </p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
      </div>
      <div class="cart-sidebar-footer">
         <div class="cart-store-details">
            <p>Sub Total <strong class="float-right">$900.69</strong></p>
            <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
            <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
         </div>
         <a href="checkout.html"><button class="btn btn-primary btn-lg btn-block text-left" type="button"><span
                  class="float-left"><i class="icofont icofont-cart"></i> Proceed to Checkout </span><span
                  class="float-right"><strong>$1200.69</strong> <span
                     class="icofont icofont-bubble-right"></span></span></button></a>
      </div>
   </div>
   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- select2 Js -->
   <script src="vendor/select2/js/select2.min.js"></script>
   <!-- Owl Carousel -->
   <script src="vendor/owl-carousel/owl.carousel.js"></script>
   <!-- Slider Js -->
   <script src="vendor/slider/slider.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/custom.js"></script>
   <!-- Footer -->
   <footer class="bg-white border-bottom border-top">
       <?php include ('layout/footer.php'); ?>
   </footer>
   <?php include ('layout/bot-footer.php'); ?>
</body>

</html>
