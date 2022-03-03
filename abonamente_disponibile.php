<?php
	session_start();
?>

<html>



<head>
<title>Abonamente disponibile</title>

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
<h1>Abonamente disponibile</h1>
<br><br>

<?php
include "db_connect.php";
?>

<?php
	$fetchAbonamente = "SELECT * FROM tblAbonamente";
	$result = mysqli_query($db, $fetchAbonamente) or die('Error querying database.');
?>
<table class=styled-table>
	<tr>
		<th>Tip Abonament</th>
		<th>Optiune</th>
		<th>Pret Lunar</th>
		<th>Servicii Incluse</th>
	</tr>

	<?php
		while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td><?php echo $row['tipAbonament']; ?></td>
			<td><?php echo $row['optiuneAbonament']; ?></td>
			<td><?php echo $row['pretLunar']; ?></td>
			<td><?php echo $row['seviciiIncluse']; ?></td>
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