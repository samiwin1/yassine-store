
<div class="container">
    <a class="navbar-brand" href="index.html">
        <img src="img/yassine_store2logo.png" width="200px" height="50px" alt="gurdeep osahan designer">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto main-nav-left">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icofont-ui-home"></i></a>
            </li>
            <li class="nav-item dropdown mega-drop-main">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       VAPE
                                    </a>
                                    <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                                       <div class="row ml-0 mr-0">
                                          <div class="col-lg-2 col-md-2">
                                             <div class="mega-list">
                                                <a class="mega-title" href="product-grid.html">VAPE</a>
                                                <a href="product-grid.html">PUFF</a>
                                                <a href="product-grid.html">BOXES</a>
                                                <a href="product-grid.html">Elf bar</a>
                                                <a href="product-grid.html">Esco bar</a>
                                                <a href="product-grid.html">KROS Vape</a>
                                                <a href="product-grid.html">ZOVOO</a>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item dropdown mega-drop-main">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       LIQUID</a>
                                    <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                                       <div class="row ml-0 mr-0">
                                          <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                                             <div class="mega-list">
                                                <a class="mega-title" href="product-grid.html">Topwear</a>
                                                <a href="product-grid.html">Naked 100</a>
                                                <a href="product-grid.html"> Vapetasia</a>
                                                <a href="product-grid.html">Finest E-Liquid</a>
                                                <a href="product-grid.html">7 Daze E-Liquid</a>
                                                <a href="product-grid.html">Pod Juice</a>
                                                <a href="product-grid.html">Matter Hatter Juice</a>
                                                <a href="product-grid.html">Twist E-Liquids</a>

                                             </div>
                                          </div>


                                    </div>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="product-grid.html">SALE</a>
                                 </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 top-search">
            <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
            <input class="form-control mr-sm-2" type="search"
                   placeholder="Search for products, brands and more" aria-label="Search">
        </form>
        <ul class="navbar-nav ml-auto profile-nav-right">
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['user_id'])) {
                // User is logged in
                echo '<ul class="navbar-nav ml-auto profile-nav-right">
                        <li class="nav-item dropdown">
                           <a class="nav-link ml-0 dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img alt="Generic placeholder image" src="img/user/1.png" class="nav-osahan-pic rounded-pill"> My Account
                           </a>
                           <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                              <a class="dropdown-item" href="profile.php"><i class="icofont-ui-user"></i> My Profile</a>
                              <a class="dropdown-item" href="profile.html"><i class="icofont-location-pin"></i> My Address</a>
                              <a class="dropdown-item" href="profile.html"><i class="icofont-heart"></i> Wish List</a>
                              <a class="dropdown-item" href="profile.html"><i class="icofont-list"></i> Order List</a>
                              <a class="dropdown-item" href="profile.html"><i class="icofont-file-document"></i> Order Status</a>
                              <a class="dropdown-item" href="../template/php/log-out.php"><i class="icofont-logout"></i> Logout</a>
                           </div>
                        </li>
                        <li class="nav-item cart-nav">
                           <a data-toggle="offcanvas" class="nav-link" href="#">
                           <i class="icofont-basket"></i> Cart
                           <span class="badge badge-danger">5</span>
                           </a>
                        </li>
                     </ul>
                  ';
            } else {
                echo '<li class="nav-item">
                <a href="#" data-target="#login" data-toggle="modal" class="nav-link ml-0">
                    <i class="icofont-ui-user"></i> Login/Sign Up
                </a>
            </li>
            <li class="nav-item cart-nav">
                <a data-toggle="offcanvas" class="nav-link" href="#">
                    <i class="icofont-basket"></i> Cart
                    <span class="badge badge-danger">5</span>
                </a>
            </li>';
            }
            ?>

        </ul>
    </div>
</div>
