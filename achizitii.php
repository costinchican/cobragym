<?php
	session_start();
?>

<html>



<head>
<title>Achizitii</title>

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

<?php
	if(!isset($_SESSION["userFunctie"]))
	{
		header("location: login.php?error=loginfirst");
		exit();
	}
?>

<br><br><br><br>
<h1>Istoric Achizitii</h1>

<body>

<h2 style="margin: 12 0; font-family:calibri">Cautare Achizitie</h2>
<form style="font-family:calibri" action="achizitii.php" >
  <label for="fname">Nume Client:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Prenume Client:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <input style="margin:5 0" type="submit" value="Cauta Achizitie"><br>
</form>

<?php
include "db_connect.php";
?>
<?php
if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];
	if(isset($_GET["id"])){
	$id = $_GET["id"];  
	}
  

$query1 = "SELECT numarAchizitie, dataAchizitie, numeClient, prenumeClient, tipAbonament, optiuneAbonament, pretLunar * perioadaAchizitie AS pretTotal FROM 
tblAchizitii, tblClienti, tblAbonamente WHERE idClient = nrClient AND abonamentAchizitionat = idAbonament AND numeClient = '$nume' AND prenumeClient = '$prenume';";

$result1 = mysqli_query($db, $query1) or die('Error querying database.');
$i=0;
while ($row = mysqli_fetch_array($result1)) {
 echo "<p style='color:white; font-size:120%'>Nume: ". $row['numeClient'] . '<br>Prenume: ' . $row['prenumeClient'] . '<br>Tip Abonament: ' . $row['tipAbonament'] .'<br>Optiune Abonament: ' . $row['optiuneAbonament'] .  '<br>Data achizitie: ' . $row['dataAchizitie'] . '<br>Pret Total: ' . $row['pretTotal'] . '<br><br><br></p>';
 $i++;
}
if ($i == 0) {
	echo "<p style='color:white; font-size:120%'>Fara istoric.</p><br>";
}
}
?>

<h2 style="font-family:calibri">Istoric Achizitii</h2>

<?php
include "db_connect.php";


$query = "SELECT numarAchizitie, dataAchizitie, numeClient, prenumeClient, tipAbonament, optiuneAbonament, pretLunar * perioadaAchizitie AS pretTotal FROM 
tblAchizitii, tblClienti, tblAbonamente WHERE idClient = nrClient AND abonamentAchizitionat = idAbonament;";

$result = mysqli_query($db, $query) or die('Error querying database.');
?>
<table class=styled-table>
            <tr>
                <th>Numarul Achizitiei</th>
                <th>Data Achizitiei</th>
                <th>Nume Client</th>
                <th>Prenume Client</th>
				<th>Tipul Abonamentului</th>
                <th>Optiune</th>
				<th>Pret Total</th>
            </tr>

            <?php
               while ($row = mysqli_fetch_array($result)) {
?>
                  <tr>
                <td><?php echo $row['numarAchizitie']; ?></td>
                <td><?php echo $row['dataAchizitie']; ?></td>
                <td><?php echo $row['numeClient']; ?></td>
                <td><?php echo $row['prenumeClient']; ?></td>
				<td><?php echo $row['tipAbonament']; ?></td>
                <td><?php echo $row['optiuneAbonament']; ?></td>
				<td><?php echo $row['pretTotal']; ?></td>
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