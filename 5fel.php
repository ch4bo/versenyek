
<?php
require_once 'config.php';

$stmt=$db->query("SELECT fnev from futo where szulev>2003");
$lista="";
while($row=$stmt->fetch()){
$lista.="<li>{$row['fnev']}</li>";}
?>


<ul>
 <?=$lista?>
</ul>