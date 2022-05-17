<?php 
//Creamos la clase Coche
    class Coche {
        //Atributos que son las propiedades del objeto
        public $color = 'Verde';
        public $marca = 'Mini';
        
        // echo $nombre; no funciona

        //Métodos
        public function acelerar($velocidad){
            echo $velocidad;
        }
    }
    $frenar = new Coche();//Realizamos una instancia de la clase Coche y se crea un OBJETO
    // echo gettype($frenar); //Muestra tipo "object"
    echo 'El color del coche es ' . $frenar->color . ' y ' . $frenar->marca . " es la marca";
    $frenar->acelerar("<br>¿Te gusa coducir?");
?>