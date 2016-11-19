<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>VIEW FINDER PHOTOGRAPHY</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://use.typekit.net/ide8gms.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body>

    <div class="headerwrapper">
        <h1>VIEW FINDER PHOTOGRAPHY</h1>
        <h2>Slawek Thomas</h2>
        <div id="menuwrapper">
            <ul class="topmenu" id="myTopnav">
              <li><a href="#galleries">Galleries</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="javascript:void(0)" onclick="openContact()">Contact</a></li>
        </ul>
        </div>
    </div>

    <!-- The overlay -->
    <div id="overlay">

      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeContact()">&times;</a>

      <!-- Overlay content -->
      <div class="overlay-content">
          <h3>Contact</h3>
          <form>
            <div>
                <input type="text" name="field1" placeholder="Full Name" />
                <input type="email" name="field2" placeholder="Email" />
                <textarea placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>
                <input type="button" value="Send Message" />
            </div>
            <p class="contact-content">
                Slawek Thomas</br>
                Flat 8, 18 Palace Court</br>
                London, UK</br>
                W2 4HU</br>
                (999) 999-9999</br>
                Slawek@view.com
            </p>
        </form>
      </div>

    </div>

    <div id="gallerywrapper">
        <ul id="slidercontainer">
            <li><img class="photos" src="images/Workspace.jpg"></li>
            <li><img class="photos" src="images/Figues.png"></li>
            <li><img class="photos" src="images/Room.jpg"></li>
            <li><img class="photos" src="images/Figues.png"></li>
        </ul>
        <a id="scrollleft" onclick="plusDivs(-1)">&#10094;</a>
        <a id="scrollright" onclick="plusDivs(1)">&#10095;</a>
    </div>

    <div id="footerwrapper">
        <ul id="socialcontainer">
            <li><img class ="social" src="images/socialicons/fb.png" width="32px"></li>
            <li><img class ="social" src="images/socialicons/flickr.png" width="32px"></li>
            <li><img class ="social" src="images/socialicons/instagram.png" width="32px"></li>
        </ul>
        <p id="velodesign">
            Designed by: ©VELO CREATIVE STUDIO
        </p>
    </div>

</body>
<script type="text/javascript" src="js/script.js"></script>
</html>
