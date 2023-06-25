<?php
$note = "";
$errNote= "";
$errGenerale= "";

if(isset($_GET["note"])){
  if($note == ""){
    $errNote="la note est obligatoire";
  }

  if(!is_numeric($note)){
    $errNote= "la note doit etre numerique";
  }

  if( $note < 0 || $note > 20 ){
    $errNote = "la note doit etre comprise entre 0 et 20 ";
  }

  if($errNote == ""){
    $notes = array()
    array_push($notes, $note);
  }


}
?> 





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
      <input type="number" name= "note" required value="<?= $note ?>">
        <p><?=  $errNote ?></p>
      <input type="submit">
    </form>
</body>
</html> 