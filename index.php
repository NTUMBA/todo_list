<?php include('init.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>todo_list</title>
        <link type="text/css" rel="stylesheet" href="text.css">
    </head>
    <body>

    <form action="insert.php" method="post">
      <h3>Listes </h3>

      <label for="name">Ajouter une nouvelle Liste ici </label> : <input type="text" name="name" id="name" />

      <p><input type="submit" value="Submit" /></p>
    </form>
    <a href="delete.php"> <button type="text" class="button">DELETE</button> </a>
    <a href="update.php"> <button type="text" class="button">UPDATE</button> </a>

<?php

$answer = $bdd->query('SELECT *FROM todo_list_bdd ORDER BY id');

  // if (isset($_FILES['index']) AND $_FILES['index']['error'] == 0 ){
  // if (isset($_POST['names']) AND ctype_alpha($_POST['names'])){
  //   if (isset($_POST['done']) AND $_POST['done']== true){
  //     if ($_POST['done']== true){

      while ($data = $answer->fetch()){
        ?>
        <div class="task">

        <h2> Listes</h2>

          <?php
          $answer = $bdd->query('SELECT *FROM tasks ORDER BY id');
          ?>
      <ul>
        <?php
        while ($data = $answer->fetch()){

          echo '<li>' . $data['name'] .'</li>';

      ?>
      </ul>

<h4>Tâches</h4>
<form action="insert.php" method="post" enctype="multipart/form-data">
  <p><label for="name">Ajouter une nouvelle tâche ici </label> : <input type="text" name="name"/></p>
  <p><input type="submit" value="Submit" /></p>
</form>


<?php
 }
 }

$answer->closeCursor();
// closecursor();
?>
    </body>
</html>
