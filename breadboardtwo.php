<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motors</title>
    <link rel="stylesheet" href="breadboardonekesath.css" />
    <!-- Icons CDS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script>
      var data = 1;
      var data2 = 50;
      document.getElementById("root").innerText = data;
      document.getElementById("changeprice").innerText = data2;
      function decrement() {
        if (data > 1) {
          data = data - 1;
          document.getElementById("root").innerText = data;
        } else if (data == 1) {
          document.getElementById("root").innerText = data;
        } else {
          document.getElementById("root").innerText = "No data found";
        }
        if (data2 > 50) {
          data2 = data2 - 50;
          document.getElementById("changeprice").innerText = data2;
        } else if (data2 == 50) {
          document.getElementById("changeprice").innerText = data2;
        } else {
          document.getElementById("changeprice").innerText = "No Data Found";
        }
      }
      function increment() {
        data = data + 1;
        document.getElementById("root").innerText = data;

        data2 = data2 + 50;
        document.getElementById("changeprice").innerText = data2;
      }
    </script>
  </head>
  <body>
    <!---- Header Section -------------------------------------------------------------->
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
          <li class="list" id="home-hover">
            <a href="main.html" class="outer-color">Home</a>
          </li>
          <!-- ----------------------------------------------------------------------------------------- -->
          <!-- Second List -->
          <li class="list">
            <a href="#" class="outer-color"
              >Products

              <!-- Sub second List one -->
              <ul class="un">
                <li id="motors-hover">
                  <a href="motors.html"
                    >Motors</a
                  >
                </li>

                <!-- -------------------------------------------------------------------------------------------- -->

                <li><a href="breadboard.html">Bread Board</a></li>

                <!-- ----------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="arduino.html"
                    >Arduino
                  </a>
                </li>

                <!-- ------------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="wires.html"
                    >Wires
                  </a>
                </li>

                <!-- -------------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="sensors.html"
                    >Sensors
                  </a>
                </li>

                <!-- ----------------------------------------------------------------------------------------------------- -->
                <li><a href="tools.html">Tools</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
                <li><a href="wheels.html">Wheels</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
                <li><a href="flyingcontroller.html">Flying Controller</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
              </ul>
            </a>
          </li>
          <!-- ------------------------------------------------------------------------------------------ -->
          <!-- ----------------------------------------------------------------------------------------------- -->
          <!-- Fourth List -->
          <li class="list" id="home-hover">
            <a href="discount.php" class="outer-color">Discount/Sale</a>
          </li>
        </ul>
      </nav>
    </section>
    <!-- -------Configure images------------------------------------------------------------------------- -->
    <section id="insideimage">
      <div class="bigimage">
        <img src="Images/breadboard1.jpg" alt="No Image Found" />
      </div>
      <div class="imagecontent">
        <span>830 Point 2PCS 400 Point Solderless Breadboards</span>

        <div class="stars">
          <div class="starsrow">
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x"></span>
          </div>
          <span style="padding: 2rem 0px">Availability:600 in stock</span>
          <span style="color: orange; padding: 2rem 0px; font: 3rem solid"
            >Rs:50</span
          >
          <span>Quantity</span>

          <div
            style="
              display: flex;
              flex-direction: row;
              font: 30px solid;
              padding: 2rem 0px;
            "
          >
            <button
              onclick="decrement()"
              style="height: 2rem; width: 2rem; font: 30px solid"
            >
              -
            </button>
            <p id="root" style="padding: 0 1rem">1</p>
            <button
              onclick="increment()"
              style="height: 2rem; width: 2rem; font: 30px solid"
            >
              +
            </button>
          </div>

          <span>Subtotal:<span id="changeprice">50</span></span>
          <form action="detailscapturedofuser.php"method=POST>
          <button class="btn">Buy</button>
          <button class="btn">Add to card</button>
          </form>
        </div>
      </div>
    </section>
    <div class="center" style="position: absolute; top: 60rem; z-index: -1">
      <div
        class="symbols"
        style="font: 2rem solid; position: relative; left: 3rem"
      >
        <i class="fa-solid fa-check"></i>
        <span>3-5 days Fast Delivery</span>
        <i class="fa-duotone fa-phone"></i>
        <span>Dedicate Support(10 AM to 10 PM)</span><br />
        <i class="fa-solid fa-sack-dollar"></i>
        <span>Cash On Delivery Available On All Orders</span>
      </div>
      <span style="font: 50px solid; position: relative; left: 3.5rem"
        >Description</span
      ><br />

      <p
        style="
          font: 20px solid;
          position: relative;
          left: 3.5rem;
          padding: 2rem 0px;
        "
      >
        While designing and developing any electronics system major steps are
        design then prototype and debug and then the system moves to the final
        production stage. All these stages are very important for the
        development of the system. After designing the circuit prototyping
        requires you to make circuit connection for making sure that your
        circuit is working as intended. We usually use breadboard and jumper
        wires to make connections and use DIP packages and breakout boards to
        connect them without soldering. This SYB-170 Mini Breadboard is an
        excellent choice for prototyping and testing the system. It is a mini
        breadboard which you can use if you have some components which are small
        in size and you want them to be tested with an actual circuit. It can be
        stacked with other breadboards if you want to increase the size of the
        circuit.
      </p>
      <span
        style="
          font: 25px solid;
          position: relative;
          left: 3.5rem;
          padding: 10px 0px;
        "
        >830 Point 2PCS 400 Point Solderless Breadboard Specifications</span
      >
      <ul
        style="
          font: 20px solid;
          padding: 20px 0px;
          position: relative;
          left: 4.5rem;
        "
      >
        <li>It is Stackable</li>
        <li>High quality plastic material for insulation and durability</li>
        <li>Great for prototyping and testing purpose</li>
        <li>830 tie points</li>
      </ul>
    </div>
    >
    <!------Footer Section ------------------------------------------------------------------------------------------ -->
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.431623139593!2d76.1201770150129!3d28.796208782353485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3912672e389f1817%3A0x94a6410d9a550c6d!2sDurga%20Colony%2C%20Shakti%20Vihar%2C%20Bhiwani%2C%20Haryana%20127021!5e0!3m2!1sen!2sin!4v1677523054922!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>

        <!-- Social Media Symbols -->
        <div class="social-media">
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
      </footer>
    </section>
  </body>
</html>
