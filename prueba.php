<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Cards</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Conoce a COCO</h2>

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
                            <td>5 años</td>
                            <td>Macho</td>
                            <td>Café</td>
                            <td>Mediano</td>
                            <td>Bueno</td>
                            <td>Si</td>
                            <td>Si</td>
                        </tr>
                        <!-- Puedes agregar más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <img src="img/coco.jpg" alt="Imagen" class="custom-image">
            </div>
        </div>

        <!-- Cards adicionales -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/card1.jpg" class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Descripción de la card 1.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="img/card2.jpg" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Descripción de la card 2.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
