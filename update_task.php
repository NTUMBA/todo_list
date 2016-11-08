<?php
// The line below aims to connect the current file to the file which is connected to the data base todo_list_bdd
include('init.php');

$answer = $bdd->prepare('UPDATE INTO task (names) VALUES(?)') ;

$names = $_POST['names'];
$answer->execute(array($names));

$answer->closeCursor();

// Redirection du visiteur vers la page du index
header('Location: index.php');

?>
