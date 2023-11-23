<?php
require_once("../Config/conexion.php");

if (isset($_POST["enviar"]) && $_POST["enviar"] == "si") {
    require_once("../Models/usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css">
</head>

<body class="hold-transition login-page" style="background-color: #e1e1e1;">
    <div class="container" style="max-width: 400px;">
        <div class="login-box mt-5">
            <div class="card card-outline card-primary" style="background-color: #fff;">
                <div class="card-header text-center" style="background-color: #d6b8ff;">
                    <a href="#" class="h1 text-light">
                        <i class='bx bxs-dog'></i> FUNDACIÓN PETLOVE
                    </a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg text-center">INICIAR SESIÓN</p>

                    <form action="" method="post">
                        <?php
                        if (isset($_GET["m"])) {
                            switch ($_GET["m"]) {
                                case "1":
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> Datos Incorrectos
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                    break;

                                case "2":
                                    ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> Campos vacíos
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                    break;
                            }
                        }
                        ?>

                        <div class="mb-3">
                            <input type="email" name="CorreoElectronico" id="CorreoElectronico" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <span class="input-group-text" style="background-color: #d6b8ff; color: #fff;"><i class="fas fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="Contraseña" id="Contraseña" class="form-control" placeholder="Contraseña" required>
                            <div class="input-group-append">
                                <span class="input-group-text" style="background-color: #d6b8ff; color: #fff;"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="hidden" name="enviar" id="enviar" class="form-control" value="si">
                                <button type="submit" class="btn btn-info" style="background-color: #d6b8ff; border-color: #d6b8ff;">Iniciar sesión</button>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12 text-center">
                                <a href="views/registro.php" style="color: #d6b8ff;">¿No tienes una cuenta? Regístrate aquí</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
