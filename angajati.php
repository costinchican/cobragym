<?php
	session_start();
?>

<html>



<head>
<title>Date Angajati</title>

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
	font-family: 'Trebuchet MS', sans-serif;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #E5F4E3;
	opacity: 100%;
}
.styled-table tbody tr:nth-of-type(odd) {
    background-color: #5DA9E9;
	opacity: 100%;
}

form{
	verical_align:middle;
}


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
<h1>Date Angajati</h1>

<?php
	if(!isset($_SESSION["userFunctie"]))
	{
		header("location: login.php?error=loginfirst");
		exit();
	}
?>

<h2 style="margin: 12 0;">Cautare Angajat</h2>
<form action="angajati.php" >
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <input style="margin:5 0" type="submit" value="Cauta Angajat"><br>
</form>


<?php
	if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
	{
		echo '<form action="add_angajat.php"><input style="margin:5 0" type="submit" value="Adauga Angajat Nou"><br></form>';
	}
?>

<?php
include "db_connect.php";
?>
<?php
if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];


$query1 = " SELECT * FROM tblAngajati, tblSali WHERE numeAngajat = '$nume' AND prenumeAngajat= '$prenume' AND salaActivitate = idSala;";
$result1 = mysqli_query($db, $query1) or die('Error querying database.');


 while ($row = mysqli_fetch_array($result1)) {
 echo "<br>";
 echo sprintf("<span style='color:#F0FFFF;'>Nume: %s<br>Prenume: %s<br>Sala activitate: %s<br>Functie: %s<br>Email: %s<br>Telefon %s<br></span>", $row['numeAngajat'], $row['prenumeAngajat'], $row['numeSala'], $row['functieAngajat'], $row['emailAngajat'], $row['telefonAngajat']);
 if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
{
	echo sprintf("<span style='color:#F0FFFF;'>Data Angajare: %s<br>Salariu: %s RON<br></span>", $row['dataAngajare'], $row['salariuAngajat']);
	echo "<a href='delete_angajat.php?id=" . $row['idAngajat'] . "'>Stergere</a>";
	echo "             ";
	echo "<a href='update_angajat.php?id=" . $row['idAngajat'] . "'>Actualizare Date</a>";
	echo "<br><br>";
}
}
}
?>

<br><br>
<form action="angajati.php" >
  <p style="margin-bottom: 25px;">Filtreaza dupa: <label for="functie">Functie</label>
  <select id="functie" name="functie" onChange=\"this.form.submit()\">
	<option disabled selected>--Selectati o functie--</option>
	<option value= "Manager"> Manager </option>
	<option value= "Receptioner"> Receptioner </option>
	<option value= "Personal Trainer"> Personal Trainer </option>
	<option value= "Cleaning"> Cleaning </option>
  </select>
  
  <label for="sala">Sala activitate</label>
  <select id="sala" name="sala" onChange=\"this.form.submit()\">
    <option disabled selected>--Selectati o sala--</option>
    <?php 
	  $query = "SELECT * FROM tblSali";
	  $result = mysqli_query($db, $query) or die('Error querying database.');
	  while ($row = mysqli_fetch_array($result)) {
      echo '<option value="'.$row['idSala'].'">'.$row['numeSala'].'</option>';
	  }	
    ?>
  </select>
  </p>

  <p style="margin-bottom: 25px;">Ordoneaza dupa: <label for="alpha">Nume</label>
  <input type="radio" id="alpha" name="name" value="1" onChange="this.form.submit()">
  
  <?php
	if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
	{
		echo sprintf("<label for=\"%s\">Salariu</label><input type=\"radio\" id=\"%s\" name=\"%s\" value=\"1\" onChange=\"this.form.submit()\">", "salariu", "salariu", "salariu");
		echo sprintf("<label for=\"%s\">Cei mai vechi</label><input type=\"radio\" id=\"%s\" name=\"%s\" value=\"1\" onChange=\"this.form.submit()\">", "oldest", "oldest", "oldest");
		echo sprintf("<label for=\"%s\">Cei mai noi</label><input type=\"radio\" id=\"%s\" name=\"%s\" value=\"1\" onChange=\"this.form.submit()\">", "newest", "newest", "newest");
	}
  ?>
 </p>
</form>

<?php

$query = "SELECT * FROM tblAngajati, tblSali WHERE salaActivitate = idSala ";

if (isset($_GET["functie"]))
{
	$functie = $_GET["functie"];
	$query .= "AND functieAngajat = '$functie' ";
}

if (isset($_GET["sala"]))
{
	$sala = $_GET["sala"];
	$query .= "AND salaActivitate = '$sala' ";
}

if(isset($_GET["name"])){	
	$query .= "ORDER BY numeAngajat ASC, prenumeAngajat ASC";
}
elseif(isset($_GET["salariu"])){
	$query .= "ORDER BY salariuAngajat DESC, numeAngajat, prenumeAngajat ASC";
}
elseif(isset($_GET["oldest"])){
	$query .= "ORDER BY dataAngajare ASC, numeAngajat, prenumeAngajat ASC";
}
elseif(isset($_GET["newest"])){
	$query .= "ORDER BY dataAngajare DESC, numeAngajat, prenumeAngajat ASC";
}
else {
	$query .= ";";
}	
$result = mysqli_query($db, $query) or die('Error querying database.');
?>

<table class=styled-table>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
				<th>Sala Activitate</th>
				<th>Functie </th>
				
				<?php
					if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
					{
						echo "<th>Data Angajare</th>";
						echo "<th>Salariu</th>";
					} 
				?>
				
                <th>Email</th>
                <th>Telefon</th>
            </tr>

            <?php
               while ($row = mysqli_fetch_array($result)) {
?>
                  <tr>
                <td><?php echo $row['numeAngajat']; ?></td>
                <td><?php echo $row['prenumeAngajat']; ?></td>
				
				<?php 
					echo sprintf("<td>%s</td>",  $row['numeSala']);
				?>
				
				<td><?php echo $row['functieAngajat']; ?></td>
				
				<?php
					if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
					{
						echo sprintf("<td>%s</td>",  $row['dataAngajare']);
						echo sprintf("<td>%s</td>",  $row['salariuAngajat']);
					} 
				?>
				
                <td><?php echo $row['emailAngajat']; ?></td>
                <td><?php echo $row['telefonAngajat']; ?></td>
            </tr>
    <?php
               }
	mysqli_close($db)
            ?>
        </table>
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