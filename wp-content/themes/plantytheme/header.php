<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Raleway:wght@400;700&family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav id="navbar" class="nav">
            <a href="<?= home_url() ?>">
                <img class="logo-header" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-1.jpg" alt="Logo Planty"
                >
            </a>
                <?php
                wp_nav_menu([
                'theme_location' => 'main-menu',
                ])
                ?>
            <a class="nav-hamburger" onclick="myFunction()">&#9776;</a>
        </nav>
    </header>

    <script>
            function myFunction() {
                var x = document.getElementById("navbar");
                if (x.className === "nav") {
                    x.className += " responsive";
                } else {
                    x.className = "nav";
                }
            }
    </script>



    


