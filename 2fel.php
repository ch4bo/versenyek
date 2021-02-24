<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into versenyek values (null,'{$vnev}','{$datum}','{$helyszin}')";
$stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres adatbeírás.";
else $msg="Nem sikerült";
   
}

?>

<div class="col-6">
    <form method="post">
       
        Név: <input type="text" name="vnev" id="" class="form-control" required>
        Dátum: <input type="text" name="datum" id="" class="form-control" required>
        Helyszín: <input type="text" name="helyszin" id="" class="form-control" required>



        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>
<div>

<?=$msg?>
</div>