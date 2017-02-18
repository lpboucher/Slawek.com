<?php

function show_header($page) {
    $output = "<!DOCTYPE html PUBLIC>";
    $output .= "<html lang=\"en\">";
    $output .= "<head>";
    $output .= "<meta charset=\"UTF-8\">";
    $output .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no\" />";
    $output .= "<title>VIEWFINDER PHOTOGRAPHY</title>";
    $output .= "<link rel=\"stylesheet\" href=\"css/style.css\">";
    $output .= "<script src=\"https://use.typekit.net/ide8gms.js\"></script>";
    $output .= "<script>try{Typekit.load({ async: true });}catch(e){}</script>";
    $output .= "</head>";
    $output .= "<body id=\"{$page}\">";
    $output .= "<div class=\"headerwrapper {$page}\">";
    $output .= "<h1><a href=\"index.php\">VIEWFINDER PHOTOGRAPHY</a></h1>";
    $output .= "<h2>Slawek Tomas</h2>";

    return $output;
}

function show_navigation($page) {
    if ($page == "index") {
        $menu_top_link = "gallery.php";
        $menu_label = "Gallery";
    } else if ($page == "gallery") {
        $menu_top_link = "index.php";
        $menu_label = "Home";
    }
    $nav = "<div id=\"menuwrapper\">";
    $nav .= "<ul class=\"topmenu\" id=\"myTopnav\">";
    $nav .= "<li><a href=\"gallery.php\">Gallery</a>";
    $nav .= "<ul class=\"dropdown\">";
    $nav .= "<li><a href=\"gallery.php?gallerytype=food\">Food</a></li>";
    $nav .= "<li><a href=\"gallery.php?gallerytype=hospitality\">Hospitality</a></li>";
    $nav .= "<li><a href=\"gallery.php?gallerytype=cocktails\">Cocktails</a></li>";
    $nav .= "</ul></li>";
    $nav .= "<li><a href=\"#projects\">Projects</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openAbout()\">About</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openContact()\">Contact</a></li>";
    $nav .= "</ul></div>";
    $nav .= "<label for=\"show-menu\" class=\"show-menu {$page}\">&#9776</label>";
    $nav .= "<input type=\"checkbox\" id=\"show-menu\" role=\"button\">";
    $nav .= "<div id=\"mobilemenu\">";
    $nav .= "<ul>";
    $nav .= "<li class=\"mobileonly\"><a class=\"mobileonly\" href=\"{$menu_top_link}\">{$menu_label}</a></li>";
    $nav .= "<li class=\"mobileonly\"><a class=\"mobileonly\" href=\"#projects\">Projects</a></li>";
    $nav .= "<li class=\"mobileonly\"><a class=\"mobileonly\" href=\"javascript:void(0)\" onclick=\"openAbout()\">About</a></li>";
    $nav .= "<li class=\"mobileonly\"><a class=\"mobileonly\" href=\"javascript:void(0)\" onclick=\"openContact()\">Contact</a></li>";
    $nav .= "</ul></div></div>";

    return $nav;
}

function show_overlay() {
    $output = "<div id=\"overlay\">";
    //<!-- Button to close the overlay navigation -->
    $output .= "<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeModal()\">&times;</a>";
    //<!-- Overlay content -->
    $output .= "<div class=\"overlay-content\">";
    $output .= "<div id=\"contact-content\">";
    $output .= "<h3>Contact</h3>";
    $output .= "<form name=\"contactform\" method=\"post\" action=\"\">";
    $output .= "<div>";
    $output .= "<input type=\"text\" name=\"full_name\" placeholder=\"Full Name\" />";
    $output .= "<input type=\"email\" name=\"email\" placeholder=\"Email\" />";
    $output .= "<textarea name=\"email_text\" placeholder=\"Message\" onkeyup=\"adjust_textarea(this)\"></textarea>";
    $output .= "<input type=\"Submit\" name=\"submit\" value=\"Send Message\" />";
    $output .= "</div>";
    $output .= "<p class=\"contact-info\">";
    $output .= "Slawek Tomas</br>";
    $output .= "London, UK</br>";
    $output .= "+44(0)7821-122621</br>";
    $output .= "slawek.tomas@gmail.com";
    $output .= "</p>";
    $output .= "</form>";
    $output .= "</div>";
    $output .= "<div id=\"about-content\">";
    $output .= "<div class=\"about-wrapper\">";
    $output .= "<div class=\"about-left\">";
    $output .= "<img src=\"images/about/london.jpg\" alt=\"\"/>";
    $output .= "</div>";
    $output .= "<div class=\"about-right\">";
    $output .= "<h4 class=\"about-text\">BEHIND THE LENS</h4>";
    $output .= "<hr>";
    $output .= "<p class=\"about-text\">";
    $output .= read_about();
    $output .= "</p>";
    $output .= "</div></div></div></div></div>";

    return $output;
}

function show_footer() {
    $output = "<div id=\"footerwrapper\">";
    $output .= "<ul id=\"socialcontainer\">";
    $output .= "<li><a href=\"https://www.facebook.com/slawektomasphoto\" target=\"_blank\"><img class =\"social\" src=\"images/socialicons/fb.png\" width=\"32px\"></a></li>";
    $output .= "<li><a href=\"https://www.flickr.com/photos/slawektomas\" target=\"_blank\"><img class =\"social\" src=\"images/socialicons/flickr.png\" width=\"32px\"></a></li>";
    $output .= "<li><a href=\"https://www.instagram.com/slawek.tomas/?hl=en\" target=\"_blank\"><img class =\"social\" src=\"images/socialicons/instagram.png\" width=\"32px\"></a></li>";
    $output .= "</ul>";
    $output .= "<p id=\"velodesign\">Designed by: ©VELO CREATIVE STUDIO</p>";
    $output .= "<div id=\"mobilefooter\">";
    $output .= "<div class=\"box left\">";
    $output .= "<a href=\"https://www.instagram.com/slawek.tomas/?hl=en\">Instagram</a>";
    $output .= "</div>";
    $output .= "<div class=\"box right\">";
    $output .= "<a href=\"javascript:void(0)\" onclick=\"openContact()\">Contact Us</a>";
    $output .= "</div>";
    $output .= "</div></div>";
    $output .= "</body>";
    $output .= "<script type=\"text/javascript\" src=\"js/script.js\"></script>";
    $output .= "</html>";

    return $output;
}

 ?>
