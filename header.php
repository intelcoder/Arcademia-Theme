<?php
/**
 * Created by PhpStorm.
 * User: seong
 * Date: 2018-08-08
 * Time: 오후 9:05
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<header class="header">
  <div class="row header-inner-container between-sm between-md middle-sm middle-md">
    <a href='/' class="logo-container">
      <div>ARCADEMIA</div>
      <div class="sub">GROUP INC.</div>
    </a>
    <div class="hamburger-container">
      <div class="large-screen-menu">
        <?php wp_nav_menu();?>
      </div>
      <div class="small-screen-menu">
        <button id="hamburger" class="hamburger hamburger--elastic" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
       </button>
      </div>
    </div>
    <div id="mobile-menu-container" class="small-screen-menu">
      <div class="mobile-menu">
        <?php wp_nav_menu();?>
      </div>
      <div class="mobile-menu-footer">
        <?php include(locate_template('template-parts/address.php')); ?>
      </div>
         
  
    </div>
  </div>
</header>