<h1>Recherche</h1>

<form class="" action="index.php" method="post">
    <input type="text" name="recherche" placeholder="Rechercher ici...">
    <input type="submit" name="envoi">
</form>

<?php

    if (isset($_POST['recherche'])) {
         $recherche = $_POST['recherche'];
         var_dump($recherche);
    }


 ?>
