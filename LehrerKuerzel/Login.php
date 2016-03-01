<?php
session_start(); 
$vorname = $_POST['Vorname'];
$benutzername = $_POST['benutzer'];
$passwort = $_POST['passwort'];
$con = mysqli_connect("localhost","user","123","lehrer");
if($benutzername!="" || $benutzername!=null)
{
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
//echo "connected to MySQL";
$sql="SELECT Benutzername,Passwort FROM benutzer WHERE Benutzername='" .$benutzername ."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row==NULL)
{
echo "Falscher Benutzername und Passwort.";
}
else
if($row["Passwort"]==$passwort)
{
$_SESSION["benutzername"] = 2;
echo $_SESSION["benutzername"];
header('Location:http://127.0.0.1/LehrerKuerzel/lehrerkuerzel_HTML.php');
exit;
}
}
?>
