<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $userentry = $_POST['username'];
    $passentry = $_POST['password'];
    $queryuser = $bdd->query("SELECT * FROM users WHERE user = 'Aladin' AND password = 'Alai06220'");
    $queryfetch = $queryuser->fetch();
    if ($queryfetch[0] == $userentry && $queryfetch[1] == $passentry) {
        $_SESSION['user'] = 1;
        $_SESSION['tab'] = 0;
    }


    if ( $userentry !== $queryfetch[0]  &&  $passentry !== $queryfetch[1]  && $userentry !== null && $passentry !== null) {
        echo "<script>$('.errorlogin').show();</script>";
    }
    }

    if (isset($_POST['disconnect'])) {
        unset($_SESSION['user']);
    }
