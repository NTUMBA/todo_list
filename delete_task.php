<?php
// The line below aims to connect the current file to the file whitch is connected to the data base todo_list_bdd
include('init.php');

$answer = $bdd->prepare('DELETE FROM task');

$answer->closeCursor();

// Redirection du visiteur vers la page du index
header('Location: index.php');
?>
