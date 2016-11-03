<?php
// The line below aims to connect the current file to the file whitch is connected to the data base todo_list_bdd
include('init.php');
$name=htmlspecialchars($_POST['names']);
$id_list=htmlspecialchars(['id_lists']);
// Insertion du message à l'aide d'une requête préparée
$answer = $bdd->prepare('UPDATE INTO list (names) VALUES(?)' AND 'UPDATE INTO tasks (names, id_lists) VALUES(?, ?)');

$req->execute(array($_POST['names'], $_POST['id_lists']));

// Redirection du visiteur vers la page du index
header('Location: index.php');

?>
