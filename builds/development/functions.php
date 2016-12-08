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

 ?>
