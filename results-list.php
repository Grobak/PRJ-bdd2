<?php 
	$host = "localhost"; 
	$user = "root";
	$password = "root";
	$database = "bdd-prj2";
	
	$conn = mysqli_connect($host, $user, $password, $database);

	if(!$conn)
		die("Error 502 - " .mysqli_connect_error());

    if(isset($_GET['categ']) && $_GET['categ'] != 'all'){
        $sql .= "
            WHERE
                categorie = '".$_GET['categ']."'";
    }else if((isset($_GET['categ']) && $_GET['categ'] == 'all') || !isset($_GET['categ'])) {
        $sql = "SELECT * FROM select_all_car";
    }else if(isset($_GET['available']) && $_GET['available'] == 'now'){
        $sql = "SELECT * FROM select_available_car_now";
    }
		
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

	require_once('includes/header.php');
?>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
        	<div class="container">
            	<div class="row">
                    <!-- Search Filters -->
                    <div class="col-md-3 search-filters" id="Search-Filters">
                    	<div class="tbsticky filters-sidebar">
                            <h3>Refine Search</h3>
                            <div class="accordion" id="toggleArea">
                                <!-- Filter by Year -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Year<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseOne" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
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
                                                <div class="form-group last-child">
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
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Make -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Make<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Bentley</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Nissan</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">Mercedes</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">Ford</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Honda</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Mazda</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Toyota</a></li>
                                                <li class="list-group-item"><span class="badge">45</span><a href="#">BMW</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Model -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">Model <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseThird" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Alpina</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">M3</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">M5</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">M6</a></li>
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">X1</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">X3</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">X5</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Z3</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Z4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Body Type -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFour">Body type <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFour" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Wagon</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Minivan</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">SUV</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">Coupe</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Convertible</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Crossover</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Sedan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Mileage -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive">Mileage <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFive" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
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
                                                <div class="form-group last-child">
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
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Transmission -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSix">Transmission <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">5 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">5 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">6 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">6 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">7 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">7 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">8 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">8 speed automatic</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Fuel Economy -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSeven">Fuel economy <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSeven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">5L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">7L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">9L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">11L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">11L/100Km or less</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Price -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Price <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
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
                                                <div class="form-group last-child">
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
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Location -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseNine">Location <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseNine" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">New York</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Queensland</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">California</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">South Wales</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Tasmania</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Color -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTen">Color <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group color-options">
                                                <li class="list-group-item"><span class="badge car-color-white"></span><a href="#">White</a></li>
                                                <li class="list-group-item"><span class="badge car-color-black"></span><a href="#">Black</a></li>
                                                <li class="list-group-item"><span class="badge car-color-red"></span><a href="#">Red</a></li>
                                                <li class="list-group-item"><span class="badge car-color-yellow"></span><a href="#">Yellow</a></li>
                                                <li class="list-group-item"><span class="badge car-color-brown"></span><a href="#">Brown</a></li>
                                                <li class="list-group-item"><span class="badge car-color-grey"></span><a href="#">Grey</a></li>
                                                <li class="list-group-item"><span class="badge car-color-silver"></span><a href="#">Silver</a></li>
                                                <li class="list-group-item"><span class="badge car-color-gold"></span><a href="#">Gold</a></li>
                                                <li class="list-group-item"><span class="badge car-color-blue"></span><a href="#">Blue</a></li>
                                                <li class="list-group-item"><span class="badge car-color-green"></span><a href="#">Green</a></li>
                                                <li class="list-group-item"><span class="badge car-color-orange"></span><a href="#">Orange</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Toggle -->
                            <a href="#" class="btn-default btn-sm btn"><i class="fa fa-refresh"></i> Reset search</a>
                            <a href="#" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Save search</a>
                        </div>
                    </div>
                    
                    <!-- Listing Results -->
                    <div class="col-md-9 results-container">
                        <div class="results-container-in">
                        	<div class="waiting" style="display:none;">
                            	<div class="spinner">
                                  	<div class="rect1"></div>
                                  	<div class="rect2"></div>
                                  	<div class="rect3"></div>
                                  	<div class="rect4"></div>
                                  	<div class="rect5"></div>
                                </div>
                            </div>
                        	<div id="results-holder" class="results-list-view">
                            	<!-- Result Item -->
                                	
                                    <?php
                                    /*
                                        $row['immatriculation'], $row['annee'], $row['dateAchat'], 
                                        $row['killometrage'], $row['comsommation'], $row['carburant'], 
                                        $row['nbPortes'], $row['nbPlaces'], $row['modele'],
                                        $row['marque'], $row['categorie'], $row['agence'],
                                        $row['adresse'], $row['tarif']
                                    */
                                        for($i = 0 ; $i < sizeof($vehicule) ; $i++) { ?>
                                            <div class="result-item format-standard">
                                            <div class="result-item-image">
                                                <a href="vehicle-details.php?vehicule=<?php echo $vehicule[$i][0]; ?>" class="media-box">
                                                    <img src="images/<?php echo $vehicule[$i][7]; ?>/img<?php echo $vehicule[$i][7]; ?>.jpg" alt="">
                                                </a>
                                                <span class="label label-default vehicle-age"><?php echo $vehicule[$i][1]; ?></span>
                                                <span class="label label-success premium-listing">Premium Listing</span>
                                                <div class="result-item-view-buttons">
                                                    <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play"></i> View video</a>
                                                    <a href="vehicle-details.php?vehicule=<?php echo $vehicule[$i][0]; ?>"><i class="fa fa-plus"></i> View details</a>
                                                </div>
                                            </div>
                                            <div class="result-item-in">
                                                <h4 class="result-item-title">
                                                    <a href="vehicle-details.php?vehicule=<?php echo $vehicule[$i][0]; ?>">
                                                        <?php echo $vehicule[$i][9].' '.$vehicule[$i][8]; ?>
                                                    </a>
                                                </h4>
                                                <div class="result-item-cont">
                                                    <div class="result-item-block col1">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..
                                                        </p>
                                                    </div>
                                                    <div class="result-item-block col2">
                                                        <div class="result-item-pricing">
                                                            <div class="price"><?php echo $vehicule[$i][13]; ?>$ /day</div>
                                                        </div>
                                                        <div class="result-item-action-buttons">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Save</a>
                                                            <a href="vehicle-details.php?enquire=<?php echo $vehicule[$i][0]; ?>" class="btn btn-default btn-sm">Enquire</a><br>
                                                            <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result-item-features">
                                                    <ul class="inline">
                                                        <li><?php echo $vehicule[$i][6]; ?> door SUV</li>
                                                        <li><?php echo $vehicule[$i][4].' '.$vehicule[$i][5]  ?></li>
                                                    <?php   
                                                        $categ = explode(",", $vehicule[$i][10]);
                                                        foreach ($categ as $k => $v) {
                                                            echo "<li>".$v."</li>"; 
                                                        }
                                                    ?>
                                                    </ul>
                                                </div> 
                                            </div>
                                        </div>
                                    <?php
                                        }                                      
                                    ?>
                            </div>
                        </div>
                    </div>
               	</div>
            </div>
        </div>
   	</div>
    <!-- End Body Content -->
<?php
	require_once('includes/footer.html');
?>
