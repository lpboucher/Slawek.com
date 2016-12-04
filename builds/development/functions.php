<?php

function find_selected_gallery() {
    global $current_gallery;

    if (isset($_GET["gallery"])) {
        $current_gallery = $_GET["gallery"];
    } else {
        $current_gallery = null;
    }
}

 ?>
