<?php
// The line below aims to connect the current file to the file whitch is connected to the data base todo_list_bdd
include('init.php');
$name=htmlspecialchars($_POST['names']);
$id_list=htmlspecialchars(['id_lists']);
$done=htmlspecialchars(['done']);

$answer = $bdd->prepare('DELETE names FROM LIST WHERE id=?');
$answer = $bdd->prepare('DELETE names FROM tasks WHERE done=?');

$req->execute(array($_POST['names'], $_POST['id_lists'], $_POST['done']));
// Redirection du visiteur vers la page du index
header('Location: index.php');
?>
