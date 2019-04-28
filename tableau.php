<?php

if (!isset($_POST['up']) && !isset($_POST['down']) && !isset($_POST['date']) && !isset($_POST['editor'])) {
    $basicquery = $bdd->query("SELECT videogames.id, Title, name FROM videogames,platform WHERE videogames.idPlatform = platform.id ORDER BY id, Title; ");
    $fetch = $basicquery->fetchAll(PDO::FETCH_OBJ);

}

?>

<form class="closeform" action="index.php" method="post">
    <input class="btn btn-danger" type="submit" name="disconnect" value="Deconnexion">
</form>

<div class="tridiv">
<span class="tri">Trier par : </span>
</div>

<form class="selection" action="index.php" method="post">
        <input class="btn btn-primary btntri"type="submit" name="editor" value="ID">
        <input class="btn btn-primary btntri" type="submit" name="up" value="Ordre Alphabétique">
        <input class="btn btn-primary btntri"type="submit" name="down" value="Ordre Alphabétique Décroissant"><br>

</form>

<div class="divbtnmodif">
    <form class="" action="index.php" method="post">
        <input class="btn btn-danger mb-3" type="submit" name="fiche" value="Modif">
    </form>

</div>


<?php

if (isset($_POST['up'])) {
    $orderbyup = $bdd->query("SELECT videogames.id, Title, name FROM videogames,platform WHERE videogames.idPlatform = platform.id ORDER BY Title; ");
    $fetch = $orderbyup->fetchAll(PDO::FETCH_OBJ);
}

if (isset($_POST['down'])) {
    $orderbydown = $bdd->query("SELECT videogames.id, Title, name FROM videogames,platform WHERE videogames.idPlatform = platform.id ORDER BY Title DESC; ");
    $fetch = $orderbydown->fetchAll(PDO::FETCH_OBJ);
}

if (isset($_POST['editor'])) {
    $orderbyplatform = $bdd->query("SELECT videogames.id, Title, name FROM videogames,platform WHERE videogames.idPlatform = platform.id ORDER BY name; ");
    $fetch = $orderbyplatform->fetchAll(PDO::FETCH_OBJ);
}

?>


<div class="containertableau">
<table class="tableau table table-striped mt30">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Plateforme</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach ($fetch as $tableau) {
                        echo $tableau->id."<br>";
                } ?>
            </td>
            <td>
                <?php
                    foreach ($fetch as $tableau) {
                            echo $tableau->Title."<br>";
                    }
                    ?>

            </td>
            <td>
                <?php
                    foreach ($fetch as $tableau) {
                            echo $tableau->name."<br>";
                    }
                    ?>
            </td>
        </tr>
    </table>
    </div>
