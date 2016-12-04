<?php require_once("functions.php"); ?>

<!DOCTYPE html PUBLIC>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>VIEW FINDER PHOTOGRAPHY</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://use.typekit.net/ide8gms.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body id="gallery">

    <div class="headerwrapper">
        <!-- Commenting out on page for now
        <h1>VIEW FINDER PHOTOGRAPHY</h1>
        <h2>Slawek Tomas</h2> -->
        <div id="menuwrapper">
            <ul class="topmenu" id="myTopnav">
              <li><a href="gallery.php">Gallery</a>
                  <!--<ul class="">
                      <li><a href="#">Food</a></li>
                      <li><a href="#">Hospitality</a></li>
                      <li><a href="#">Cocktails</a></li>
                  </ul>-->
              </li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="javascript:void(0)" onclick="openAbout()">About</a></li>
              <li><a href="javascript:void(0)" onclick="openContact()">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- The overlay -->
    <div id="overlay">

      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeModal()">&times;</a>

      <!-- Overlay content -->
      <div class="overlay-content">
          <div id="contact-content">
              <h3>Contact</h3>
              <form>
                <div>
                    <input type="text" name="field1" placeholder="Full Name" />
                    <input type="email" name="field2" placeholder="Email" />
                    <textarea placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>
                    <input type="button" value="Send Message" />
                </div>
                <p class="contact-info">
                    Slawek Tomas</br>
                    London, UK</br>
                    +44(0)7821-122621</br>
                    slawek.tomas@gmail.com
                </p>
            </form>
        </div>
        <div id="about-content">
            <div class="about-wrapper">
                <div class="about-left">
                    <img src="images/Room.jpg" alt=""/>
                </div>
                <div class="about-right">
                    <h4 class="about-text">BEHIND THE LENS</h4>
                    <hr>
                    <p class="about-text">This is Slawek, he is a pretty cool dude and he also makes
                     awesome photos. He makes awesome photographs of cocktails, food, hotel rooms and whatever you want to be honest. Maybe you should hire him for your next
                     photo session?</p>
                </div>
            </div>
            </div>
        </div>
      </div>

    <div id="imgPanel" onclick="this.style.width='0'">
        <img id="lightbox" />
    </div>

    <?php

    $current_gallery = "Food";
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
</body>
<script type="text/javascript" src="js/script.js"></script>
</html>
