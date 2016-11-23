<?php 
	$host = "localhost"; //var host = "localhost";
	$user = "root";
	$password = "";
	$database = "bob_bob";//nom de la base de données
	
	$conn = mysqli_connect($host, $user, $password, $database);

	if(!$conn)//lorsqu'il n'y a qu'une seule ligne, les accolades ne sont pas obligatoires
	die("Error 502 - " .mysqli_connect_error());//die("Error 502 - " + mysqli_connect_error());

require_once('includes/header.html');
?>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
      		<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<h1 class="uppercase strong">Who we are and<br>what we do</h1>
                        <p class="lead">AutoStars is the world's leading portal for<br>easy and quick <span class="accent-color">car buying and selling</span></p>
                    </div>
                    <div class="col-md-6">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, <span class="accent-color">consectetur adipiscing</span> elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
                <hr class="fw">
                <div class="text-align-center"><h2 class="uppercase">Our Team</h2></div>
                <div class="spacer-20"></div>
            	<div class="row">
                <ul class="sort-destination gallery-grid" data-sort-id="gallery">
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Philip Freeman</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Heather Ford</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Amy Willis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
        	</div>
      	</div>
 	</div>
    <!-- End Body Content -->
<?php
	require_once('includes/footer.html');
?>  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
</div>
<!-- LOGIN POPUP -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login to your account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
           	</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="vendor/password-checker.js"></script> <!-- Password Checker -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
</body>
</html>