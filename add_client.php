<?php
	session_start();
?>

<html>

<head>
<title>Adaugare Client</title>

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

   
    
</head>


<style>
html, body {
    height: 100%;
	background-color: #02386e;
}

html {
    display: table;
    margin: auto;
}

h1, label{
	color:white;
}



body {
    display: table-cell;
    vertical-align: middle;
}
</style
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
<h1>Adauga Client</h1>
<form action="add_client.php">
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="phone">Telefon:</label><br>
  <input type="text" id="phone" name="phone"><br>
  <input style="margin:5 0" type="Submit" value="Adaugare">
</form>
<form action="clienti.php">
  <input style="margin:5 0" type="submit" value="Clienti Existenti"><br>
</form>

<?php
	include "db_connect.php";
	if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];
	$email = $_GET["email"];
	$telefon = $_GET["phone"];


$query2 = "INSERT INTO tblClienti VALUES (DEFAULT,'$nume','$prenume','$email','$telefon')" ;
mysqli_query($db, $query2) or die(mysqli_error('Error querying database.')); 

  echo "<p style='color:white; font-size:120%'>" ."Client Adaugat - Nume: $nume, Prenume: $prenume, Email :$email, Telefon: $telefon </p>";
}
?>

<form action="clienti.php">
  <input style="margin:5 0" type="submit" value="Clienti Existenti"><br>
</form>

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