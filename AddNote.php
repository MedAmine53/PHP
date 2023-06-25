<?php
$note = "";
$errNote = "";
$errGenerale = "";

function validateNote($note)
{
  if ($note === "") {
    return "La note est obligatoire";
  } elseif (!is_numeric($note)) {
    return "La note doit être numérique";
  } elseif ($note > 20 || $note < 1) {
    return "La note doit être comprise entre 1 et 20";
  }

  return "";
}

if (isset($_GET["note"])) {
  $note = $_GET["note"];
  $errNote = validateNote($note);

  if (empty($errNote)) {
    $notes = [$note];
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
    <p><?= $errNote ?></p>
    <input type="submit">
  </form>
</body>

</html>