<?php if (is_front_page()) : ?>
    <footer class="footer fixed_btm">
    <nav id="notVisible"> <?php
                wp_nav_menu(array(
                    'menu' => 'Footer Menu',
                    'menu_class'     => 'footer_menu', //css class of the menu
                    'container'      => false,
                ));
                ?>
        </nav>
    <?php else : ?>
        <footer class="footer black_bkgrnd top_border">
        <nav> <?php
                wp_nav_menu(array(
                    'menu' => 'Footer Menu',
                    'menu_class'     => 'footer_menu', //css class of the menu
                    'container'      => false,
                ));
                ?>
        </nav>

        <?php endif; ?>
       


        <!-- social media icon setup -->
        <?php
        echo '<div class="socials_container">';

        $social_sites = array(
            'youtube' => 'Youtube',
            'instagram' => 'Instagram',

        );

        foreach ($social_sites as $key => $label) {
            $link = get_theme_mod($key . '_link');

            if ($link) {
                echo '<div class="social-icon ' . $key . '"><a href="' . esc_url($link) . '" target="_blank" aria-label="Link to ' . $key . '"><i class="fa fa-' . $key . '"></i></a></div>';
            }
        }

        echo '</div>'; ?>
        </div>
        </footer>

        <script>
            // ACCESSIBILITY

            // Reading Mask

            // const dpkCursor = document.createElement("div");
            // dpkCursor.classList.add("dpkCursor");
            // dpkCursor.id = "readingmaskEl";
            // document.body.appendChild(dpkCursor);

            // const readingmaskTop = document.createElement("div");
            // readingmaskTop.classList.add("readingmaskTop");
            // document.getElementById("readingmaskEl").appendChild(readingmaskTop);

            // const readingmaskBottom = document.createElement("div");
            // readingmaskBottom.classList.add("readingmaskBottom");
            // document.getElementById("readingmaskEl").appendChild(readingmaskBottom);

            // // content options
            // var blackcursor = localStorage.getItem('blackCursor');
            // var whitecursor = localStorage.getItem('whiteCursor');
            // var readingmask = localStorage.getItem('readingMask');
            // var hideimages = localStorage.getItem('hideImages');

            // // text options
            // var letterspacing = localStorage.getItem('letterSpacing');
            // var fontsize = localStorage.getItem('fontSize');
            // var lineheight = localStorage.getItem('lineHeight');
            // var title_highlight = localStorage.getItem('titleHighlight');
            // var link_highlight = localStorage.getItem('linkHighlight');


            // // color options 
            // var softcontrast = localStorage.getItem('softContrast');
            // var highcontrast = localStorage.getItem('highContrast');
            // var monochrome = localStorage.getItem('monoChrome');

            // // FUNCTIONS: content options

            // function blackCursor() {

            //     if (blackcursor === "true") {
            //         localStorage.setItem("blackCursor", "false");
            //         localStorage.setItem("whiteCursor", "false");

            //     } else {
            //         localStorage.setItem("blackCursor", "true");
            //         localStorage.setItem("whiteCursor", "false");

            //     }
            //     accessibility();

            // }

            // function whiteCursor() {

            //     if (whitecursor === "true") {
            //         localStorage.setItem("whiteCursor", "false");
            //         localStorage.setItem("blackCursor", "false");

            //     } else {
            //         localStorage.setItem("whiteCursor", "true");
            //         localStorage.setItem("blackCursor", "false");

            //     }
            //     accessibility();


            // }

            // function readingMask() {

            //     if (readingmask === "true") {
            //         localStorage.setItem("readingMask", "false");

            //     } else {
            //         localStorage.setItem("readingMask", "true");

            //     }
            //     accessibility();

            // }

            // function hideImages() {
            //     if (hideimages === "true") {
            //         localStorage.setItem("hideImages", "false");
            //     } else {
            //         localStorage.setItem("hideImages", "true");
            //     }
            //     accessibility();

            // }

            // // FUNCTIONS: text options

            // function letterSpace() {
            //     if (letterspacing === "true") {
            //         localStorage.setItem("letterSpacing", "false");
            //     } else {
            //         localStorage.setItem("letterSpacing", "true");
            //     }
            //     accessibility();

            // }

            // function fontSize() {
            //     if (fontsize === "true") {
            //         localStorage.setItem("fontSize", "false");

            //     } else {
            //         localStorage.setItem("fontSize", "true");

            //     }
            //     accessibility();

            // }

            // function lineHeight() {
            //     if (lineheight === "true") {
            //         localStorage.setItem("lineHeight", "false");
            //     } else {
            //         localStorage.setItem("lineHeight", "true");
            //     }
            //     accessibility();

            // }

            // function titleHL() {
            //     if (title_highlight === "true") {
            //         localStorage.setItem("titleHighlight", "false");
            //     } else {
            //         localStorage.setItem("titleHighlight", "true");
            //     }
            //     accessibility();

            // }

            // function linkHL() {
            //     if (link_highlight === "true") {
            //         localStorage.setItem("linkHighlight", "false");
            //     } else {
            //         localStorage.setItem("linkHighlight", "true");
            //     }
            //     accessibility();

            // }

            // // FUNCTIONS: color options

            // function softContrast() {
            //     if (softcontrast === "true") {
            //         localStorage.setItem("softContrast", "false");
            //         localStorage.setItem("highContrast", "false");
            //         localStorage.setItem("monoChrome", "false");
            //     } else {
            //         localStorage.setItem("softContrast", "true");
            //         localStorage.setItem("highContrast", "false");
            //         localStorage.setItem("monoChrome", "false");
            //     }
            //     accessibility();

            // }

            // function highContrast() {
            //     if (highcontrast === "true") {
            //         localStorage.setItem("highContrast", "false");
            //         localStorage.setItem("softContrast", "false");
            //         localStorage.setItem("monoChrome", "false");
            //     } else {
            //         localStorage.setItem("highContrast", "true");
            //         localStorage.setItem("softContrast", "false");
            //         localStorage.setItem("monoChrome", "false");
            //     }
            //     accessibility();

            // }

            // function blackAndWhite() {
            //     if (monochrome === "true") {
            //         localStorage.setItem("monoChrome", "false");
            //         localStorage.setItem("highContrast", "false");
            //         localStorage.setItem("softContrast", "false");
            //     } else {
            //         localStorage.setItem("monoChrome", "true");
            //         localStorage.setItem("highContrast", "false");
            //         localStorage.setItem("softContrast", "false");
            //     }

            //     accessibility();
            // }



            // function accessibility() {

            //     // content options
            //     blackcursor = localStorage.getItem('blackCursor');
            //     whitecursor = localStorage.getItem('whiteCursor');
            //     readingmask = localStorage.getItem('readingMask');
            //     hideimages = localStorage.getItem('hideImages');

            //     // text options
            //     letterspacing = localStorage.getItem('letterSpacing');
            //     fontsize = localStorage.getItem('fontSize');
            //     lineheight = localStorage.getItem('lineHeight');
            //     title_highlight = localStorage.getItem('titleHighlight');
            //     link_highlight = localStorage.getItem('linkHighlight');

            //     // color options 
            //     softcontrast = localStorage.getItem('softContrast');
            //     highcontrast = localStorage.getItem('highContrast');
            //     monochrome = localStorage.getItem('monoChrome');

            //     if (blackcursor === "true") {

            //         document.querySelector(":root").style.setProperty('--default', 'url(<?php echo get_template_directory_uri(); ?>/assets/blackcursor.png), default');
            //         document.querySelector(":root").style.setProperty('--pointer', 'url(<?php echo get_template_directory_uri(); ?>/assets/blackhand.png), pointer');
            //         document.getElementById("blackCursor").classList.add("active_access");
            //         document.getElementById("whiteCursor").classList.remove("active_access");


            //     } else if (whitecursor === "true") {
            //         document.querySelector(":root").style.setProperty('--default', 'url(<?php echo get_template_directory_uri(); ?>/assets/whitecursor.png), default');
            //         document.querySelector(":root").style.setProperty('--pointer', 'url(<?php echo get_template_directory_uri(); ?>/assets/whitehand.png), pointer');
            //         document.getElementById("whiteCursor").classList.add("active_access");
            //         document.getElementById("blackCursor").classList.remove("active_access");


            //     } else {
            //         document.querySelector(":root").style.setProperty('--default', '');
            //         document.querySelector(":root").style.setProperty('--pointer', '');
            //         document.getElementById("blackCursor").classList.remove("active_access");
            //         document.getElementById("whiteCursor").classList.remove("active_access");


            //     }


            //     if (hideimages === "true") {

            //         document.querySelector(":root").style.setProperty('--img_display', 'hidden');
            //         document.getElementById("hideImages").classList.add("active_access");



            //     } else {
            //         document.querySelector(":root").style.setProperty('--img_display', '');
            //         document.getElementById("hideImages").classList.remove("active_access");



            //     }

            //     if (letterspacing === "true") {

            //         document.querySelector(":root").style.setProperty('--title_ls', '4px');
            //         document.querySelector(":root").style.setProperty('--body_ls', '4px');
            //         document.getElementById("letterSpace").classList.add("active_access");


            //     } else {
            //         document.querySelector(":root").style.setProperty('--title_ls', '');
            //         document.querySelector(":root").style.setProperty('--body_ls', '');
            //         document.getElementById("letterSpace").classList.remove("active_access");



            //     }



            //     if (fontsize === "true") {
            //         if ($(window).width() > 500) {
            //             // if screen is bigger than 500 px
            //             document.querySelector(":root").style.setProperty('--body', '22px');
            //             document.querySelector(":root").style.setProperty('--menu', '26px');
            //             document.querySelector(":root").style.setProperty('--caption', '20px');
            //             document.querySelector(":root").style.setProperty('--minicaption', '16px');
            //             document.querySelector(":root").style.setProperty('--h4', '34px');

            //             document.getElementById("fontSize").classList.add("active_access");


            //         } else {
            //             // if smaller than 500px
            //             document.querySelector(":root").style.setProperty('--body', '22px');
            //             document.querySelector(":root").style.setProperty('--menu', '26px');
            //             document.querySelector(":root").style.setProperty('--caption', '18px');
            //             document.querySelector(":root").style.setProperty('--minicaption', '16px');
            //             document.querySelector(":root").style.setProperty('--h4', '34px');
            //             document.getElementById("fontSize").classList.add("active_access");

            //         }

            //     } else {

            //         document.querySelector(":root").style.setProperty('--body', '');
            //         document.querySelector(":root").style.setProperty('--menu', '');
            //         document.querySelector(":root").style.setProperty('--caption', '');
            //         document.querySelector(":root").style.setProperty('--minicaption', '');
            //         document.querySelector(":root").style.setProperty('--h4', '');
            //         document.getElementById("fontSize").classList.remove("active_access");

            //     }



            //     if (lineheight === "true") {

            //         document.querySelector(":root").style.setProperty('--title_lh', '1.8');
            //         document.querySelector(":root").style.setProperty('--body_lh', '1.8');
            //         document.getElementById("lineHeight").classList.add("active_access");


            //     } else {
            //         document.querySelector(":root").style.setProperty('--title_lh', '');
            //         document.querySelector(":root").style.setProperty('--body_lh', '');
            //         document.getElementById("lineHeight").classList.remove("active_access");

            //     }

            //     if (title_highlight === "true") {
            //         document.querySelector(":root").style.setProperty('--title_hl', '1.5px solid var(--orange)');
            //         document.querySelector(":root").style.setProperty('--body_hl', '1.5px solid var(--orange)');
            //         document.querySelector(":root").style.setProperty('--highlight_padding', '2px');

            //         document.getElementById("titleHL").classList.add("active_access");



            //     } else {
            //         document.querySelector(":root").style.setProperty('--title_hl', '');
            //         document.querySelector(":root").style.setProperty('--body_hl', '');
            //         document.querySelector(":root").style.setProperty('--highlight_padding', '');
            //         document.getElementById("titleHL").classList.remove("active_access");

            //     }

            //     if (link_highlight === "true") {

            //         document.querySelector(":root").style.setProperty('--link_hl', 'underline');
            //         document.getElementById("linkHL").classList.add("active_access");

            //     } else {
            //         document.querySelector(":root").style.setProperty('--link_hl', '');
            //         document.getElementById("linkHL").classList.remove("active_access");


            //     }

            //     if (softcontrast === "true") {

            //         document.querySelector(":root").style.setProperty('--white', '#FFFCF8');

            //         document.querySelector(":root").style.setProperty('--black', '#3C3C3C');
            //         document.querySelector(":root").style.setProperty('--beige', '#EBC3CE');
            //         document.querySelector(":root").style.setProperty('--red', '#6F6B6A');

            //         document.querySelector(":root").style.setProperty('--accessblue', '#00F0FF');
            //         document.querySelector(":root").style.setProperty('--accessyellow', '#FFF500');


            //         <?php if (is_single() && get_post_type() === 'methodology' || get_post_type() === 'in-practice') : ?>
            //             document.querySelector(".footnote_one").style.setProperty('background-color', '#3C3C3C');
            //             document.querySelector(".footnote_two").style.setProperty('background-color', '#3C3C3C');
            //             document.querySelector(".footnote_three").style.setProperty('background-color', '#3C3C3C');

            //             document.getElementById("containerTwo").style.setProperty('background-color', '#FFFCF8');
            //             document.getElementById("containerOne").style.setProperty('background-color', '#FFFCF8');
            //             document.getElementById("containerThree").style.setProperty('background-color', '#FFFCF8');

            //         <?php endif; ?>

            //         document.getElementById("softContrast").classList.add("active_access");
            //         document.getElementById("blackAndWhite").classList.remove("active_access");
            //         document.getElementById("highContrast").classList.remove("active_access");


            //     } else if (highcontrast === "true") {


            //         // document.getElementById("blackcursor").style.fill = "#00F0FF";
            //         document.querySelector(":root").style.setProperty('--darkgrey', 'black');

            //         document.querySelector(":root").style.setProperty('--white', '#FFF500');
            //         document.querySelector(":root").style.setProperty('--white_bg', '#FFF500');
            //         document.querySelector(":root").style.setProperty('--offwhite', '#FFF500');
            //         document.querySelector(":root").style.setProperty('--orange', 'black');
            //         document.querySelector(":root").style.setProperty('--darkyellow', 'black');
            //         document.querySelector(":root").style.setProperty('--lightyellow', 'white');
            //         document.querySelector(":root").style.setProperty('--mintgreen', '#00F0FF');
            //         document.querySelector(":root").style.setProperty('--pink', '#00F0FF');
            //         document.querySelector(":root").style.setProperty('--darkgreen', 'white');
            //         document.querySelector(":root").style.setProperty('--lightgrey', 'white');
            //         document.querySelector(":root").style.setProperty('--grey', 'black');




            //         document.querySelector(":root").style.setProperty('--accessblue', '#00F0FF');
            //         document.querySelector(":root").style.setProperty('--accessyellow', '#FFF500');
            //         document.querySelector(":root").style.setProperty('--img_filter', 'contrast(150%)');

            //         document.querySelector(".site_header").style.setProperty('background', '#00F0FF');
            //         document.getElementById("highContrast").classList.add("active_access");

            //         document.getElementById("blackAndWhite").classList.remove("active_access");
            //         document.getElementById("softContrast").classList.remove("active_access");

            //     } else if (monochrome === "true") {

            //         document.querySelector(":root").style.setProperty('--white', '#FFFCF8');
            //         document.querySelector(":root").style.setProperty('--white_bg', '#FFFCF8');
            //         document.querySelector(":root").style.setProperty('--offwhite', '#FFFCF8');
            //         document.querySelector(":root").style.setProperty('--orange', '#3C3C3C');
            //         document.querySelector(":root").style.setProperty('--darkyellow', '#6F6B6A');
            //         document.querySelector(":root").style.setProperty('--lightyellow', '#6F6B6A');
            //         document.querySelector(":root").style.setProperty('--mintgreen', '#6F6B6A');
            //         document.querySelector(":root").style.setProperty('--pink', '#6F6B6A');
            //         document.querySelector(":root").style.setProperty('--darkgreen', '#6F6B6A');

            //         document.querySelector(":root").style.setProperty('--img_filter', '');

            //         document.querySelector(":root").style.setProperty('--accessblue', 'darkgrey');
            //         document.querySelector(":root").style.setProperty('--accessyellow', 'lightgrey');
            //         document.querySelector(":root").style.setProperty('--img_filter', 'grayscale(1)');
            //         document.getElementById("blackAndWhite").classList.add("active_access");

            //         document.querySelector(".site_header").style.setProperty('background', '');
            //         document.getElementById("highContrast").classList.remove("active_access");
            //         document.getElementById("softContrast").classList.remove("active_access");


            //     } else {
            //         document.querySelector(":root").style.setProperty('--white', '');

            //         document.querySelector(":root").style.setProperty('--black', '');
            //         document.querySelector(":root").style.setProperty('--beige', '');
            //         document.querySelector(":root").style.setProperty('--red', '');

            //         document.querySelector(":root").style.setProperty('--accessblue', '');
            //         document.querySelector(":root").style.setProperty('--accessyellow', '');


            //         <?php if (is_single() && get_post_type() === 'methodology' || get_post_type() === 'in-practice') : ?>
            //             document.querySelector(".footnote_one").style.setProperty('background-color', '');
            //             document.querySelector(".footnote_two").style.setProperty('background-color', '');
            //             document.querySelector(".footnote_three").style.setProperty('background-color', '');

            //             document.getElementById("containerTwo").style.setProperty('background-color', '');
            //             document.getElementById("containerOne").style.setProperty('background-color', '');
            //             document.getElementById("containerThree").style.setProperty('background-color', '');

            //         <?php endif; ?>

            //         document.querySelector(":root").style.setProperty('--img_filter', '');

            //         document.querySelector(":root").style.setProperty('--accessblue', '');
            //         document.querySelector(":root").style.setProperty('--accessyellow', '');

            //         document.querySelector(".site_header").style.setProperty('background', '');
            //         document.getElementById("blackAndWhite").classList.remove("active_access");
            //         document.getElementById("highContrast").classList.remove("active_access");
            //         document.getElementById("softContrast").classList.remove("active_access");



            //     }

            //     if (fontsize === "true" && letterspacing === "true") {

            //         if ($(window).width() > 500) {
            //             // if screen is bigger than 500 px
            //             document.querySelector(":root").style.setProperty('--access_container_size', 'calc(100% / 2 - var(--y))');



            //         } else {
            //             // if smaller than 500px
            //             document.querySelector(":root").style.setProperty('--access_container_size', '100%');

            //         }


            //     } else if (letterspacing === "false" && fontsize === "true") {
            //         if ($(window).width() > 850) {
            //             // if screen is bigger than 500 px
            //             document.querySelector(":root").style.setProperty('--access_container_size', 'calc(100% / 3 - var(--y))');



            //         } else {
            //             // if smaller than 500px
            //             document.querySelector(":root").style.setProperty('--access_container_size', '100%');

            //         }
            //     } else if (fontsize === "false" && letterspacing === "true") {
            //         if ($(window).width() > 850) {
            //             // if screen is bigger than 500 px
            //             document.querySelector(":root").style.setProperty('--access_container_size', 'calc(100% / 3 - var(--y))');



            //         } else {
            //             // if smaller than 500px
            //             document.querySelector(":root").style.setProperty('--access_container_size', 'calc(100% - var(--z))');

            //         }
            //     } else {
            //         document.querySelector(":root").style.setProperty('--access_container_size', '');

            //     }
            //     if (readingmask === "true") {
            //         document.getElementById("readingmaskEl").style.display = "inline";
            //         document.getElementById("readingMask").classList.add("active_access");

            //     } else {
            //         document.getElementById("readingmaskEl").style.display = "none";
            //         document.getElementById("readingMask").classList.remove("active_access");

            //     }
            // }

            // accessibility();


            // // Reading Mask Movement

            // function initCursor(speedOption = 1) {
            //     let dpkCursorMouse = {
            //         x: -100,
            //         y: -100
            //     };
            //     let dpkCursorPos = {
            //         x: 0,
            //         y: 0
            //     };
            //     let speed = speedOption;

            //     window.addEventListener("mousemove", (e) => {
            //         dpkCursorMouse.y = e.y;
            //     });

            //     const updatePosition = () => {
            //         dpkCursorPos.y += (dpkCursorMouse.y - dpkCursorPos.y) * speed;

            //         dpkCursor.style.transform = `translate3d(calc(${dpkCursorPos.x}px - 0%) ,calc(${dpkCursorPos.y}px - 50%),0)`;
            //     };

            //     function loop() {
            //         updatePosition();
            //         requestAnimationFrame(loop);
            //     }
            //     requestAnimationFrame(loop);
            // }


            // initCursor();
        </script>

        <?php wp_footer(); ?>
        </body>

        </html>