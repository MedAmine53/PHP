<?php
$note = "";
$errNote= "";
$errGenerale= "";

if(isset($_GET["note"]))
{
  $note = $_GET["note"];
  
  if($note == ""){
    $errNote = "La note est obligatoire";
  }
  elseif(!is_numeric($note)){
    $errNote = "La note doit être numérique";
  }
  elseif($note > 20 || $note < 0){
    $errNote = "La note doit être comprise entre 0 et 20";
  }

  if($errNote == ""){
    $notes = array();
    array_push($notes, $note);

    print_r($notes);
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
      <input type="number" name="note" required value="<?= htmlspecialchars($note) ?>">
      <p><?=  $errNote ?></p>
      <input type="submit">
    </form>
</body>
</html>
