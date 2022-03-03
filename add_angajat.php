<?php
	session_start();
?>

<html>

<head>
<title>Adaugare Angajat</title>

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

<br><br>
<h1>Adauga Angajat</h1>

<?php
include "db_connect.php";
?>

<form action="add_angajat.php">
  <input type="hidden" id="id" name="id">
  
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname"> <br>
  
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname"> <br>
  
  <label for="sala">Sala activitate:</label> <br>
  <select id="sala" name="sala">
  <option disabled selected>--Selectati o sala--</option>
  <?php 
	$query = "SELECT * FROM tblSali";
	$result = mysqli_query($db, $query) or die('Error querying database.');
	while ($row = mysqli_fetch_array($result)) {
    echo '<option value="'.$row['idSala'].'">'.$row['numeSala'].'</option>';
	}	
  ?>
  </select>
  <br>
  
  <label for="functie">Functie:</label> <br>
  <select id="functie" name="functie">
	<option disabled selected>--Selectati o functie--</option>
	<option value= "Manager"> Manager </option>
	<option value= "Receptioner"> Receptioner </option>
	<option value= "Personal Trainer"> Personal Trainer </option>
	<option value= "Cleaning"> Cleaning </option>
  </select><br>
    
  <label for="data">Data Incepere:</label><br>
  <input type="date" id="data" name="data"> <br>
  
  <label for="salariu">Salariu:</label><br>
  <input type="number" id="salariu" name="salariu" min="2000" step="100"> <br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"> <br>
  
  <label for="phone">Telefon:</label><br>
  <input type="text" id="phone" name="phone"> <br>
  
  <label for="parola">Privilegii:</label><br>
  <select id="userFunction" name="userFunction"> 
    <option disabled selected>--Selectati privilegii--</option>
	<option value="admin">admin</option>
	<option value="user">user</option>
  </select> <br>
  
  <label for="parola">Parola:</label><br>
  <input type="password" id="pwd" name="pwd"> <br>
  
  <input style="margin:5 0" type="Submit" value="Adaugare"><br>
</form>

<?php
	include "db_connect.php";
	if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];
	$sala = $_GET["sala"];
	$functie = $_GET["functie"];
	$date_s = $_GET["data"];
	$salariu = $_GET["salariu"];
	$email = $_GET["email"];
	$telefon = $_GET["phone"];
	$parola = $_GET["pwd"];
	$userFunction = $_GET["userFunction"];

$query2 = "INSERT INTO tblAngajati VALUES (DEFAULT,'$nume','$prenume','$sala','$functie','$date_s','$salariu','$email','$telefon')" ;
$users_query = "INSERT INTO tblUtilizatori VALUES (DEFAULT, '$nume', '$prenume', '$parola', '$userFunction')";
mysqli_query($db, $query2) or die(mysqli_error($db)); # schimba error message
mysqli_query($db, $users_query) or die(mysqli_error($db));
}
?>

<form action="angajati.php">
  <input style="margin:5 0" type="submit" value="Angajati Existenti"><br>
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