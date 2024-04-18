<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'connection.php'; ?>
    <?php include 'navbar.php'; ?>
    <h1 class="subBanner text-center my-5 fs-1 text-white">
        Reserva ahora mas rapido con Lazy Travels
    </h1>

    <form action="reserva.php" method="POST">
        <div class="container">


            <?php
            session_start();

            if (isset($_POST['reservar'])) {
                $huesped = $_POST['huesped'];
                $alojamiento = $_POST['lugar'];
                $fechaEntrada = $_POST['fechaEntrada'];
                $fechaSalida = $_POST['fechaSalida'];


                $consulta = "INSERT INTO reservas (huesped, alojamiento, fechaIngreso, fechaSalida) VALUES ('$huesped', '$alojamiento', '$fechaEntrada', '$fechaSalida')";


                if (mysqli_query($conn, $consulta)) {
            ?>
                    <div class="alert alert-info" role="alert">
                        reserva exitosa
                    </div>

            <?php
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
            ?>



            <?php

            // Get the ID from the URL
            $id = $_GET['id'];
            $huesped = $_SESSION['usuario_id'];
            // Perform the database query to fetch the data
            $query = "SELECT nombreAlojamiento, descripcionAlojamiento, precioAlojamiento, lugarAlojamiento FROM alojamientos WHERE idAlojamiento = $id";
            $query2 = "SELECT nombre FROM registros WHERE id = $huesped";
            $result = mysqli_query($conn, $query);
            $result2 = mysqli_query($conn, $query2);
            // Check if the query was successful
            if ($result && $result2) {
                // Fetch the row of data
                $alojamiento = mysqli_fetch_assoc($result);
                $nombre = mysqli_fetch_assoc($result2);

                // Now you can use $alojamiento to populate your textboxes
            }
            ?>

            <?php if ($result && $result2) : ?>
                <input class="form-control my-5" type="text" value="<?php echo $id; ?>" aria-label="readonly input example" readonly name="lugar">

                <input class="form-control my-5" type="text" value="<?php echo $huesped ?>" aria-label="readonly input example" readonly name="huesped">

            <?php endif; ?>

            <div class="input-group input-group-sm  my-5">
                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Entrada</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="YY/MM/DD" name="fechaEntrada">
            </div>
            <div class="input-group input-group-sm my-5">
                <span class="input-group-text " id="inputGroup-sizing-sm">Fecha de salida</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="YY/MM/DD" name="fechaSalida">
            </div>
        </div>

        <div class="d-grid mx-5 mb-5">
            <button class="btn btn-primary text-center subBanner" type="submit" name="reservar">
                Registrar Reserva
            </button>
    </form>



    </div>

    <?php include 'footer.php'; ?>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>



</html>