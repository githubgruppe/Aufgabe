<?php
$k = $_POST['Kuerzel'];
$anrede=$_POST['Anrede'];
$nachname=$_POST['Name'];
$vorname= $_POST['Vorname'];
$con = mysqli_connect("localhost","user","123","lehrer");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
//echo "connected to MySQL";
$sql="INSERT INTO `lehrerkuerzel`(`Kuerzel`, `Anrede`, `Name`, `Vorname`) VALUES ('".$k."','".$anrede."','".$nachname."','".$vorname."')";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo "Fehler beim erstellen.";
}
else
echo $anrede." ".$nachname." wurde hinzugefuegt";
mysqli_close($con);
?>