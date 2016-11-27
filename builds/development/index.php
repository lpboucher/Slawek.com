<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>VIEW FINDER PHOTOGRAPHY</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://use.typekit.net/ide8gms.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body id="index">

    <div class="headerwrapper">
        <h1>VIEW FINDER PHOTOGRAPHY</h1>
        <h2>Slawek Tomas</h2>
        <div id="menuwrapper">
            <ul class="topmenu" id="myTopnav">
              <li><a href="gallery.php">Galleries</a></li>
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
