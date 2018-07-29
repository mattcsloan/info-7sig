<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <title>
        <?php
            $companyName = get_bloginfo('name');
            $companyTag = get_bloginfo('description');
            $companyInfo = '';
            if($companyName) { $companyInfo .= ' | ' . $companyName; }
            if($companyTag) { $companyInfo .= ' | ' . $companyTag; }
            
            if (is_single() || is_page()) { single_post_title(); }
            elseif (is_search()) { print 'Search results for ' . esc_html($s); get_page_number(); }
            elseif (is_404() ) { print 'Not Found'; }
            else { wp_title(); }
            echo $companyInfo;
        ?> 
    </title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <?php wp_head(); ?>
 
    <link rel="icon" type="image/png" href="<?php  echo get_stylesheet_directory_uri(); ?>/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php  echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" rel="stylesheet">
</head>


<body <?php body_class(); ?>>
    <div class="banner">
      <div class="wrapper">
            <a href="#">7signal.com</a>
      </div>
    </div>
	<div class="header">
    	<div class="wrapper">
            <a class="logo" href="<?php bloginfo( 'url' ) ?>/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
            </a>
            <h2 class="trouble"><?php bloginfo( 'description' ); ?></h2>
        </div>
    </div>