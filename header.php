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
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<header class="header">
  <div class="row header-menu-container between-sm between-md middle-sm middle-md">
    <a href='/' class="logo-container">
      <div>ARCADEMIA</div>
      <div class="sub">GROUP INC.</div>
    </a>
    <?php wp_nav_menu();?>
  </div>
</header>