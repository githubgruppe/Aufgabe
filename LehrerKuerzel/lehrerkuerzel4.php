<?php
$eingabe = $_GET["Q"];
$eingabe = 'ER';
$con = mysqli_connect("localhost","user","123","lehrer");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
//echo "connected to MySQL";
$sql="SELECT Kuerzel FROM lehrerkuerzel WHERE name LIKE '%" .$eingabe ."%'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      $array[] = $row['Kuerzel'];
    }
echo json_encode($array);
mysqli_close($con);
?>