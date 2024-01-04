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
        <nav class="menu-item">
            <a href="../index.php">
                <img src="assets/images/Logo.png/" alt="Logo Planty"                >
            </a>
            <div>
                <?php
                wp_nav_menu([
                'theme_location' => 'header',
                ])
                ?>
            </div>
        </nav>
    </header>