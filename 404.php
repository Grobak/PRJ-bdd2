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
            	<div class="text-align-center error-404">
            		<h1 class="huge">404</h1>
              		<hr class="sm">
              		<p><strong>Sorry - Page Not Found!</strong></p>
					<p>The page you are looking for was moved, removed, renamed<br>or might never existed. You stumbled upon a broken link :(</p>
             	</div>
              	<div class="spacer-30"></div>
            </div>
      	</div>
 	</div>
    <!-- End Body Content -->
<?php
	require_once('includes/footer.html');
?>