

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación PetLove</title>
    <!-- Enlazamos Bootstrap desde el CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Estilo personalizado -->
    <style>
        .card {
            margin: 20px;
        }

        .jumbotron {
            background-image: url('https://i.imgur.com/5wVviYz.jpg');
            background-size: cover;
            color: white;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #f3d9ff;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo de la Fundación -->
            <a class="navbar-brand" href="#">
                <img src="../img/logo.jpg" alt="Fundación PetLove Logo" height="30" class="d-inline-block align-text-top">
                Fundación PetLove
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/MiProyecto/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MiProyecto/Nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adopciones.php">Adopción</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>

                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-4">Fundación PetLove</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>¿Qué trata la fundación?</h2>
                <p>La Fundación PetLove se dedica a mejorar la calidad de vida de los perros en situaciones difíciles. A través de acciones concretas como la atención veterinaria, la promoción de la adopción, la educación en responsabilidad y la concienciación sobre el maltrato animal, la Fundación de Perros trabaja para reducir la población de perros callejeros y aumentar el número de perros adoptados.</p>
            </div>
            <div class="col-md-6">
                <img src="../img/perro1.png" alt="Perro Feliz" class="img-fluid">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Misión</h2>
                <p>"En la Fundación PetLove, nuestra misión es ser defensores inquebrantables de los derechos y el bienestar de los perros. Nos comprometemos a proporcionar atención veterinaria excepcional, promover la adopción responsable, educar a la comunidad sobre la importancia de la tenencia responsable de mascotas y trabajar incansablemente para reducir la población de perros callejeros.</p>
            </div>
            <div class="col-md-6">
                <img src="../img/perritos.jpg" alt="Perro Cariñoso" class="img-fluid">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Visión</h2>
                <p>"Nos visualizamos como líderes en la promoción de un mundo donde cada perro reciba amor, cuidado y respeto. En nuestra visión, la Fundación PetLove aspira a eliminar el sufrimiento innecesario de los perros, proporcionando recursos y apoyo a sus cuidadores. Imaginamos una sociedad en la que la adopción responsable sea la norma, la educación sobre el bienestar animal sea ampliamente difundida y la población de perros callejeros se reduzca significativamente. </p>
            </div>
            <div class="col-md-6">
                <img src="../img/sonriente.jpg" alt="Perro Jugando" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



    <!-- Footer -->
    <footer class="container">
        <p>&copy; 2023 Fundación PetLove. Todos los derechos reservados.</p>
    </footer>

    <!-- Enlazamos los scripts de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7K7LjHZq6vk10e2njDWGnhUuI1R/cG1FVk2uqfD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js