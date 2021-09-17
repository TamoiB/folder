<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/70856632d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <nav class="navbar unselectable">
        <a href="index.php" class="brand">Codes By Shadaine</a>
        <ul class="nav-list-lg">
            <li><a class="list-items" href="mini.php">Mini Projects</a></li>
            <!-- <li><a class="list-items disable" title="Coming Soon">Website Projects</a></li> -->
            <li><a class="list-items" href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <nav class="navbar-mobile" id="nav">
        <div class="mobile-toggle">
            <a href="index.php" class="brand">Codes by Shadaine</a>
            <i class="fas fa-bars" id="toggleBtn"></i>
        </div>
        <ul class="nav-list-sm unselectable" id="toggleList">
            <p class="close-nav" id="closeNav">&times;</p>
            <!-- <li class="list-items"><a href="web.php">Website Projects</a></li> -->
            <li class="list-items"><a href="mini.php">Mini App Projects</a></li>
            <li class="list-items"><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="showcase unselectable">
        <div class="showcase-content">
            <h1 class="showcase-title"><?php echo $showcase_title ?></h1>
            <p class="lead">My Journey to success</p>
        </div>
        <img src="<?php if (!empty($showcase_img)) { echo $showcase_img;} else { echo '';}?>" alt=""
            class="showcase-img">
    </div>
    <section class="aside unselectable">
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-codepen"></i></a>
    </section>