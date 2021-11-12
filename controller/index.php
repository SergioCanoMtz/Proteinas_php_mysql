<?php

    include_once('../model/Proteina.php');
    include_once('../model/BaseDatos.php');

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    $pro = new Proteina($nombre,$tipo);
    $bd = new BaseDatos();

    $bd->guardarProteina($pro);
    $bd->consultarProteina(3);
    
  /*   echo $per->getNombre();
    echo $per->getTipo(); */

    /* echo $per->getNombre().'<br>';
    echo $per->getTipo(); */

    /* echo '<h3> Nombre: '.$pro->getNombre().'<h3>';
    echo '<h3> Tipo: '.$pro->getTipo().'<h3>'; */

  /*   echo $_POST["tipo"];
    echo '<br>';
    echo $_POST["Clasificacion"];
    echo '<br>';
    echo $_POST["Caracteristica"]; */

?>