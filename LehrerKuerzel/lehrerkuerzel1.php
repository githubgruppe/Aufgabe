<?php
$i = $_POST['kuerzel'];
$name = "";
switch($i)
{
case "HA" : $name= "Hegermann";
break;
default: echo "Es wurde kein Lehrer gefunden";
break;
}
echo "Kuerzel: ",$i;
echo "Name: ",$name;
?>