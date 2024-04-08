<?php
class Libro
{
  private $id;
  private $nombre;
  private $autor;
  private $anio_edicion;
  private $editorial;
  function __construct()
  {
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function getAutor()
  {
    return $this->autor;
  }
  public function setAutor($autor)
  {
    $this->autor = $autor;
  }
  public function getAnio_edicion()
  {
    return $this->anio_edicion;
  }
  public function setAnio_edicion($anio_edicion)
  {
    $this->anio_edicion = $anio_edicion;
  }
  public function getEditorial () {
    return $this->editorial;
  }
  public function setEditorial($editorial) {
    $this->editorial = $editorial;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }

  public function mostrarLibro() {
    return '
    <tr>
          <td>' . $this->getNombre() . '</td>
          <td>' . $this->getAutor() . '</td>
          <td>' . $this->getAnio_edicion() . '</td>
          <td>' . $this->getEditorial() . '</td>
          <td><a class="btn btn-circle btn-warning" href="./php/actualizar.php?id=' . $this->getId() . '&accion=a"><i class="fas fa-pen"></i></a> <a class="btn btn-circle btn-danger" href="./php/administrar_libro.php?id=' . $this->getId() . '&accion=e"><i class="fas fa-trash"></i></a> </td>
    </tr>
    ';
  }
}
