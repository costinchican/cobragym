<?php
	session_start();
?>

<html>



<head>
<title>Sali</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    </style>

   
    
</head>



<style>
<!--
html, body {
    height: 100%;
	background-color: #02386e;
}

h1, h2, label{
	color:white;
}

html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}

table, th, td {
  border: 0.5px solid black;
}

.styled-table {
    border-collapse: collapse;
    font-size: 14;
	font-family: calibri;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #d3d3d3;
}
.styled-table tbody tr:nth-of-type(odd) {
    background-color: #696969;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 50px;
  width: 100%;
  text-align: center;
}


form{
	verical_align:middle;
}

.imgtext {
  color: rgba(209, 51, 51, 1);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.6);
  width: 400px;
  height: 60px;
  opacity: 0;
  position: absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.mySlides {
  position: relative;
  overflow: hidden;
}

.mySlides:hover img {
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  -webkit-filter: blur(1px);
  -moz-filter: blur(1px);
  -ms-filter: blur(1px);
  -o-filter: blur(1px);
  filter: blur(1px);
  transform: scale(1.03);
}

.mySlides:hover .imgtext {
  -webkit-opacity: 1;
  opacity: 1;
}



-->
</style>



<body>
<!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <?php
		include_once 'header.php';
	?>

<br><br><br><br>
<h1>Salile noastre</h1>
<br><br>

<div class="w3-content w3-display-container" style="max-width:800px">
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym1.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=1" target="_blank" style="text-align:center;">Cobra Pipera</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym2.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=2" target="_blank" style="text-align:center;">Cobra Titan</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym3.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=3" target="_blank" style="text-align:center;">Cobra Berceni</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym4.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=4" target="_blank" style="text-align:center;">Cobra Rahova</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym5.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=5" target="_blank" style="text-align:center;">Cobra Dolj</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym6.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=6" target="_blank" style="text-align:center;">Cobra Ploiesti</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym7.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=7" target="_blank" style="text-align:center;">Cobra By The Beach</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym8.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=8" target="_blank" style="text-align:center;">Cobra Cluj</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym9.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=9" target="_blank" style="text-align:center;">Cobra Timisoara</a>
        </div>
    </div>
    <div class="w3-display-container w3-animate-right mySlides">    
    <img src="assets/images/gym10.jpg" style="width:100%;">
        <div class="w3-display-middle w3-text-orange w3-xxlarge w3-container w3-padding-65 w3-hover-pale-blue">
            <a class="imgtext" href="display_sala.php?id=10" target="_blank" style="text-align:center;">Cobra Brasov</a>
        </div>
    </div>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(10)"></span>
  </div>
</div>


<script src="assets/js/slideshow.js"></script>

</div>

<br><br>



    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
 

</body>
</html>