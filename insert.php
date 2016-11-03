<?php
// The line below aims to connect the current file to the file which is connected to the data base todo_list_bdd
include('init.php');
// $name=htmlspecialchars($_POST['name']);
// $id_list=htmlspecialchars($_POST['id_lists']);
// Insertion du message à l'aide d'une requête préparée
$answer = $bdd->prepare('INSERT INTO list (name) VALUES(?)');

$req->execute(array($_POST['name']));

// Redirection du visiteur vers la page du index
header('Location: index.php');
// AND 'INSERT INTO tasks (names, id_lists) VALUES(?, ?)'
// , $_POST['id_lists']

?>
