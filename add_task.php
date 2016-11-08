<?php
// The line below aims to connect the current file to the file which is connected to the data base todo_list_bdd
include('init.php');

$names = $_POST['names'];
// $id_list = $_POST['id_list'];
$hidden = $_POST['hidden'];
$answer = $bdd->prepare("INSERT INTO tasks (id_list,names) VALUES (?,?)");


$answer->execute(array($hidden,$names));

// Redirection du visiteur vers la page du index
header('Location: index.php');

?>
