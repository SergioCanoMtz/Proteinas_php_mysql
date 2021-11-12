<?php
    include_once('Proteina.php');

    class BaseDatos extends mysqli{
        /*private $sql;

         public function __construct(){
            $sql = new mysqli('localhost:3306','cano','cano','proteinas');      
        } */
        public function __construct(){
            parent::__construct('localhost:3306','cano','cano','proteinas');      
        } 

        public function guardarProteina($pro){           
            $consulta = "INSERT INTO proteina (nombre, tipo) VALUES ('".$pro->getNombre()."','".$pro->getTipo()."')";
            parent::query($consulta);
            echo '<h3>Insertado correctamente<h3>';
        }

        public function consultarProteina($id){
            $consulta = "SELECT * FROM proteina WHERE id='$id'";
            $res = parent::query($consulta);

            $proteina = new Proteina();
            while ($fila = $res->fetch_assoc()) {
                /* $proteina = new Proteina();
                $proteina->setNombre($fila["nombre"]);
                $proteina->setTipo($fila["tipo"]);  */
                printf ("%s (%s)\n", $fila["nombre"], $fila["tipo"]);
                $nom = $fila["nombre"];
                $tip = $fila["tipo"];

                echo $nom;
                echo $tip;

                $proteina->setNombre($nom);
                $proteina->setTipo($tip);

                /* echo $proteina->getNombre();
                echo $proteina->getTipo(); */

            }         

            /*$proteina = new Proteina();
             while($row = parent::fech_assoc()){
                $proteina->setNombre($row['nombre']);
                $proteina->setTipo($row['tipo']);
            } */

            /* $resultado->free(); */
           /*  return $proteina; */
            
        }

        public function consultarProteinas(){
            $listaProteinas = array();
            $consulta="SELECT * FROM proteina";
            $resultado = $sql->query($consulta);
            while($row=$resultado->fetch_assoc()){
                $proteina = new Proteina();
                $proteina->setNombre($row['nombre']);
                $proteina->setTipo($row['tipo']);
                array_push($listaProteinas, $proteina);
            }
            return $listaProteinas;
        }       
    }

?>