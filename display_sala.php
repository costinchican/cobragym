<?php
	session_start();
?>

<html>



<head>
<title>Salile Noastre</title>

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
<h1 style="text-align: left;">Contact Sala</h1>
<br><br>

<?php
include "db_connect.php";
?>

<?php
	if(isset($_GET["id"])){

	$idSala = $_GET["id"];
        
    $query5 = "SELECT * FROM tblSali WHERE idSala='$idSala'";

    $result = mysqli_query($db, $query5) or die(mysqli_error('Error querying database.'));

    $row = mysqli_fetch_array($result);

    echo "<p style='color:white; font-size:120%'>Denumire: ".$row['numeSala']."</p>";
    echo "<p style='color:white; font-size:120%'>Adresa: ".$row['adresaSala']."</p>";
    echo "<p style='color:white; font-size:120%'>Categorie: ".$row['categorieSala']."</p>";
    echo "<p style='color:white; font-size:120%'>Email: ".$row['emailSala']."</p>";
    echo "<p style='color:white; font-size:120%'>Orar functionare: ".$row['orarSala']."</p><br><br>";
    echo "<iframe src=".$row['linkSala']." width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>";

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