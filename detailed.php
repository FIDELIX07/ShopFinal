<?php
session_start();
include('config.php');

if(isset($_SESSION['user'])) $account = true;


$pid = $_GET['pid'];


$product = mysqli_query($db,"select * from imhontu_product WHERE product_id = {$pid} ");
while($row = mysqli_fetch_row($product))
{
    $product_name = $row[1];
    $product_desc = $row[2];
    $product_price = $row[3];
    $product_image = $row[4];
}

if(isset($_POST['addcart'])){

    if(isset($_SESSION['user'])){

        if (!in_array($product_name, $_SESSION['items']))
        {
            $_SESSION['items'][] = $product_name;
        }

        echo "<script type='text/javascript'>";
        echo "alert('". $product_name." added to order');";
        echo "</script>";
    }
    else{
        header('location: register.php');
    }




}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="17024616">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- WEBSITE TITLE & DESCRIPTION -->
    <title>Imhontu | Product Details</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- OG META TAGS -->
    <meta property="og:site_name" content="">
    <meta property="og:site" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">

    <!-- FAVICONS & APPLE ICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- STYLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>

<!-- BEGIN PRELOADER -->
<div id="spt_preloader" class="spt_active">
    <span></span>
</div>
<!-- END PRELOADER -->



<!-- BEGIN MOBILE HEADER -->
<div id="spt_mobile_header">
    <div class="spt_logo">
        <a href="home.php">
            <h1>Imhontu</h1>
        </a>
    </div>

    <div class="spt_mobile_header_search_form">
        <i class="spt_mobile_header_search_form_open fa fa-search" aria-hidden="true"></i>
        <form>
            <i class="spt_mobile_header_search_form_close fa fa-caret-up" aria-hidden="true"></i>
            <input placeholder="Search here.." type="text" required="required">
            <input id="spt_search_mobile" value="Send" type="submit">
            <label for="spt_search_mobile">
                <i class="fa fa-search" aria-hidden="true"></i>
            </label>
        </form>
    </div>
</div>
<!-- END MOBILE HEADER -->

<!-- BEGIN MOBILE FOOTER -->
<div id="spt_mobile_footer">
    <ul>

        <li class="spt_mobile_footer_nav">
            <button class="spt_mobile_button_open" type="button">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="spt_mobile_content_open spt_navigation_mobile_content">
                <i class="spt_mobile_button_close fa fa-caret-down" aria-hidden="true"></i>
                <nav>
                    <ul>
                        <li class="spt_active">
                            <a href="home.php">Home</a>

                        </li>
                        <li>
                            <a href="products.php">Product</a>

                        </li>

                        <li>
                            <?php
                            if(@$account) echo '<a href="order.php">My Orders</a>';
                            ?>

                        </li>

                    </ul>
                </nav>
            </div>
        </li>

    </ul>
</div>
<!-- END MOBILE FOOTER -->

<!-- BEGIN HEADER -->
<header>


    <!-- BEGIN NAV BAR -->
    <div class="spt_header_nav_bar">
        <div class="container">
            <div class="col-md-5 col-sm-12">
                <nav class="spt_navigation">
                    <ul>
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li class="spt_active">
                            <a href="products.php">Product</a>

                        </li>
                        <li>
                            <?php
                            if(@$account) echo '<a href="order.php">My Orders</a>';
                            ?>

                        </li>


                    </ul>
                </nav>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="spt_logo">
                    <a href="home.php">
                        <h1>Imhontu</h1>
                        <span>Beauty Beyond perfection</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                &nbsp;
            </div>
        </div>
    </div>
    <!-- END NAV BAR -->

</header>

<!-- BEGIN MAIN CONTENT -->
<div class="spt_main_content">

    <!-- BEGIN BREADCRUMBS -->
    <div class="spt_main_breadcrumbs">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="spt_active">
                        <span><?php echo $product_name ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN SINGLE PRODUCT -->
    <div class="spt_main_single_product">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">

                <!-- BEGIN SINGLE PRODUCT CAROUSEL -->
                <div class="spt_main_single_product_carousel">
                    <div class="swiper-container spt_main_single_product_carousel_image">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo $product_image ?>" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="swiper-container spt_main_single_product_carousel_thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="spt_main_single_product_carousel_thumb">
                                    <img src="<?php echo $product_image ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END SINGLE PRODUCT CAROUSEL -->

                <!-- BEGIN SINGLE PRODUCT ADITIONAL INFO -->
                <div class="spt_main_single_product_aditional_info">

                    <!-- BEGIN ARROWS -->
                    <div class="spt_main_single_product_carousel_nav">
                        <div class="spt_main_single_product_carousel_next">
                            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                        <div class="spt_main_single_product_carousel_prev">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                        </div>
                    </div>
                    <!-- END ARROWS -->

                    <!-- BEGIN REVIEW
                    <div class="spt_main_single_product_review">
                        <div class="spt_main_single_product_rating">
                            <p>Rate the Item:</p>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                     END REVIEW -->

                    <!-- BEGIN WISHLIST
                    <div class="spt_main_single_product_wishlist">
                        <p>Add to Wishlist:</p>
                        <button type="submit">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                    </div>
                     END WISHLIST -->

                </div>
                <!-- END SINGLE PRODUCT ADITIONAL INFO -->

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">

                <!-- BEGIN SINGLE PRODUCT INFO -->
                <div class="spt_main_single_product_info">
                    <div class="spt_main_single_product_title">
                        <h3><?php echo $product_name ?></h3>
                    </div>
                    <div class="spt_main_single_product_top">
                        <div class="spt_main_single_product_price">
                            <h4>Price :</h4>
                            <h3>
                                &#65505
                                <?php echo $product_price ?>
                            </h3>
                        </div>
