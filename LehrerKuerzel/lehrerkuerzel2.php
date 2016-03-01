<?php
$k = $_POST['kuerzel'];
$kuerzel= array(
"HA" => "Hegermann",
"HP" => "Hupp",
"ER" => "Erlei");
echo "Kuerzel: ",$k;
echo "Name: ",$kuerzel[$k];
?>