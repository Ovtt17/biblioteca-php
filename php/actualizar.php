<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud = new CrudLibro();
$libro = new Libro();
//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
$libro = $crud->obtenerLibro($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="d-flex justify-content-center">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Actualizar Libro</h1>
              </div>
              <form action='administrar_libro.php' method='post'>
                <input type='hidden' name='id' value='<?php echo $libro->getId() ?>'>
                <div class="form-group">
                  <label for="nombre">Nombre libro:</label>
                  <input type='text' id="nombre" name='nombre' class="form-control" value='<?php echo $libro->getNombre() ?>'>
                </div>
                <div class="form-group">
                  <label for="autor">Autor:</label>
                  <input type='text' id="autor" name='autor' class="form-control" value='<?php echo $libro->getAutor() ?>'>
                </div>
                <div class="form-group">
                  <label for="anio_edicion">Fecha Edición:</label>
                  <input type='text' id="anio_edicion" name='anio_edicion' class="form-control" value='<?php echo $libro->getAnio_edicion() ?>'>
                </div>
                <div class="form-group">
                  <label for="editorial">Editorial:</label>
                  <input type='text' id="editorial" name='editorial' class="form-control" value='<?php echo $libro->getEditorial() ?>'>
                </div>
                <input type='hidden' name='actualizar' value='actualizar'>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                  <a href="../index.php" class="btn btn-danger">Volver</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>