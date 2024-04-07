<?php
class Db
{
  private static $mysqli = NULL;
  private function __construct()
  {
  }
  public static function conectar()
  {
    $mysqli = new mysqli("localhost", "root", "Ovettmora_12", "biblioteca");
    
    return $mysqli;
  }
}
