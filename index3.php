<?php
    $host = "localhost"; //var host = "localhost";
    $user = "root";
    $password = "";
    $database = "bob_bob";//nom de la base de données
    
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)//lorsqu'il n'y a qu'une seule ligne, les accolades ne sont pas obligatoires
    die("Error 502 - " .mysqli_connect_error());//die("Error 502 - " + mysqli_connect_error());
 
    require_once('includes/header3.html');

?>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full padding-b0">
            <div class="container">
                <div class="row">
                    <!-- Listing Results -->
                    <div class="col-md-9 results-container">
                        <section class="listing-block trending-listing">
                            <div class="listing-header">
                            	<div class="toggle-view pull-right">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default active" id="results-list-view"><i class="fa fa-th-list"></i></a>
                                        <a href="#" class="btn btn-default" id="results-grid-view"><i class="fa fa-th"></i></a>
                                    </div>
                                </div>
                                <h2>Trending Ads</h2>
                            </div>
                            <div class="listing-container">
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
                                        <div class="result-item format-standard">
                                            <div class="result-item-image">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <span class="label label-primary vehicle-age">Brand new</span>
                                                <div class="result-item-view-buttons">
                                                    <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play"></i> View video</a>
                                                    <a href="vehicle-details.html"><i class="fa fa-plus"></i> View details</a>
                                                </div>
                                            </div>
                                            <div class="result-item-in">
                                                <h4 class="result-item-title"><a href="vehicle-details.html">Nissan Micra</a></h4>
                                                <div class="result-item-cont">
                                                    <div class="result-item-block col1">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..</p>
                                                    </div>
                                                    <div class="result-item-block col2">
                                                        <div class="result-item-pricing">
                                                            <div class="price">$28000</div>
                                                        </div>
                                                        <div class="result-item-action-buttons">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Save</a>
                                                            <a href="vehicle-details.html" class="btn btn-default btn-sm">Enquire</a><br>
                                                            <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result-item-features">
                                                    <ul class="inline">
                                                        <li>4 door SUV</li>
                                                        <li>6 cyl, 3.0 L Petrol</li>
                                                        <li>6 speed Automatic</li>
                                                        <li>4x4 Wheel Drive</li>
                                                        <li>Listed by Individual</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Result Item -->
                                        <div class="result-item format-standard">
                                            <div class="result-item-image">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <span class="label label-default vehicle-age">2014</span>
                                                <div class="result-item-view-buttons">
                                                    <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play"></i> View video</a>
                                                    <a href="vehicle-details.html"><i class="fa fa-plus"></i> View details</a>
                                                </div>
                                            </div>
                                            <div class="result-item-in">
                                                <h4 class="result-item-title"><a href="vehicle-details.html">Mazda 2 Sedan</a></h4>
                                                <div class="result-item-cont">
                                                    <div class="result-item-block col1">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..</p>
                                                    </div>
                                                    <div class="result-item-block col2">
                                                        <div class="result-item-pricing">
                                                            <div class="price">$39000</div>
                                                        </div>
                                                        <div class="result-item-action-buttons">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Save</a>
                                                            <a href="vehicle-details.html" class="btn btn-default btn-sm">Enquire</a><br>
                                                            <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result-item-features">
                                                    <ul class="inline">
                                                        <li>4 door Sedan</li>
                                                        <li>6 cyl, 3.0 L Petrol</li>
                                                        <li>6 speed Automatic</li>
                                                        <li>4x4 Wheel Drive</li>
                                                        <li>Listed by Dealer</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Result Item -->
                                        <div class="result-item format-standard">
                                            <div class="result-item-image">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <span class="label label-default vehicle-age">2012</span>
                                                <div class="result-item-view-buttons">
                                                    <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play"></i> View video</a>
                                                    <a href="vehicle-details.html"><i class="fa fa-plus"></i> View details</a>
                                                </div>
                                            </div>
                                            <div class="result-item-in">
                                                <h4 class="result-item-title"><a href="vehicle-details.html">Mercedes Benz SL-300</a></h4>
                                                <div class="result-item-cont">
                                                    <div class="result-item-block col1">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..</p>
                                                    </div>
                                                    <div class="result-item-block col2">
                                                        <div class="result-item-pricing">
                                                            <div class="price">$45000</div>
                                                        </div>
                                                        <div class="result-item-action-buttons">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Save</a>
                                                            <a href="vehicle-details.html" class="btn btn-default btn-sm">Enquire</a><br>
                                                            <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result-item-features">
                                                    <ul class="inline">
                                                        <li>4 door Sedan</li>
                                                        <li>6 cyl, 3.0 L Petrol</li>
                                                        <li>6 speed Automatic</li>
                                                        <li>4x4 Wheel Drive</li>
                                                        <li>Listed by Individual</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           	</div>
                       	</section>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar-widget widget">
                            <h3 class="widgettitle">Latest added</h3>
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel single-carousel" id="vehicle-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="2" data-items-mobile="1">
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Nissan Terrano first hand</a></h5>
                                                    <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                    <a href="results-list.html" title="View all SUVs" class="vehicle-body-type"><img src="images/body-types/suv.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$28000</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Mercedes Benz E Class</a></h5>
                                                    <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                    <a href="results-list.html" title="View all convertibles" class="vehicle-body-type"><img src="images/body-types/convertible.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$76000</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Newly launched Nissan Sunny</a></h5>
                                                    <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                    <a href="results-list.html" title="View all coupes" class="vehicle-body-type"><img src="images/body-types/coupe.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$31999</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="sidebar-widget widget">
                            <h3 class="widgettitle">Recently Sold</h3>
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel single-carousel" id="vehicle-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="2" data-items-mobile="1">
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Mercedes Benz E Class</a></h5>
                                                    <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                    <a href="results-list.html" title="View all convertibles" class="vehicle-body-type"><img src="images/body-types/convertible.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$76000</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Nissan Terrano first hand</a></h5>
                                                    <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                    <a href="results-list.html" title="View all SUVs" class="vehicle-body-type"><img src="images/body-types/suv.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$28000</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="vehicle-block format-standard">
                                                <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                <div class="vehicle-block-content">
                                                    <h5 class="vehicle-title"><a href="vehicle-details.html">Newly launched Nissan Sunny</a></h5>
                                                    <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                    <a href="results-list.html" title="View all coupes" class="vehicle-body-type"><img src="images/body-types/coupe.png" width="30" alt=""></a>
                                                    <span class="vehicle-cost">$31999</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   	</div>
               	</div>
           	</div>
            <div class="spacer-50"></div>
            <div class="lgray-bg padding-tb45">
            	<div class="container">
                    <div class="text-align-center">
                        <h2>Find a plan that’s right for you.</h2>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="pricing-table three-cols margin-0">
                        <div class="pricing-column">
                            <h3>Basic</h3>
                            <div class="pricing-column-content">
                                <h4> <span class="dollar-sign">$</span> 50 </h4>
                                <span class="interval">Until Sold</span>
                                <ul class="features">
                                    <li>This is included</li>
                                    <li>You even get this <a href="#" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus."><i class="fa fa-info-circle"></i></a></li>
                                    <li>Yes, this too! <a href="#" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="<i class='fa fa-binoculars fa-3x text-warning'></i><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus."><i class="fa fa-info-circle"></i></a></li>
                                </ul>
                                <a class="btn btn-primary" href="add-listing-form.html">Create Ad Now</a>
                            </div>
                        </div>
                        <div class="pricing-column highlight accent-color">
                            <h3>Standard<span class="highlight-reason">Most Popular</span></h3>
                            <div class="pricing-column-content">
                                <h4> <span class="dollar-sign">$</span> 99 </h4>
                                <span class="interval">Until Sold</span>
                                <ul class="features">
                                    <li>This is included <a href="#" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="<i class='fa fa-cc-visa fa-3x text-info'></i><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus."><i class="fa fa-info-circle"></i></a></li>
                                    <li>And this too</li>
                                    <li>Maybe even this</li>
                                    <li>Nevermind, it&#8217;s not</li>
                                </ul>
                                <a class="btn btn-info" href="add-listing-form.html">Create Ad Now</a>
                            </div>
                        </div>
                        <div class="pricing-column">
                            <h3>Advanced</h3>
                            <div class="pricing-column-content">
                                <h4> <span class="dollar-sign">$</span> 149 </h4>
                                <span class="interval">Until Sold</span>
                                <ul class="features">
                                    <li>This is included</li>
                                    <li>Even this too</li>
                                    <li>Also included</li>
                                    <li>You even get this</li>
                                </ul>
                                <a class="btn btn-primary" href="add-listing-form.html">Create Ad Now</a>
                            </div>
                        </div>
                    </div>
           			<div class="spacer-30"></div>
                </div>
          	</div>
            <div class="dark-bg parallax parallax1" style="background-image:url(http://placehold.it/1400x500&amp;text=IMAGE+PLACEHOLDER);">
                <div class="overlay-transparent padding-tb125">
                    <div class="container">
                    	<h1 class="uppercase">List your car for selling</h1>
                        <a href="add-listing-form.html" class="btn btn-info btn-lg">Submit Ad Listing</a>
                    </div>
              	</div>
          	</div>
        </div>
   	</div>
    <!-- End Body Content -->
<?php
    require_once('includes/footer3.html');
?>