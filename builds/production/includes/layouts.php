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
    $output .= "<div class=\"headerwrapper\">";
    $output .= "<h1>VIEWFINDER PHOTOGRAPHY</h1>";
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
    $nav .= "<li><a href=\"gallery.php?gallerytype=cocktails\">Cocktails</a></li>";
    $nav .= "</ul></li>";
    $nav .= "<li><a href=\"#projects\">Projects</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openAbout()\">About</a></li>";
    $nav .= "<li><a href=\"javascript:void(0)\" onclick=\"openContact()\">Contact</a></li>";
    $nav .= "</ul></div>";
    $nav .= "<label for=\"show-menu\" class=\"show-menu\">&#9776</label>";
    $nav .= "<input type=\"checkbox\" id=\"show-menu\" role=\"button\">";
    $nav .= "<div id=\"mobilemenu\">";
    $nav .= "<ul>";
    $nav .= "<li><a href=\"gallery.php\">Gallery</a></li>";
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
    $output .= "<img src=\"images/about/london.jpg\" alt=\"\"/>";
    $output .= "</div>";
    $output .= "<div class=\"about-right\">";
    $output .= "<h4 class=\"about-text\">BEHIND THE LENS</h4>";
    $output .= "<hr>";
    $output .= "<p class=\"about-text\">I got my first digital camera back in 2008 mostly to take holiday snaps. Photography had been a part time hobby for me then, but nothing more than that. I started to experiment with different types of photography and I was quite keen on night and long exposure photography.</br></br>
In 2013, I have upgraded to a DSLR before my son was born, so that I could take good quality photos of him. Soon after that, I began to delve deeper into photography. I started to learn about the technical side of photography, shutter speed, aperture, composition and most importantly lighting. Countless hours spent taking photos, looking at images and portfolios plus retouching my own photos made me realise that photography has become much more than a hobby for me.</br></br>
Since then, I have developed my skills further in a professional setting by working for clients on various photo shoots. I mainly specialise in food and beverage photography and that is what I’m most passionate about.<br></br>
I’m currently based in London, UK.</p>";
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
    $output .= "<div id=\"mobilefooter\">";
    $output .= "<div class=\"box left\">";
    $output .= "<a href=\"#\">Instagram</a>";
    $output .= "</div>";
    $output .= "<div class=\"box right\">";
    $output .= "<a href=\"#\">Contact Us</a>";
    $output .= "</div>";
    $output .= "</div></div>";
    $output .= "</body>";
    $output .= "<script type=\"text/javascript\" src=\"js/script.js\"></script>";
    $output .= "</html>";

    return $output;
}

 ?>
