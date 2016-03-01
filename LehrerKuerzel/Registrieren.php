<?php
session_start(); 
$benutzername = $_POST['benutzer'];
$passwort = $_POST['passwort'];
$con = mysqli_connect("localhost","user","123","lehrer");
if($benutzername!="" || $benutzername!=null && $passwort!="" || $passwort!=null)
{
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
//echo "connected to MySQL";
$sql="INSERT INTO `benutzer`(`Benutzername`, `Passwort`) VALUES ('".$benutzername."','".$passwort."')";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo "Benutzer existiert schon.";
}
mysqli_close($con);
}
else
echo "Benutzername oder Passwort fehlt.";
?>