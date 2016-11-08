<?php
// The line below aims to connect the current file to the file which is connected to the data base todo_list_bdd
include('init.php');
$names = $_POST['names'];
$answer = $bdd->prepare("INSERT INTO  list (names) VALUES (?)");

$answer->execute(array($names));

// Redirection du visiteur vers la page du index
header('Location: index.php');
// $names = $_POST['names'];
// $insert = $bdd->query("INSERT INTO list (names)VALUES('$names')");
// header('Location: index.php');

?>
