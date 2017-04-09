<?php

    // Get language by host
    $lang = strpos($_SERVER['HTTP_HOST'], 'jurgentreep.nl') !== false ? 'nl' : 'en';

    // Get language by $_GET
    // $_GET will override domain laguage
    $possible_languages = ['nl', 'en', 'ru'];

    if(isset($_GET['lang']) && in_array($_GET['lang'], $possible_languages)) {
        $lang = $_GET['lang'];
    }

    // Website description
    switch ($lang) {
        case 'nl':
            $meta_description = 'Hallo, mijn naam is Jurgen Treep en ik ben dol op het bouwen van moderne websites';
            break;
        case 'ru':
            $meta_description = 'Здравствуйте，меня зовут Юрген Трип и я люблю делать передовые сайты';
            break;

        default:
            $meta_description = 'Hello, my name is Jurgen Treep and I love to build cutting edge websites';
            break;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#FFE6CF">
        <meta name="description" content="<?php echo $meta_description; ?>">
        <link rel="alternate" href="?lang=nl" hreflang="nl">
        <link rel="alternate" href="?lang=en" hreflang="en">
        <link rel="alternate" href="?lang=ru" hreflang="ru">
        <link rel="icon" sizes="256x256" href="/img/favicon.png">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <meta property="og:title" content="Jurgen Treep">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['SERVER_NAME'] . "/img/favicon.png" ?>">
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['SERVER_NAME'] . "/img/favicon.png" ?>">
        <meta property="og:description" content="<?php echo $meta_description ?>">
        <title>Jurgen Treep</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Mono&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/master.css" media="screen" title="master" charset="utf-8">
    </head>
    <body>
        <div class="language-links">
            <img src="img/language.svg">
            <a href="?lang=nl">Nederlands</a>
            <a href="?lang=en">English</a>
            <a href="?lang=ru">Русский язык</a>
        </div>

        <div class="container">
            <?php include 'lang/' . $lang . '.php'; ?>
        </div>

        <?php
            if (file_exists('analytics.php')) {
                include 'analytics.php';
            }
         ?>
         
        <script src="js/master.js"></script>
    </body>
</html>
