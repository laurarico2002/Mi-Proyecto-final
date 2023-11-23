
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación PetLove</title>
    <!-- Enlazamos Bootstrap desde el CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo de la Fundación -->
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Fundación PetLove Logo" height="30" class="d-inline-block align-text-top">
                Fundación PetLove
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Adopciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Controllers/cerrar_sesion.php">Salir</a>
                    </li>
                
                
                </ul>
            </div>
        </div>
    </nav>


    <!-- Jumbotron -->
    <div class="jumbotron text-center" style="background-color: rgba(255, 255, 255, 0.5); background-image: url('../img/fondo.png'); background-size: cover; color: black; background-blend-mode: multiply;">
    <h1 class="display-4">¡Bienvenidos a nuestra Fundación de Perros PetLove!</h1>
    <p class="lead">Somos una organización sin fines de lucro que se dedica a rescatar, sanar y adoptar perros.</p>
    <hr class="my-4">
    <p>¡Visita nuestras secciones y conoce más sobre nuestros peluditos y fundación!</p>
</div>




    <!-- Sección de Perros -->
    <div class="container">
        <h2 class="text-center mb-4">El arte de rescatar peluditos</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/toño.jpg" class="card-img-top" style="height: 250px" alt="Perro 1">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Bienvenido</h5>
                        <p class="card-text">Nos alegra demasiado que estés pensando en adoptar, nuestros hermosos peluditos están en busca de un hogar lleno de mucho amor y cariño.
                            En esta pagina conocerás cuál es el proceso de adopción y sus respectivos requisitos.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/firu.jpg" class="card-img-top" style="height: 250px" alt="Perro 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Conoce más sobre nosotros</h5>
                        <p class="card-text">Buscamos proteger a los perros en estado de maltrato y abandono.
                            Les brindamos alimentos, medicamentos y albergue, con el fin de mejorar su calidad de vida y conseguirles un caluroso hogar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center">
        <div class="container">
            <p>&copy; 2023 Fundación PetLove. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Enlazamos los scripts de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7K7LjHZq6vk10e2njDWGnhUuI1R/cG1FVk2uqfD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
