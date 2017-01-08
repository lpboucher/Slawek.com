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
 ?>
