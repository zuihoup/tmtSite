 <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost/tmt/">
            <img src="http://localhost/tmt/wp-content/uploads/2020/08/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For beginner
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/tmt/area-marketing/">Area mktg.</a>
                        <a class="dropdown-item" href="http://localhost/tmt/t-a-analysis/">T.A analysis</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Service
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/tmt/tmt/">TMT</a>
                        <a class="dropdown-item" href="http://localhost/tmt/development/">Development</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/tmt/about/">Profile</a>
                        <a class="dropdown-item" href="http://localhost/tmt/about/#Philosophy">Philosophy</a>
                        <a class="dropdown-item" href="http://localhost/tmt/about/#ceoMsg">CEO msg.</a>
                        <a class="dropdown-item" href="http://localhost/tmt/about/">History</a>
                        <a class="dropdown-item" href="http://localhost/tmt/about/">Access</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Careers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">DNA</a>
                        <a class="dropdown-item" href="#">Opening</a>
                        <a class="dropdown-item" href="#">Entry</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/tmt/contact/">Contact</a>
                </li>


            </ul>
            <!--lang-->
                   
        </div>
         <ul class="navbar-nav mr-auto" style="float:right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="#th" data-reload>
                                <img src="http://localhost/tmt/wp-content/uploads/2020/08/thailand.png">
                            </a>
                            <a href="#eng" data-reload>
                                <img src="http://localhost/tmt/wp-content/uploads/2020/08/uk.png">
                            </a>
                            <a href="#jp" data-reload>
                                 <img src="http://localhost/tmt/wp-content/uploads/2020/08/japan.png">
                            </a>
                        </div>
                    </li>
         </ul>
    </nav>
     <!--banner-->
    <div class="banner">
        <img src="https://www.terramap-asia.com/thai-product/wp-content/themes/terramap/images/map_20190208.jpg" >
    </div>
    
