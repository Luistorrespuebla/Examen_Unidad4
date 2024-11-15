<?php
if (isset($_SESSION['usuario'])) {
    header("location:inicio");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."main.css";?>">
    <title>Iniciar session</title>
</head>
<body class="">
<?php require_once "./views/componentes/navar.php"; ?>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="./login.php" method="post" class="w-25 p-4">
            <div class="text-center mb-5 c-user">
            </div>
            <div class="input-group mt-3">
                <input type="email" id="email-id" class="form-control" placeholder="Ingrese su email" name="email" value="">
            </div>
            <div class="input-group mt-3">
                <input type="password" id="pass-id" class="form-control" placeholder="Ingrese su contraseña" name="pass" value="">
            </div>
            <div class="mt-5 c-button">
                 <button type="button" id="btn-saludar" class="btn w-100 text-white fs-4">Ingresar</button>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                <p class="">¿No tienes una cuenta?</p> 
                <a href="registro" class="text-white mx-3">Crear ahora</a>
            </div>
        </form>
    </div>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/Usuario.js"></script>
</body>