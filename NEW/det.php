<?php
 session_start();


?>

<!doctype html>
<html>
<head>
   <title>SEEDCO Details</title></head>
<body>
    <link href="b.css" rel="stylesheet" type="text/css">
    <div class="container">
        <ul class=" navbar">
            <li class="nav-link">
                <a id="navlimk" href="index.php" id="Home">Home</a>
            </li>
            <li class="nav-link">
            <a  id="navlimk" href="reg_acc.php">Sign in</a> 
            </li>
            <li class="nav-link">
                <a id="navlimk" href="service.php" id="service">Our services</a> 
            </li>
          
           
            </ul>
            <hr>
            <h2 style="color:black; margin-top:50px;">OUR PRODUCTS</h2>
<p style="color:black; font-size:20px">->Here are the products that are found in our company</p>

<div class="images">
  <div class="gallery">
    <a target="_blank"href="login.php">
      <img src="img/appleSeed.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><b>Apple seed</b><br>1/2 kg=$1.6<br>@1kg=$3</div>
  </div>
</div>


<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/cabbage.jpg" alt="qwerty" width="600" height="400">
    </a>
    <div class="desc"><b>Cabbage seeds</b><br>1/2 kg=$1.2<br>@1kg=$2.4</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/pumpkin.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc"><b>Pumpkin seeds</b><br>1/2 kg=$1.3<br>@1kg=$2</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank"href="login.php">
      <img src="img/melon.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>Melon seeds</b><br>1/2 kg=$1.5<br>@1kg=$2.8</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/maize.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>Maize seeds</b><br>1/2 kg=$0.8<br>@1kg=$1.8</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/greenbeans.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>Greenbeans seeds</b><br>1/2 kg=$1.5<br>@1kg=$2.5</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/redbeans.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>RedBeans seeds</b><br>1/2 kg=$1.5<br>@1kg=$2.5</div>
  </div>
</div>

<div class="images">
  <div class="gallery">
    <a target="_blank" href="login.php">
      <img src="img/tomato.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>Tomato seeds</b><br>1/2 kg=$1.4<br>@1kg=$2.3</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px; color:black; font-size:20px;">
  <p>->We provide high quality services to our customers.</p>
  <p>->Register with us by Signing up</p>
</div>

<style>
  .center {
   text-align: center;
   background-image: url("img/img2.jpg");
   margin-radius: 10px;
 }
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:black;

}

* {
  box-sizing: border-box;
}

.images {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}



.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><b>Top</b></button>


  <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
</body>
</html>