<?php require_once("functions.php"); ?>
<?php include("layouts.php"); ?>

<?php echo show_header("gallery"); ?>
<?php echo show_navigation(); ?>

<?php echo show_overlay(); ?>

    <div id="imgPanel" onclick="this.style.width='0'">
        <img id="lightbox" />
    </div>

    <?php

    $current_gallery = find_selected_gallery();
    $path = "images/gallery/{$current_gallery}/*.jpg";

    foreach (glob($path) as $filename) {
        echo "<p>{$filename}<p/>";
    }

     ?>

    <div class="gallerycontainer">
        <!--<div class="" onclick="showImage('images/gallery/Workspace.jpg', 'images/gallery/Workspace.jpg')">
            <img class="" src="images/gallery/Workspace.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/Figues.png">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/strawberrycocktail.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/afternoontea.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/kwestsuite.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/lifestyle.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/raspberrycocktail.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/strawberrycocktail.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/afternoontea.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/kwestsuite.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/lifestyle.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/Workspace.jpg">
            <p>&#43;</p>
        </div>
        <div class="">
            <img class="" src="images/gallery/Figues.png">
            <p>&#43;</p>
        </div>-->
        <div class="" >
            <img class="" src="images/gallery/Food/afternoontea.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/apples.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/asparagus.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/brownies.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/cheese.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/chocolate.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/cupcakes.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/darktable.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/fireplace.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/fish.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/pasta.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/pastries.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/pear.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/pigsblanket.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/plate.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/presentation.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/puncki.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/strawberrysplash.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/sweets.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/teasnacks.jpg">
            <p>&#43;</p>
        </div>
        <div class="" >
            <img class="" src="images/gallery/Food/tomatoes.jpg">
            <p>&#43;</p>
        </div>
    </div>

<?php echo show_footer(); ?>
