<?php
	session_start();
?>

<html>

<head>
<title>Adaugare Abonament</title>

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
<h1>Actualizare Date Angajat</h1>
<?php
include "db_connect.php";
$id = $_GET["id"];

$query4 = "SELECT * FROM tblAngajati, tblSali WHERE idAngajat = $id AND salaActivitate = idSala";
$result1= mysqli_query($db, $query4) or die(mysqli_error($db)); # schimba error message


while ($row = mysqli_fetch_array($result1)) {
	$nume = $row['numeAngajat'];
	$prenume = $row['prenumeAngajat'];
	$idSala = $row['idSala'];
	$sala = $row['numeSala'];
	$functie = $row['functieAngajat'];
	$date_s = $row['dataAngajare'];
	$salariu = $row['salariuAngajat'];
	$email = $row['emailAngajat'];
	$telefon = $row['telefonAngajat'];
	
	$usersQuery = "SELECT * FROM tblUtilizatori WHERE numeUtilizator = '$nume' and prenumeUtilizator = '$prenume'";
	$usersResult = mysqli_query($db, $usersQuery) or die(mysqli_error($db));
	$usersRow = mysqli_fetch_array($usersResult);
	
	$parola = $usersRow['parolaUtilizator'];
	$privilegii = $usersRow['functieUtilizator'];
}

?>
<form action="update_angajat.php">
  <input type="hidden" id="id" name="id" value ='<?php echo $id ?>'>
  
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname" value = '<?php echo $nume ?>' readonly> <br>
  
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname" value = '<?php echo $prenume ?>' readonly> <br>
  
  <label for="sala">Sala Activitate:</label><br>  
   <select id="sala" name="sala">
  <?php 
	echo '<option selected value="'.$idSala.'">'.$sala.'</option>';
	$query = "SELECT * FROM tblSali";
	$result = mysqli_query($db, $query) or die('Error querying database.');
	while ($row = mysqli_fetch_array($result)) {
		if (strcmp($row['numeSala'], $sala) != 0) 
		{
			echo '<option value="'.$row['idSala'].'">'.$row['numeSala'].'</option>';
		}
	}	
  ?>
  </select>
  <br>
  
  <label for="functie">Functie:</label> <br>
  <select id="functie" name="functie">
    <option selected><?php echo $functie ?></option>
	<?php
	  if (strcmp("Manager", $functie) != 0) 
	  {
	    echo '<option value="Manager"> Manager </option>';
	  }
	  if (strcmp("Receptioner", $functie) != 0) 
	  {
	    echo '<option value="Manager"> Receptioner </option>';
	  }
	  if (strcmp("Personal Trainer", $functie) != 0) 
	  {
	    echo '<option value="Manager"> Personal Trainer </option>';
	  }
	  if (strcmp("Cleaning", $functie) != 0) 
	  {
	    echo '<option value="Manager"> Cleaning </option>';
	  }
	?>
  </select><br>
    
    
  <label for="data">Data Incepere:</label><br>
  <input type="date" id="data" name="data" value = '<?php echo $date_s ?>' readonly> <br>
  
  <label for="salariu">Salariu:</label><br>
  <input type="number" id="salariu" name="salariu" min="2000" step="100" value = '<?php echo $salariu ?>'> <br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value = '<?php echo $email ?>'> <br>
  
  <label for="phone">Telefon:</label><br>
  <input type="text" id="phone" name="phone" value = '<?php echo $telefon ?>'> <br>
  
  <label for="parola">Privilegii:</label><br>
  <select id="userFunction" name="userFunction"> 
    <option selected><?php echo $privilegii ?></option>
	<?php
	  if (strcmp("admin", $privilegii) != 0) 
	  {
		echo '<option value="admin"> admin </option>';
	  }
	  if (strcmp("user", $functie) != 0) 
	  {
	    echo '<option value="user"> user </option>';
	  }
	?>
  </select> <br>
  
  <label for="parola">Parola:</label><br>
  <input type="password" id="pwd" name="pwd" value = '<?php echo $parola ?>'> <br>
  
  <input style="margin:5 0" type="Submit" value="Actualizare"><br>
</form>

<?php
	if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];
	$sala = $_GET["sala"];
	$functie = $_GET["functie"];
	$date_s = $_GET["data"];
	$salariu = $_GET["salariu"];
	$email = $_GET["email"];
	$telefon = $_GET["phone"];
	$privilegii = $_GET["userFunction"];
	$parola = $_GET["pwd"];


$query5 = "UPDATE tblAngajati SET numeAngajat = '$nume', prenumeAngajat = '$prenume', salaActivitate = '$sala', functieAngajat = '$functie', dataAngajare = '$date_s', salariuAngajat = '$salariu', emailAngajat = '$email', telefonAngajat = '$telefon' WHERE idAngajat = $id";
$usersUpdate = "UPDATE tblUtilizatori SET parolaUtilizator = '$parola', functieUtilizator = '$privilegii' WHERE numeUtilizator = '$nume' AND prenumeUtilizator = '$prenume'";

mysqli_query($db, $query5) or die(mysqli_error($db)); # schimba error message
mysqli_query($db, $usersUpdate) or die(mysqli_error($db));

  echo "<span style='color:#F0FFFF;'>Date Actualizate!</span>";
}
?>

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