<!--                        <div class="spt_main_single_product_rating">-->
<!--                            <p>User Reviews:</p>-->
<!--                            <ul>-->
<!--                                <li class="spt_active"></li>-->
<!--                                <li class="spt_active"></li>-->
<!--                                <li class="spt_active"></li>-->
<!--                                <li></li>-->
<!--                                <li></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                    <div class="spt_main_single_product_description">
                        <h4>Item Description</h4>
                        <p><?php echo $product_desc ?></p>

                    </div>
                    <form action="detailed.php?pid=<?php echo $pid ?>" method="post">


                    <div class="row">
                        <div class="spt_main_single_product_bottom">
<!--                            <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                <div class="spt_main_single_product_quantity">-->
<!--                                    <p>Quantity</p>-->
<!--                                    <div>-->
<!--                                        <button class="spt_main_quantity_plus" data-action="spt_main_quantity">-->
<!--                                            <i class="fa fa-minus" aria-hidden="true"></i>-->
<!--                                        </button>-->
<!--                                        <input type="text" name="spt_main_quantity" value="0">-->
<!--                                        <button class="spt_main_quantity_minus" data-action="spt_main_quantity">-->
<!--                                            <i class="fa fa-plus" aria-hidden="true"></i>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                <div class="spt_main_single_product_attribute_size">-->
<!--                                    <p>Size</p>-->
<!--                                    <div class="spt_select spt_select_size">-->
<!--                                        <p>-->
<!--                                            <span data-value="XS">XS</span>-->
<!--                                            <i class="fa fa-angle-down" aria-hidden="true"></i>-->
<!--                                        </p>-->
<!--                                        <ul>-->
<!--                                            <li class="spt_active" data-value="XS">XS</li>-->
<!--                                            <li data-value="S">S</li>-->
<!--                                            <li data-value="M">M</li>-->
<!--                                            <li data-value="L">L</li>-->
<!--                                            <li data-value="XL">XL</li>-->
<!--                                            <li data-value="XXL">XXL</li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4 col-sm-4 col-xs-12">-->
<!--                                <div class="spt_main_single_product_attribute_color">-->
<!--                                    <p>Color</p>-->
<!--                                    <div class="spt_select spt_select_color">-->
<!--                                        <p>-->
<!--                                            <span data-value="#00AEEF"></span>-->
<!--                                            <i class="fa fa-angle-down" aria-hidden="true"></i>-->
<!--                                        </p>-->
<!--                                        <ul>-->
<!--                                            <li class="spt_active" data-value="#00AEEF"></li>-->
<!--                                            <li data-value="#3C763D"></li>-->
<!--                                            <li data-value="#CA4545"></li>-->
<!--                                            <li data-value="#337AB7"></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="spt_main_single_product_add_cart">
                        <button type="submit" name="addcart">Add to cart</button>
                    </div>
                    </form>
<!--                    <div class="spt_main_single_product_share">-->
<!--                        <p>Share the Item:</p>-->
<!--                        <ul>-->
<!--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
                <!-- END SINGLE PRODUCT INFO -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <hr>
            </div>
        </div>
    </div>





</div>
<!-- END MAIN CONTENT -->

<!-- BEGIN FOOTER -->
<footer>

    <!-- BEGIN GO TOP -->
    <div id="spt_go_top">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </div>
    <!-- END GO TOP -->


    <!-- BEGIN FOOTER BOTTOM BAR -->
    <div class="spt_footer_bottom_bar">
        <div class="container">
            <div class="col-md-4 col-sm-12 col-xs-12">

                <!-- BEGIN FOOTER ALLRIGHTS -->
                <div class="spt_footer_allrights">
                    <p>Designed  by <a href="#">17024616</a>. All Rights Reserved.</p>
                </div>
                <!-- END FOOTER ALLRIGHTS -->

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">

                <!-- BEGIN FOOTER SOCIAL -->
                <div class="spt_footer_social">
                    <ul>
                        <li><a href="http://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="http://google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="http://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="http://linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="http://pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
                <!-- END FOOTER SOCIAL -->

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">

                <!-- BEGIN FOOTER PAYCARD -->
                <div class="spt_footer_paycard">
                    <ul>
                        <li><p>We Accept:</p></li>
                        <li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
                        <li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
                        <li><i class="fa fa-cc-discover" aria-hidden="true"></i></li>
                        <li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <!-- END FOOTER PAYCARD -->

            </div>
        </div>
    </div>
    <!-- END FOOTER BOTTOM BAR -->

</footer>
<!-- END FOOTER -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/timer.js"></script>
<script src="js/custom.js"></script>
</html>