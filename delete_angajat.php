<?php
include "db_connect.php";
if(isset($_GET["id"])){
$id = $_GET["id"];


$findName = "SELECT * FROM tblAngajati WHERE idAngajat = $id";
$nameResult = mysqli_query($db, $findName) or die(mysqli_error($db));
$nameRow = mysqli_fetch_array($nameResult);

$nume = $nameRow["numeAngajat"];
$prenume = $nameRow["prenumeAngajat"];

$query3 = "DELETE FROM tblAngajati WHERE idAngajat = $id";
mysqli_query($db, $query3) or die(mysqli_error($db)); # schimba error message

$deleteUser = "DELETE FROM tblUtilizatori WHERE numeUtilizator = '$nume' AND prenumeUtilizator = '$prenume'";
mysqli_query($db, $deleteUser) or die(mysqli_error($db));

  echo "Angajat Sters";
  echo "<script>location.href='angajati.php'</script>";
}
?>
