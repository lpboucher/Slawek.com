<?php require_once("functions.php"); ?>
<?php include("layouts.php"); ?>

<?php echo show_header("index"); ?>
<?php echo show_navigation(); ?>

<?php echo show_overlay(); ?>

    <div id="sliderwrapper">
        <ul id="slidercontainer">
            <li><img class="photos" src="images/Workspace.jpg"></li>
            <li><img class="photos" src="images/Figues.png"></li>
            <li><img class="photos" src="images/strawberrycocktail.jpg"></li>
            <li><img class="photos" src="images/afternoontea.jpg"></li>
            <li><img class="photos" src="images/kwestsuite.jpg"></li>
            <li><img class="photos" src="images/lifestyle.jpg"></li>
            <li><img class="photos" src="images/raspberrycocktail.jpg"></li>
        </ul>
        <a id="scrollleft" onclick="plusDivs(-1)">&#10094;</a>
        <a id="scrollright" onclick="plusDivs(1)">&#10095;</a>
    </div>

<?php echo show_footer(); ?>
