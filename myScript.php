<?php
$numero     = $_POST['numero'];
$numero2    = $_POST['numero2'];



$resultado = $numero * $numero2;


header('Location: index.php?resultado='.$resultado.'&numero='.$numero.'&numero2='.$numero2);
exit;

?>