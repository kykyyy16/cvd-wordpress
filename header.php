<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Visual Design - Contact</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- <script src="https://kit.fontawesome.com/e7d7cdc4a0.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head() ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_wrapper">
                <div class="branding">
                    <img src="./img/home/Brand.png" alt="">
                    <h3>Creative <span>Visual</span> Design</h3>
                </div>
                <div class="header_nav">
                    <!-- <ul>
                        <li class="active"><a href="./home.html">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./services.html">Services</a></li>
                        <li><a href="./updates.html">Updates</a></li>
                        <li><a href="">Contact</a></li>
                    </ul> -->
                    <?php wp_menu_li() ?>
                </div>
                <div class="toggle_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>