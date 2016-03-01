<html>
<script>
function showKuerzel(str){
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","http://127.0.0.1/LehrerKuerzel/lehrerkuerzel4.php?Q="+str,true);
  xmlhttp.send();
}
}
</script>
<form>
<input type="text" size="30" onkeyup="showKuerzel(this.value)">
<div id="livesearch"></div>
</form>

Lehrer eintragen:
<form action="http://127.0.0.1/LehrerKuerzel/Lehrereintrag.php" method="post">
    <p>Anrede: <input type="text" name="Anrede" /></p>
	<p>Kuerzel: <input type="text" name="Kuerzel" /></p>
	<p>Name: <input type="text" name="Name" /></p>
	<p>Vorname: <input type="text" name="Vorname" /></p>
    <input type="submit" value="Erstellen" />
</form>
</html>
<?php
session_start();
if($_SESSION["benutzername"]==2)
{
}
else
header('Location:http://127.0.0.1/LehrerKuerzel/Login.html');
exit;
?>
