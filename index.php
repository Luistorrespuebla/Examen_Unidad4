<?php
require_once("./app/config/dependencias.php");
session_start();
require_once "./app/config/rutas.php";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
</head>
<html lang="en">

    <?php require_once "./app/config/router.php" ?>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <script src="<?=JS."alerts.js";?>"></script>
    <script src="<?=JS."cerrar_session.js";?>"></script>
</html>