<?php
$notes = array();

$notes[]=15;
$notes[]=16;
$notes[]=17;

echo "<table>";
echo "<tr><th>Notes</th></tr>";
for($i=0; $i< count($notes); $i++){
    $note = $notes[$i];
    echo "<tr></td>$note</td></tr>";
}
echo "</table>";

?>