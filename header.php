<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofie Abildgaard Pedersen</title>
    <link type="text/css" href="<?php echo get_template_directory_uri()?>/style.css" rel="stylesheet">
</head>
<body>
    <header class="bb-wp-header">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'main_menu'
            ));
        ?>
    </header>