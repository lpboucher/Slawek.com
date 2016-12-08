<?php

function show_header($page) {
    $output = "<!DOCTYPE html PUBLIC>";
    $output .= "<html lang=\"en\">";
    $output .= "<head>";
    $output .= "<meta charset=\"UTF-8\">";
    $output .= "<title>VIEW FINDER PHOTOGRAPHY</title>";
    $output .= "<link rel=\"stylesheet\" href=\"css/style.css\">";
    $output .= "<script src=\"https://use.typekit.net/ide8gms.js\"></script>";
    $output .= "<script>try{Typekit.load({ async: true });}catch(e){}</script>";
    $output .= "</head>";
    $output .= "<body id=\"{$page}\">";
    $output .= "<div class=\"headerwrapper\">";
    $output .= "<h1>VIEW FINDER PHOTOGRAPHY</h1>";
    $output .= "<h2>Slawek Tomas</h2>";

    return $output;
}

function show_navigation() {
    $nav = "<div id=\"menuwrapper\">";
    $nav .= "<ul class=\"topmenu\" id=\"myTopnav\">";
    $nav .= "<li><a href=\"gallery.php\">Gallery</a>";
    $nav .= "<ul class=\"dropdown\">";
    $nav .= "<li><a href=\"gallery.php?gallerytype=food\">Food</a></li>";
    $nav .= "<li><a href=\"gallery.php?gallerytype=hospitality\">Hospitality</a></li>";
    $nav .= "<li><a href=\"gallery.php?gallerytype=cocktail\">Cocktails</a></li>";
    $nav .= "</ul></li>";
    $nav .= "<li><a href=\"#projects\">Projects</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openAbout()\">About</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openContact()\">Contact</a></li>";
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
    $output .= "<form>";
    $output .= "<div>";
    $output .= "<input type=\"text\" name=\"field1\" placeholder=\"Full Name\" />";
    $output .= "<input type=\"email\" name=\"field2\" placeholder=\"Email\" />";
    $output .= "<textarea placeholder=\"Message\" onkeyup=\"adjust_textarea(this)\"></textarea>";
    $output .= "<input type=\"button\" value=\"Send Message\" />";
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
    $output .= "<img src=\"images/Room.jpg\" alt=\"\"/>";
    $output .= "</div>";
    $output .= "<div class=\"about-right\">";
    $output .= "<h4 class=\"about-text\">BEHIND THE LENS</h4>";
    $output .= "<hr>";
    $output .= "<p class=\"about-text\">This is Slawek, he is a pretty cool dude and he also makes";
    $output .= "awesome photos. He makes awesome photographs of cocktails, food, hotel rooms and whatever you want to be honest. Maybe you should hire him for your next";
    $output .= "photo session?</p>";
    $output .= "</div></div></div></div></div>";

    return $output;
}

function show_footer() {
    $output = "<div id=\"footerwrapper\">";
    $output .= "<ul id=\"socialcontainer\">";
    $output .= "<li><img class =\"social\" src=\"images/socialicons/fb.png\" width=\"32px\"></li>";
    $output .= "<li><img class =\"social\" src=\"images/socialicons/flickr.png\" width=\"32px\"></li>";
    $output .= "<li><img class =\"social\" src=\"images/socialicons/instagram.png\" width=\"32px\"></li>";
    $output .= "</ul>";
    $output .= "<p id=\"velodesign\">Designed by: ©VELO CREATIVE STUDIO</p>";
    $output .= "</div></body>";
    $output .= "<script type=\"text/javascript\" src=\"js/script.js\"></script>";
    $output .= "</html>";

    return $output;
}

 ?>
