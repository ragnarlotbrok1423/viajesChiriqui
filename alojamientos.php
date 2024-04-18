<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'connection.php'; ?>
    <?php include 'navbar.php'; ?>

    <form class="text-center my-5 d-flex mx-5" role="search" method="POST" action="alojamientos.php">
        <input class="form-control me-2" type="search" placeholder="Busca tu sitio" aria-label="Search" name="nombreAlojamiento">
        <button class="btn btn-outline-success" type="submit" name="buscar">Buscar</button>
    </form>

    <?php
    // Initialize the query
    $query = "SELECT idAlojamiento, nombreAlojamiento, descripcionAlojamiento, precioAlojamiento, lugarAlojamiento FROM alojamientos";

    // Check if the form was submitted
    if (isset($_POST['buscar'])) {
        $nombreAlojamiento = $_POST['nombreAlojamiento'];

        // Modify the query to filter by the name of the accommodation
        $query .= " WHERE nombreAlojamiento LIKE '%$nombreAlojamiento%'";
    }

    $result = mysqli_query($conn, $query);

    $alojamientos = array();  // Initialize an empty array

    // Check if the query was successful
    if ($result) {
        // Loop through the rows of data
        while ($row = mysqli_fetch_assoc($result)) {
            // Add the row to the array
            $alojamientos[] = $row;
        }
    }
    ?>
    <?php
    // Perform the database query to fetch the data
    $query = "SELECT idAlojamiento, nombreAlojamiento, descripcionAlojamiento, precioAlojamiento, lugarAlojamiento FROM alojamientos";
    $result = mysqli_query($conn, $query);

    $alojamientos = array();  // Initialize an empty array

    // Check if the query was successful
    if ($result) {
        // Loop through the rows of data
        while ($row = mysqli_fetch_assoc($result)) {
            // Add the row to the array
            $alojamientos[] = $row;
        }
    }
    ?>

    <!-- Generate the HTML -->
    <!-- Generate the HTML -->
    <?php foreach (array_chunk($alojamientos, 3) as $row) : ?>
        <div class='row'>
            <?php foreach ($row as $alojamiento) : ?>
                <div class='col-4'>
                    <a href="reserva.php?id=<?= $alojamiento['idAlojamiento'] ?>" style="text-decoration: none;">
                        <div class='nft'>
                            <div class='main'>
                                <img class='tokenImage' src='https://images.unsplash.com/photo-1621075160523-b936ad96132a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80' alt='NFT' />
                                <h2 class='text-white'><?= $alojamiento['nombreAlojamiento'] ?></h2>
                                <p class='description'><?= $alojamiento['descripcionAlojamiento'] ?></p>

                                <hr />
                                <div class='creator gap-5'>
                                    <p class='text-white'>Pricing <?= $alojamiento['precioAlojamiento'] ?></p>
                                    <p class='text-white'><?= $alojamiento['lugarAlojamiento'] ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <?php include 'footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>