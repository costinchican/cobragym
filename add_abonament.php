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
<h1>Adaugare Abonament</h1><br><br>
<?php
include "db_connect.php";
$id = $_GET["id"];
$nume = $_GET["fname"];
$prenume = $_GET["lname"];


?>
<form action="add_abonament.php">
  <input type="hidden" id="id" name="id" value ='<?php echo $id ?>'>
  <label for="fname">Nume:</label><br>
  <input type="text" id="fname" name="fname" value = '<?php echo $nume ?>' style ='color:#696969' readonly><br>
  <label for="lname">Prenume:</label><br>
  <input type="text" id="lname" name="lname" value = '<?php echo $prenume ?>' style ='color:#696969' readonly ><br>
  
  <label for="s_date">Data Incepere:</label><br>
  <input type="date" id="s_date" name="s_date"><br>
  <label for="mths">Numar de luni:</label><br>
  <input type="text" id="mths" name="mths"><br>
  
  <label for="tip">Abonament:</label> <br>
  <select id="tip" name="type">
  <?php 
	$query = "SELECT * FROM tblAbonamente";
	$result = mysqli_query($db, $query) or die('Error querying database.');
	while ($row = mysqli_fetch_array($result)) {
    echo '<option value="'.$row['idAbonament'].'">'.$row['tipAbonament'].' '.$row['optiuneAbonament'].'</option><br>';
}	
?>
  </select>
  <br><br>
  <input style="margin:5 0" type="Submit" value="Adaugare Abonament"><br>
</form>

<?php 
	if(isset($_GET["type"])){

	$type = $_GET["type"];
	$s_date = $_GET["s_date"];
	$mths = $_GET["mths"];
	

$query = "INSERT INTO tblAchizitii VALUES(DEFAULT, $type, STR_TO_DATE('$s_date','%Y-%m-%d'), '$mths', $id)";
mysqli_query($db, $query) or die(mysqli_error('Error in database QUERY')); 
echo "<p style='color:white; font-size:120%'>Abonament incheiat cu succes.</p>"; 
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