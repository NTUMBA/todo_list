<?php include('init.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>todo_list</title>
    <link type="text/css" rel="stylesheet" href="text.css">
  </head>
  <body>
    <section>

    <form action="insert.php" method="post">
      <h1>LISTE </h1>
      <label for="names">Ajouter une nouvelle Liste ici </label> : <input type="text" name="names" id="names" />
      <p><input type="submit" value="Submit" /></p>
    </form>
    <?php
    $answer = $bdd->query('SELECT * FROM list');
    while ($donnees = $answer->fetch()){
      $id_list = $donnees['id'];
?>
      <div class="liste">
<?php
      echo '<h3>' .$donnees['names'] .'</h3>';
      ?>
      </div>
      <div class="task">
      <?php
      echo '<ul>';
      $reponse = $bdd->query("SELECT * FROM tasks WHERE id_list = $id_list ");
        while ($data = $reponse->fetch()){

        echo '<li>'  . $data['names'] .'</li>';
            }

        echo '</ul>';
      ?>
      </div>


    <!-- <a href="delete.php"> <button type="text" class="button">DELETE</button> </a>
    <a href="update.php"> <button type="text" class="button">UPDATE</button> </a> -->

    <form action="add_task.php" method="post">
      <!-- <form action="insert.php" method="post" enctype="multipart/form-data"> -->
      <p>
        <label for="names">Ajouter une nouvelle tâche ici </label> :
        <input type="text" name="names"/>
      </p>

      <p><input type="submit" value="submit" /></p>
      <p><input type="hidden" name ="hidden" value="<?php echo $donnees['id']; ?>" /></p>

    </form>
<?php  } ?>

    <a href="delete_task.php"> <button type="text" class="button">DELETE</button> </a>
    <a href="update_task.php"> <button type="text" class="button">UPDATE</button> </a>
      </section>
  </body>
  </html>
