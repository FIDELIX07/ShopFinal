<?php
session_start();

if(count($_SESSION['items']) <= 0){
    $_SESSION['items'] = array();
}

include('config.php');

if(isset($_SESSION['user'])) $account = true;


$site_description = mysqli_query($db,"select * from imhontu_home ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="author" content="17024616">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

        <!-- WEBSITE TITLE & DESCRIPTION -->
        <title>Imhontu</title>
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
        <!-- END HEADER -->

        <!-- BEGIN MAIN CONTENT -->
        <div class="spt_main_content">

            <!-- BEGIN SLIDER -->
            <div class="spt_main_slider spt_home_2">
                <div id="spt_main_slider" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="col-md-12">
                                    <h1>
                                        <span>Life's</span>
                                        too short
                                    </h1>
                                    <p>to wear boring clothes</p>
                                    <a class="spt_button_medium_reverse" href="products.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="col-md-12">
                                    <h1>
                                        Fashions <span>fades</span>


                                    </h1>
                                    <p>Imhontu is eternal</p>
                                    <a class="spt_button_medium_reverse" href="products.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="col-md-12">
                                    <h1>
                                        When in<span> doubt</span>

                                    </h1>
                                    <p>wear Imhontu.</p>
                                    <a class="spt_button_medium_reverse" href="products.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BEGIN PAGINATION -->
                    <div class="spt_main_pagination"></div>
                    <!-- END ARROWS -->

                    <!-- BEGIN ARROWS -->
                    <div class="spt_main_buttons">
                        <div class="spt_main_buttons_prev">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
                            <p>prev</p>
                        </div>
                        <div class="spt_main_buttons_next">
                            <p>next</p>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <!-- END ARROWS -->

                </div>   
            </div>
            <!-- END SLIDER -->

            <!-- BEGIN CATEGORIES -->
            <div class="spt_main_categories">
                <div class="container">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="spt_main_category">
                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12 spt_main_category_details">
                                    <h3>About Imhontu</h3>
                                    <p>
                                        <?php
                                        while ($row = mysqli_fetch_row($site_description))
                                        {
                                            echo $row[2];
                                        }
                                        ?>
                                    </p>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- BEGIN CATEGORIES -->



        </div>
        <!-- END MAIN CONTENT -->

        <!-- BEGIN FOOTER -->
        <footer>

            <!-- BEGIN GO TOP
            <div id="spt_go_top">
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
            </div>
             END GO TOP -->


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

    </body>

</html>