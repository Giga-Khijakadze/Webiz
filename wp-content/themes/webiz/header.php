<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webiz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="container-fluid header">
        <div class="container-lg header-content d-flex align-items-center">
          <nav
            class="
              col-xl-6 col-lg-7
              nav
              d-flex
              align-items-center
              justify-content-start
            "
          >
            <div class="header-logo">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="header-logo-img" alt="" />
              </a>
            </div>
  
            <ul
              class="
                nav-list
                d-flex
                flex-row
                justify-content-start
                align-items-end
              "
            >
              <li class="nav_list-item">
                <a href="https://localhost/Webiz/">Home</a>
              </li>
              <li class="nav_list-item">
                <a href="https://localhost/Webiz/why-webiz/">Why Webiz</a>
              </li>
              <li class="nav_list-item">
                <a href="#">Webiz Platform</a>
              </li>
              <li class="nav_list-item">
                <a href="https://localhost/Webiz/about-us/">About Us</a>
              </li>
              <li class="nav_list-item">
                <a href="https://localhost/Webiz/clients/">Clients</a>
              </li>
            </ul>
          </nav>
          <div
            class="
              col-xl-6 col-lg-5
              header-buttons
              d-flex
              align-items-center
              justify-content-end
            "
          >
            <div class="buttons-wrapper d-flex align-items-center">
              <input
                type="checkbox"
                label="burger-checkbox"
                class="burger-menu-btn"
              />
              <label for="burger-checkbox"></label>
  
              <div class="burger-menu-container container">
                <div class="burger-menu-links">
                  <a href="#">Home</a>
                  <a href="#">Why Webiz</a>
                  <a href="#">Webiz Platform</a>
                  <a href="#">About us</a>
                  <a href="#">Clients</a>
                </div>
  
                <button class="join-btn-sm">
                  <img class="join-btn-img" src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt="" />
                  Join Webiz Today
                </button>
                <button class="hire-talent-sm">Hire Talent</button>
              </div>
              <div class="talent-btn">
                <a href="#" class="talent-btn-link">
                  <h5 class="talent-btn-text">Hire Talent</h5>
                </a>
              </div>
              <div class="join-btn">
                <a
                  class="
                    join-btn-link
                    d-flex
                    align-items-center
                    justify-content-center
                  "
                  href="#"
                >
                  <img class="join-btn-img" src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt="" />
                  <h5 class="join-btn-text" href="#">Join Webiz Today</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
