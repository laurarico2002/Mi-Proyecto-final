

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundacion PetLove</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .custom-image {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        /* Footer */
        footer {
            margin-top: auto;
            background-color: #f8f9fa;
            padding: 20px 0;
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
                        <a class="nav-link" href="../Views/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Views/Nosotros.php">Nosotros</a>
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
        <div class="row">
            <div class="col-md-8">
                <h2>Conoce a PEKI</h2>

                <table>
                    <thead>
                        <tr>
                            <th>EDAD</th>
                            <th>SEXO</th>
                            <th>COLOR</th>
                            <th>TAMAÑO</th>
                            <th>ESTADO DE SALUD</th>
                            <th>VACUNADO</th>
                            <th>CASTRADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9 años</td>
                            <td>Macho</td>
                            <td>Café claro</td>
                            <td>Grande</td>
                            <td>Bueno</td>
                            <td>Si</td>
                            <td>Si</td>
                        </tr>
                        <!-- Puedes agregar más filas según sea necesario -->
                    </tbody>
                </table>

                <!-- Cards adicionales -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                           
                            <div class="card-body text-center">
                                <h5 class="card-title">Mi historia</h5>
                                <p class="card-text">Soy Peki, un hermoso golden con ojos llenos de esperanza. Fui abandonado en una caja en la puerta de la Fundación PetLove. A pesar de mi difícil comienzo, su cola siempre estaba en movimiento, esperando el amor que tanto ansiaba.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
    <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Aplicar para su adopción</h5>
            <p class="card-text">Si has tomado la decisión de adoptarme, visita el siguiente enlace donde encontrarás los requisitos, el proceso de adopción y el formulario para postularte.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
        </div>
    </div>
</div>

                </div>
            </div>

            <div class="col-md-4">
                <img src="../img/peki.jpeg" alt="Imagen" class="custom-image">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container">
        <p>&copy; 2023 Fundación PetLove. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
