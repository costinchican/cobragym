<?php
	session_start();
?>

<html>



<head>
<title>Date Clienti</title>

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
<h1>Date Clienti</h1>

<?php
	if(!isset($_SESSION["userFunctie"]))
	{
		header("location: login.php?error=loginfirst");
		exit();
	}
?>

<h2 style="margin: 12 0;">Cautare Client</h2>
<form action="clienti.php" >
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <input style="margin:5 0" type="submit" value="Cauta Client"><br>
</form>

<form action="add_client.php">
  <input style="margin:5 0" type="submit" value="Adauga Client Nou"><br>
</form>

<?php
include "db_connect.php";
if(isset($_GET["del"])){
    if($_GET["del"] == 1){
        echo "<p style='color:white; font-size:120%'>Stergere efectuata cu succes.</p>";
    }
    else if($_GET["del"] == 0){
        echo "<p style='color:white; font-size:120%'>Stergerea nu este permisa - Clientul are istoric de achizitii.</p>";
    }
}

?>

<?php
include "db_connect.php";
?>
<?php
if(isset($_GET["fname"])){

	$nume = $_GET["fname"];
	$prenume = $_GET["lname"];


$query1 = "SELECT * FROM tblClienti WHERE numeClient = '$nume' AND prenumeClient= '$prenume'";
$result1 = mysqli_query($db, $query1) or die('Error querying database.');
$i = 0;
 while ($row = mysqli_fetch_array($result1)) {
 echo "<p style='color:white; font-size:120%'>Nume: " .$row['numeClient'] . '<br>Prenume: ' . $row['prenumeClient'] . '<br>Email: ' . $row['emailClient'] . '<br>Telefon: ' . $row['telefonClient'] .'</p>';
 echo "<a href='delete_client.php?id=" . $row['idClient'] . "'>Stergere </a>";
 echo " | ";
 echo "<a href='update_client.php?id=" . $row['idClient'] . "'>Actualizare Date </a>";
 echo " | ";
 echo "<a href='abonamente.php?id=" . $row['idClient'] .'&fname='. $row['numeClient'].'&lname='. $row['prenumeClient'] . "'>Verificare Abonament </a>";
 echo " | ";
 echo "<a href='add_abonament.php?id=" . $row['idClient'] .'&fname='. $row['numeClient'].'&lname='. $row['prenumeClient'] . "'>Adaugare Abonament </a><br><br>";
 	$i++;
}
 if ($i ==0) {
	echo "<p style='color:white; font-size:120%'>Client Inexistent</p><br>";
}
}

?>

 <form action="clienti.php" >
  <p style="margin-bottom: 25px;">Ordoneaza dupa: <label for="alpha">Nume</label>
  <input type="radio" id="alpha" name="name" value="1" onChange="this.form.submit()">
  <label for="new">Cei mai noi</label>
  <input type="radio" id="new" name="new" value="1" onChange="this.form.submit()">
  <label for="old">Cei mai vechi</label>
  <input type="radio" onChange="this.form.submit()"></p>
</form>

<?php
if(isset($_GET["name"])){	
$query = "SELECT * FROM tblClienti ORDER BY numeClient ASC, prenumeClient ASC";
}
elseif(isset($_GET["new"])){
$query = "SELECT * FROM tblClienti ORDER BY idClient DESC";
}
else {
$query = "SELECT * FROM tblClienti";
}	
$result = mysqli_query($db, $query) or die('Error querying database.');
?>
<table class=styled-table>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Email</th>
                <th>Telefon</th>
            </tr>

            <?php
               while ($row = mysqli_fetch_array($result)) {
?>
                  <tr>
                <td><?php echo $row['numeClient']; ?></td>
                <td><?php echo $row['prenumeClient']; ?></td>
                <td><?php echo $row['emailClient']; ?></td>
                <td><?php echo $row['telefonClient']; ?></td>
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