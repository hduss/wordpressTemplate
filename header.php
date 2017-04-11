<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--fontawesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- titre-->
	<title><?php echo get_bloginfo(); ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >



</head> 

<body>

<!-- Navigation -->
<nav class="navbar navbar-fixed-top">
    <div class="container">

        <!--navbar brand-->
        <a class="navbar-brand" href="#page-top"><?php echo get_bloginfo(); ?></a>

        <!--bouton toggle -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-responsive">
                <span class="sr-only">Menu</span> Menu <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Menu responsive -->
        <?php
        $opts = array(
            'menu_class' => 'nav navbar-nav navbar-right',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'menu-responsive'
        );
        wp_nav_menu($opts);
        ?>
    </div>
</nav>

<section class="container">

