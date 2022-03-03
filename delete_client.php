<?php
include "db_connect.php";
if(isset($_GET["id"])){
$id = $_GET["id"];

$query3 = "DELETE FROM tblClienti WHERE idClient = $id";
mysqli_query($db, $query3) or die("<script>location.href='clienti.php?del=0'</script>");

  echo "Client Sters";
  echo "<script>location.href='clienti.php?del=1'</script>";
}
?>
