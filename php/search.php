<?php
require_once('crud_libro.php');
require_once('libro.php');

$crud = new CrudLibro();
if (isset($_GET['searchType']) && isset($_GET['searchValue'])) {
  $searchType = $_GET['searchType'];
  $searchValue = $_GET['searchValue'];
  $listaLibros = $crud->getBooksByField($searchType, $searchValue);
  foreach ($listaLibros as $libro) {
    echo $libro->mostrarLibro();
  }
}
?>