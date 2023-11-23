
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
                        <a class="nav-link" href="Nosotros.php">Nosotros</a>
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

</header>

<main>
  
        <div class="row">
        <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 1";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../img/coco.jpg" class="card-img-top img-fluid" alt="Coco - 5 años" style="object-fit: cover; height: 200px;">
                        <div class="card-body text-center">
                            <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                            <a href="coco.php" class="btn btn-primary">Conóceme!</a>
                        </div>
                        <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            
        </div>
            
            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 9";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/luna.jpg" class="card-img-top img-fluid" alt="Luna - 6 meses" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                        <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="luna.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>

            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 10";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/galan.jpg" class="card-img-top img-fluid" alt="GALÁN - 3 años" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="galan.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                </div>
                <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
             
            </div>
        </div>

        <div class="row">
        <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 3";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../img/rey.jpg" class="card-img-top img-fluid" alt="REY - 5 meses" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="rey.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>

            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 4";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/peki.jpeg" class="card-img-top img-fluid" alt="PEKI - 9 años" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="peki.php" class="btn btn-primary">Conóceme</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>


            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 5";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/onix.jpg" class="card-img-top img-fluid" alt="ONIX - 4 años" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="onix.php" class="btn btn-primary">Conóceme</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>


            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 6";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/negro.jpg" class="card-img-top img-fluid" alt="NEGRO - 2 años" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="negro.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>


            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 7";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/copito.jpg" class="card-img-top img-fluid" alt="COPITO - 1 año" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="copito.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                    <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
                </div>
            </div>

            
            <div class="col-md-4 mb-4">
            <?php
                include("../Config/conexion.php");
                $query = "SELECT * FROM perritosdisponibles WHERE ID= 8";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0){

                        while ($row = $resultado->fetch_assoc()){
                ?>
                <div class="card h-100">
                    <img src="../img/gruñon.jpg" class="card-img-top img-fluid" alt="GRUÑON - 6 años" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center">
                    <h5><?php echo $row['NombrePerrito']; ?></h5>
                            <p><?php echo $row['Edad']; ?></p>
                            <p><?php echo $row['Descripcion']; ?></p>
                        <a href="gruñon.php" class="btn btn-primary">Conóceme!</a>
                    </div>
                </div>
                <?php 
                        }
            $resultado->free();
            } else {
                echo "No hay resultados";

            } 
            ?>
            </div>
        </div>

         
    </div>
</main>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- Footer -->
     <footer class="container">
        <p>&copy; 2023 Fundación PetLove. Todos los derechos reservados.</p>
    </footer>

    <!-- Enlazamos los scripts de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7K7LjHZq6vk10e2njDWGnhUuI1R/cG1FVk2uqfD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>