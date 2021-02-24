
<?php
require_once 'config.php';
$stmt=$db->query("SELECT year(now())-szulev as kor,count(fnev) as letszam from futo group by szulev");
$lista="";

while($row=$stmt->fetch()){
$lista.="<li>{$row['kor']}-évesekből:  {$row['letszam']} </li>";}
?>

<ul>
 <?=$lista?>
</ul>