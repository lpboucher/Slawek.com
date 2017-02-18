<?php

function find_selected_gallery() {
    global $current_gallery;

    if (isset($_GET["gallerytype"])) {
        $current_gallery = $_GET["gallerytype"];
    } else {
        $current_gallery = null;
    }

    return $current_gallery;
}

function show_gallery($current_gallery) {

    if ($current_gallery == null) {
        $path = "images/gallery/*/*.jpg";
    } else {
        $path = "images/gallery/{$current_gallery}/*.jpg";
    }

    $output = "";

    foreach (glob($path) as $filename) {
        $folderpath = explode("/",$filename);
        $highResFile = "{$folderpath[0]}/{$folderpath[1]}/{$folderpath[2]}/HighRes/{$folderpath[3]}";
        $output .= "<div class=\"\" onclick=\"showImage(this, '{$filename}', '{$highResFile}')\" >";
        $output .= "<img class=\"galleryitems\" src=\"{$filename}\">";
        $output .= "<p>&#43;</p></div>";
    }

    return $output;
}

function show_slider() {
    $path = "images/slider/*.jpg";
    $output = "";

    $output .= "<ul id=\"slidercontainer\" ontouchstart=\"touchStart(event,'slidercontainer');\" ontouchend=\"touchEnd(event);\" ontouchmove=\"touchMove(event);\" ontouchcancel=\"touchCancel(event);\">";
    foreach (glob($path) as $filename) {
        $output .= "<li><img class=\"photos\" src=\"{$filename}\"></li>";
    }
    $output .= "</ul>";
    $output .= "<div id=\"scrollleft\" onclick=\"plusDivs(-1)\">";
    $output .= "<div>&#10094;</div>";
    $output .= "</div>";
    $output .= "<div id=\"scrollright\" onclick=\"plusDivs(1)\">";
    $output .= "<div>&#10095;</div>";
    $output .= "</div>";

    return $output;
}
 ?>
