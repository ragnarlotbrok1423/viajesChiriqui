<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
  <title>Proveedores</title>
</head>

<body>
  <?php
  session_start();
  include 'connection.php';
  if (isset($_POST['publicar'])) {
    $huesped = $_SESSION['usuario_id'];
    $siteName = $_POST['siteName'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $descriptionSite = $_POST['descriptionSite'];

    $consulta = "INSERT INTO alojamientos (huesped, nombreAlojamiento, descripcionAlojamiento, precioAlojamiento, lugarAlojamiento) VALUES ('$huesped', '$siteName', '$descriptionSite', '$price', '$location')";


    if (mysqli_query($conn, $consulta)) {
  ?>
      <div class="alert alert-info" role="alert">
        Alojamiento agregado exitosamente
      </div>

  <?php
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
  ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p align="center">
          <img src="edificio 1.jpg" alt="Edificio 1" width="700" height="500" id="productImage">
        </p>
        <br>
      </div>
      <div class="col-md-6">
        <div class="card border-light mb-3" style="max-width: 50rem;">
          <div class="card-header bg-transparent border-success"></div>
          <div class="card-body text-black text-center">
            <h5 class="card-title display-1 fw-bold" style="font-family: 'Roboto', sans-serif; color: #102542;">Publica tu alojamiento aquí</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr class="my-4" style="border-color: #333; border-width: 2px; margin: 0 50px;">

  <h4>Rellena este formulario para publicar tu Alojamiento</h4>
  <section style="margin: 0 50px;">
    <br>
    <form method="POST" action="proveedores.php">
      <!-- Name input -->
      <div class="row mb-4">
        <div class="col">
          <div data-mdb-input-init class="form-outline">
            <input type="text" id="form6Example1" class="form-control" name="siteName" placeholder="Nombre del alojamiento" />

          </div>
        </div>

        <!-- Location input -->
        <div class="col">
          <div data-mdb-input-init class="form-outline">
            <input type="text" id="form6Example2" class="form-control" name="location" placeholder="Lugar de alojamiento Ej: Ciudad, País">
          </div>

        </div>
      </div>



      <!-- Number days input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input id="form6Example6" class="form-control" name="price" placeholder="Coloque el precio por noche de su alojamiento" />
      </div>

      <!-- Details input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <textarea class="form-control" id="form6Example7" name="descriptionSite" rows="4"></textarea>
        <label class="form-label" for="form6Example7">Detalles del Alojamiento</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
        <label class="form-check-label" for="form6Example8"> Acepto los terminos y condiciones de la publicación </label>
      </div>

      <!-- Publication button -->
      <div>
        <button data-mdb-ripple-init type="submit" class="btn btn-success btn-block mb-4" name="publicar" id="liveToastBtn">Publicar Alojamiento</button>
        <button type="button" class="btn btn-primary btn-block mb-4"><a href="index.php" style="text-decoration: none;" class="text-white">Regresar a Inicio</a></button>
      </div>

    </form>
  </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
< </html>