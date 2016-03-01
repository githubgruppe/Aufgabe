<?php
$k = $_POST['kuerzel'];
$con = mysqli_connect("localhost","user","123","lehrer");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
//echo "connected to MySQL";
$sql="SELECT Name,Kuerzel FROM lehrerkuerzel WHERE Kuerzel='" .$k ."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row==NULL)
{
echo "Kein Lehrer wurde gefunden.";
}
else
printf ("Kuerzel: %s Lehrername: %s",$row["Kuerzel"],$row["Name"]);
mysqli_close($con);
?>