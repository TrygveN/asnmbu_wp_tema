<!DOCTYPE html>
<?php include_once("wp-includes/general-template.php");?>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">
<a href="https://asnmbu.oj-oj.net/"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/cropped-logo_NMBU_remake_512.png"></a>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
</header>
<div id="container">
<main id="content" role="main">