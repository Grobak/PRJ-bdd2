<?php

    $host = "localhost"; 
    $user = "root";
    $password = "root";
    $database = "bdd-prj2";
    
    $conn = mysqli_connect($host, $user, $password, $database);

    if(!$conn)
        die("Error 502 - " .mysqli_connect_error());

    $sql = "SELECT * FROM ";
    if(isset($_GET['categ']) && $_GET['categ'] != 'all'){
        $sql .= "select_all_car WHERE categorie LIKE '%".$_GET['categ']."%'";
    }else if((isset($_GET['categ']) && $_GET['categ'] == 'all') || !isset($_GET['categ'])) {
        $sql .= "select_all_car";
    }else if(isset($_GET['available']) && $_GET['available'] == 'now'){
        $sql .= "select_available_car_now";
    }else{
        $sql = '';
    }

    $vehicule = array();
        
    if($sql != ''){
        $reponse = mysqli_query($conn, $sql);
    
        $vehicule = array();
        
        $i = 0 ;
        
        if(mysqli_num_rows($reponse) > 0 ){
            while($row = mysqli_fetch_assoc($reponse)){
                $vehicule[] = array(
                                    $row['immatriculation'], $row['annee'], $row['dateAchat'], 
                                    $row['killometrage'], $row['comsommation'], $row['carburant'], 
                                    $row['nbPortes'], $row['nbPlaces'], $row['modele'],
                                    $row['marque'], $row['categorie'], $row['agence'],
                                    $row['adresse'], $row['tarif']
                                );
            }
        }
    }else{
        $vehicule = "Aucun véhicule n'a été trouvé avec les critères de recherche.";
    }

