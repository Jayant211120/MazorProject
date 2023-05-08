<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jayant Electronic Shop</title>
    <!-- Used for font cdn appling -->
<!-- ----------------------------------------------------------------------------------------------- -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<!-- ------------------------------------------------------------------------------------------------- -->
    <!-- For CSS file -->
    <link rel="stylesheet" href="mainkesath.css" />
<!-- ---------------------------------------------------------------------------------------------------- --> 
</head>
  <body>

    <!-- Header Section -->
    <section id="header">
      <h2 class="headingone">Jayant</h2>
      <input class="serch" type="search" placeholder="search" name="srch" />
      <div class="information">
        <i class="fa-solid fa-phone-volume"></i>
        <p>9671414679</p>
        <i class="fa-sharp fa-solid fa-envelope"></i>
        <p>jayant62644@gmail.com</p>
      </div>
    </section>
<!-- -------------------------------------------------------------------------------------------------- -->
  <!-- Navigation Section -->
    <section id="navigation-bar">
<!-- -------------------------------------------------------------------------------------------------- -->
      <!-- Navigation Bar -->
      <nav class="navbar">
<!-- --------------------------------------------------------------------------------------- -->
        <ul class="unordered-list">
          <!-- First List -->
          <li class="list" id="home-hover"><a href="#"class='outer-color'>Home</a></li>
<!-- ----------------------------------------------------------------------------------------- -->
          <!-- Second List -->
          <li class="list">
            <a href="#"class='outer-color'>Products</span>

              <!-- Sub second List one -->
              <ul class="un">
                <li id="motors-hover">
                <a href="motors.php">Motors</a></li>

<!-- -------------------------------------------------------------------------------------------- -->
                
                <li><a href="breadboard.php">Bread Board</a></li>

<!-- ----------------------------------------------------------------------------------------------- -->
                <li id="list"><a href="arduino.php">Arduino
                </a></li>

<!-- ------------------------------------------------------------------------------------------------- -->
                <li id="list"><a href="wires.php">Wires
                </a></li>

<!-- -------------------------------------------------------------------------------------------------- -->
                <li id="list"><a href="sensors.php">Sensors
                </a></li>

<!-- ----------------------------------------------------------------------------------------------------- -->
                <li><a href="tools.php">Tools</a></li>
<!-- ------------------------------------------------------------------------------------- -->
                <li><a href="wheels.php">Wheels</a></li>
<!------------------------------------------------------------------------------------------->
                <li><a href="flyingcontroller.php">Flying Controller</a></li>
<!-- --------------------------------------------------------------------------------------------- -->
              </ul>
            </a>
          </li>
<!-- ------------------------------------------------------------------------------------------ -->
<!-- ----------------------------------------------------------------------------------------------- -->
          <!-- Fourth List -->
          <li class="list"id="home-hover">
            <a href="discount.php"class='outer-color'>Discount/Sale</a>
          </li>
<!-- ------------------------------------------------------------------------------------------------ -->
        </ul>
      </nav>
    </section>
<!-- --------------------------------------------------------------------------------------------------- -->
    <!-- Center Image Section -->
    <section id="image">
      <div class="breadboard-image"></div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------ -->
    <!-- Products section -->
    <section id="products">
      <!-- Image1 -->
      <div class="items">
        <a href="motors.php">
          <img class="images"src="Images/servo motor.jpg"alt="No Image Found"/>
        </a>
        <h2 class="images-heading">Motors</h2>
      </div>

      <!-- Image2 -->
      <div class="items">
        <a href="tools.php">
          <img class="images" src="Images/Tools.png" alt="No Image Found"/>
        </a>
          <h2 class="images-heading">Tools</h2>
      </div>

       <!-- Image3 -->
      <div class="items">
        <a href="sensors.php">
          <img class="images" src="Images/Sensors.png" alt="No Image Found"/>
        </a>
        <h2 class="images-heading">Sensors</h2>
      </div>

       <!-- Image4 -->
      <div class="items">
        <a href="arduino.php">
          <img class="images" src="Images/arduino.png" alt="No Image Found"/>
        </a>
        <h2 class="images-heading">Arduino Boards</h2>
      </div>

       <!-- Image5 -->
      <div class="items">
        <a href="wires.php">
          <img class="images" src="Images/cable.png" alt="No Image Found"/>
        </a>
        <h2 class="images-heading">Wires</h2>
      </div>

    </section>
<!-- --------------------------------------------------------------------------------------------------------- -->
    <!-- Footer Section -->
    <section id="footer">

      <center>
        <p class="footer-para">Thank You For Using This Website</p>
      </center>

      <footer class="foot">
        <!-- Information of developer -->
        <div class="foot-info">
          <i class="fa-solid fa-phone-volume"></i>
          <p>9671414679</p>
          <i class="fa-sharp fa-solid fa-envelope"></i>
          <p>jayant62644@gmail.com</p>
        </div>

        <!-- Iframe used for google map -->
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.431623139593!2d76.12017701501294!3d28.796208782353485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3912672e389f1817%3A0x94a6410d9a550c6d!2sDurga%20Colony%2C%20Shakti%20Vihar%2C%20Bhiwani%2C%20Haryana%20127021!5e0!3m2!1sen!2sin!4v1676787063519!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>

        <!-- Social Media Symbols -->
        <div class="social-media">
          <a href="https://www.instagram.com/ja.yant348/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100037947731589"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/Jayant69264253"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://github.com/Jayant211120"><i class="fa-brands fa-github"></i></a>
        </div>

      </footer>
    </section>
<!-- ----------------------------------------------------------------------------------------------------------- -->
</body>
</html>
