<?php require_once("functions.php"); ?>
<?php include("layouts.php"); ?>

<?php echo show_header("gallery"); ?>
<?php echo show_navigation(); ?>

<?php echo show_overlay(); ?>

    <div id="imgPanel">
        <div class="lightboxcontainer">
            <div class="imgwrap">
                <img id="lightbox" />
            </div>
        </div>
        <a href="javascript:void(0)" class="close" onclick="closeHighRes()">&times;</a>
        <a id="scrollleft" onclick="showNext(-1)">&#10094;</a>
        <a id="scrollright" onclick="showNext(1)">&#10095;</a>
    </div>

    <div id="loading"><div>Loading gallery. Please wait.</div></div>

    <div class="gallerycontainer">
        <?php
        $current_gallery = find_selected_gallery();
        echo show_gallery($current_gallery);
         ?>
    </div>

<?php echo show_footer(); ?>