?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AutoStars - Responsive Car Dealership Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Start Site Header -->
	<div class="site-header-wrapper">
        <header class="site-header">
            <div class="container sp-cont">
                <div class="site-logo">
                    <h1><a href="index2.php"><img src="images/logo.png" alt="Logo"></a></h1>
                    <span class="site-tagline">Buying or Selling,<br>just got easier!</span>
                </div>
                <div class="header-right">
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">
                            <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="">
                            <span class="user-informa">
                                <span class="meta-data">Welcome</span>
                                <span class="user-name">Username dss</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="user-dashboard.php">Dashboard</a></li>
                            <li><a href="user-dashboard-saved-searches.php">Saved Searches</a></li>
                            <li><a href="user-dashboard-saved-cars.php">Saved Cars</a></li>
                            <li><a href="user-dashboard-manage-ads.php">Manage Ads</a></li>
                            <li><a href="user-dashboard-profile.php">My Profile</a></li>
                            <li><a href="user-dashboard-settings.php">Settings</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            <li><a href="results-list.php">Buy</a></li>
                            <li><a href="add-listing-pricing.php">Sell</a></li>
                            <li><a href="joinus.php">Join</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span><i class="fa fa-phone"></i> Call us <strong>1800 011 2211</strong> <em>or</em> search</span>
                </div>
                    <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="javascript:void(0)">Home</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)">Home versions</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Default</a></li>
                                        <li><a href="index2.php">Version 2</a></li>
                                        <li><a href="index3.php">Version 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Slider versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index2.php">Default(Flexslider)</a></li>
                                		<li><a href="index-revslider.php">Slider Revolution <span class="label label-danger">New</span></a></li>
                                        <li><a href="hero-carousel.php">Full Width Carousel</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Search Form Positions</a>
                            		<ul class="dropdown">
                                		<li><a href="index2.php">Default(With Main Menu)</a></li>
                                        <li><a href="search-below-slider.php">Below Slider</a></li>
                                        <li><a href="search-over-slider.php">Over Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Header versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index2.php">Default</a>
                                        <li><a href="header-v2.php">Version 2</a></li>
                                        <li><a href="header-v3.php">Version 3</a></li>
                                        <li><a href="header-v4.php">Version 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="joinus.php">Signup</a></li>
                                <li><a href="404.php">404 Error Page</a></li>
                                <li><a href="add-listing-pricing.php">Pricing</a></li>
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="dealers-search.php">Dealer Search</a></li>
                                <li><a href="dealers-search-results.php">Dealer Search Results</a></li>
                            </ul>
                        </li>
                        <li class="megamenu"><a href="index2.php">Mega Menu</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="results-list.php">Brand new cars</a></li>
                                                    <li><a href="results-list.php">Used cars</a></li>
                                                    <li><a href="results-list.php">Latest reviews</a></li>
                                                    <li><a href="blog.php">Auto news</a></li>
                                                    <li><a href="about.php">Car insurance</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by body type</span>
                                                <ul class="body-type-widget">
                                                    <li> <a href="results-list.php"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                                                </ul>
                                                <a href="results-list.php" class="basic-link">view all</a>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by make</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                </ul>
                                                <a href="results-list.php" class="basic-link">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Listing</a>
                            <ul class="dropdown">
                                <li><a href="results-list.php">List View</a></li>
                                <li><a href="results-grid.php">Grid View</a></li>
                                <li><a href="vehicle-details.php">Vehicle Details</a></li>
                                <li><a href="add-listing-form.php">Add new listing</a></li>
                                <li><a href="vehicle-comparision.php">Vehicle Comparision</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Users</a>
                            <ul class="dropdown">
                                <li><a href="dealer-prosite.php">Dealer Prosite</a></li>
                                <li><a href="user-dashboard.php">User Dashboard</a></li>
                                <li><a href="user-dashboard-saved-searches.php">Manage Saved Searches</a></li>
                                <li><a href="user-dashboard-saved-cars.php">Manage Saved Cars</a></li>
                                <li><a href="user-dashboard-manage-ads.php">Manage Ads</a></li>
                                <li><a href="user-dashboard-profile.php">User Profile</a></li>
                                <li><a href="user-dashboard-settings.php">User Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Gallery</a>
                            <ul class="dropdown">
                                <li><a href="gallery-2cols.php">Gallery 2 Columns</a></li>
                                <li><a href="gallery-3cols.php">Gallery 3 Columns</a></li>
                                <li><a href="gallery-4cols.php">Gallery 4 Columns</a></li>
                                <li><a href="gallery-2cols-details.php">Gallery 2 Columns with Details</a></li>
                                <li><a href="gallery-3cols-details.php">Gallery 3 Columns with Details</a></li>
                                <li><a href="gallery-4cols-details.php">Gallery 4 Columns with Details</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.php">Blog List</a></li>
                                <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                <li><a href="single-post.php">Single Post</a></li>
                                <li><a href="single-post-review.php">Single Review Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav> 
                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form>
                            <h3>Find a Car with our Quick Search</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Type</label>
                                            <select name="Body Type" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Wagon</option>
                                                <option>Minivan</option>
                                                <option>Coupe</option>
                                                <option>Crossover</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>Minicar</option>
                                                <option>Sedan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Make</label>
                                            <select name="Make" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Jaguar</option>
                                                <option>BMW</option>
                                                <option>Mercedes</option>
                                                <option>Porsche</option>
                                                <option>Nissan</option>
                                                <option>Mazda</option>
                                                <option>Acura</option>
                                                <option>Audi</option>
                                                <option>Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Model</label>
                                            <select name="Model" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>GTX</option>
                                                <option>GTR</option>
                                                <option>GTS</option>
                                                <option>RLX</option>
                                                <option>M6</option>
                                                <option>S Class</option>
                                                <option>C Class</option>
                                                <option>B Class</option>
                                                <option>A Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Price Min</label>
                                            <select name="Min Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price Max</label>
                                            <select name="Max Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Brand new only
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Certified
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Year</label>
                                            <select name="Min Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Year</label>
                                            <select name="Max Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Mileage</label>
                                            <select name="Min Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Mileage</label>
                                            <select name="Max Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Transmission</label>
                                            <select name="Transmission" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>5 Speed Manual</option>
                                                <option>5 Speed Automatic</option>
                                                <option>6 Speed Manual</option>
                                                <option>6 Speed Automatic</option>
                                                <option>7 Speed Manual</option>
                                                <option>7 Speed Automatic</option>
                                                <option>8 Speed Manual</option>
                                                <option>8 Speed Automatic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Color</label>
                                            <select name="Body Color" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Red</option>
                                                <option>Black</option>
                                                <option>White</option>
                                                <option>Yellow</option>
                                                <option>Brown</option>
                                                <option>Grey</option>
                                                <option>Silver</option>
                                                <option>Gold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-block btn-info btn-lg" value="Find my vehicle now">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   	</div>
    <div class="hero-area">
        <!-- Start Hero Slider -->
        <div class="hero-slider heroflex flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-speed="7000" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image:url(http://placehold.it/1400x500&amp;text=IMAGE+PLACEHOLDER);"></li>
                <li class="parallax" style="background-image:url(http://placehold.it/1400x500&amp;text=IMAGE+PLACEHOLDER);"></li>
            </ul>
        </div>
        <!-- End Hero Slider -->
    </div>
    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-8">
                	<div class="toggle-make">
                		<a href="#"><i class="fa fa-navicon"></i></a>
                    	<span>Browse by body style</span>
                    </div>
                </div>
            	<div class="col-md-8 col-sm-6 col-xs-4">
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    	<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
          	</div>
      	</div>
    	<div class="by-type-options">
    		<div class="container">
               	<div class="row">
                  	<ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                    	<li class="item"> <a href="results-grid.php?categ=wagon"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=minivan"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=coupe"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=convertible"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=crossover"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=suv"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=minicar"><img src="images/body-types/minicar.png" alt=""> <span>Minicar</span></a></li>
                    	<li class="item"> <a href="results-grid.php?categ=sedan"><img src="images/body-types/sedan.png" alt=""> <span>Sedan</span></a></li>
                  	</ul>
               	</div>
            </div>
        </div>
    </div>