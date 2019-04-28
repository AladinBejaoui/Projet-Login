<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <meta charset="UTF-8">
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>My Page</title>
        <link rel="stylesheet" href="style.css">
        <style media="screen">
            body {
                background-image: url(images/sekiro.jpeg);
                background-position: 80%;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <?php Session_start(); ?>
        <?php require 'bddlink.php'; ?>
        <?php require 'variables.php'; ?>
        <?php require 'header.php'; ?>
        <?php require 'functions.php'; ?>
        <?php if (!isset($_SESSION['user']) || $_SESSION['user'] = 0) {
            require 'login.php';
        } ?>
        <?php  if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($queryfetch[0] !== $userentry || $queryfetch[1] !== $passentry){
        echo "<div class='containererror'><div class='bg-primary notiferreur'>Identifiant ou mot de passe incorrect.</div></div>";
    }}
        ?>
        <?php if (isset($_POST['fiche'])) {
            require 'modification.php';
            echo "<style media='screen'>
                body {
                    background-image: url(images/background2.jpg);
                }
                </style>";
        } ?>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] = 1 && !isset($_POST['fiche'])) {
            echo "<h1 id='hey'>Bienvenue".' '.$userentry.' '.';-D'."</h1>";
            require 'tableau.php';
            echo "<style media='screen'>
                body {
                    background-image: url(images/background2.jpg);
                }
                </style>";
        } ?>

        <?php require 'footer.php'; ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
