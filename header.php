<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- social icons -->
    <script src="https://kit.fontawesome.com/3e348fcf98.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://use.typekit.net/gdr1mmk.css"> -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>

</head>

<!-- <div class="horizontally">
<a href="" class="openlink">✷✷✷ @Disturbance #5 22-23rd June 2024 ✷✷✷ </a>
    </div> -->


<header class="header">
    <button class="menu_btn" id="menuBtn" onclick="toggleMenu()">///MENU</button>
</header>

<div class="sidenav" id="mainMenu">
    <button class="closebtn" onclick="toggleMenu()">&times;</button>

    <nav id="headerMenu"> <?php
                            wp_nav_menu(array(
                                'menu' => 'Primary Menu',
                                'menu_class'     => 'main_menu', //css class of the menu
                                'container'      => false,
                            ));
                            ?>
    </nav>
</div>

<div id="cursor"></div>


<script>
    isMenuOpen = false;

    var menuContainer = document.getElementById("mainMenu");


    function toggleMenu() {

        if (isMenuOpen === false) {
            menuContainer.style.left = "0%";
            document.getElementById("menuBtn").style.visibility = "hidden";
            isMenuOpen = true;

        } else {
            menuContainer.style.left = "-100%";
            document.getElementById("menuBtn").style.visibility = "visible";

            isMenuOpen = false;

        }

    }

    /*   var isAccessOn = false;
       var accessOverlay = document.getElementById("accessOverlay");


       function toggleAccessibility() {
           if (isAccessOn === true) {
               accessOverlay.style.display = "none";

               isAccessOn = false;
           } else {
               accessOverlay.style.display = "block";
               isAccessOn = true;
           }
       } */

    var cursor = document.getElementById('cursor');
    document.addEventListener('mousemove', function(e) {
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
    });
</script>

<style>
#cursor {
    position: fixed;
    width: 100px;
    height: 100px;
    transition: 0.5s;
    transform: translate(-50%, -10%);
    background: url('<?php echo get_template_directory_uri(); ?>/assets/img/disturbancelogo.png') 80% 0 no-repeat;
    background-size: 80%;
    z-index: -1;
        
}</style>

<?php if (is_front_page()) : ?>
    <body class="black_bkgrnd">

<?php else : ?>

    <body class="gradient_bkgrnd">

<?php endif;?>
    <?php wp_body_open(); ?>