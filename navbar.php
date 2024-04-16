<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef69550edc.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbarColor sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand brand fs-2" href="index.php">
                <img src="lazytravelsLogo.png" alt="lazytravels" width="50" class="m-3">
                Lazy Travels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                    <path fill="white" d="M0 1h16v2H0zm0 4h16v2H0zm0 4h16v2H0zm0 4h16v2H0z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="link enlace fs-5" href="index.php">Incio</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="link enlace fs-5" href="alojamientos.php">Alojamientos</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="link enlace fs-5" href="#"> Proporcionar Alojamiento</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="link enlace fs-5" href="#">Reservas en Tramite</a>
                    </li>
                </ul>

                <div class="d-flex m-4 justify-content-end ms-auto">
                    <button type="button" class="btn" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Nombre Usuario">
                        <i class="fa-solid fa-user fa-2xl" style="color: #00ffa1;"></i>
                    </button>
                </div>


            </div>


        </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

</html>