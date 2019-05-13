<?php

// Crear una clase de persona

    // las variables en public son accesibles desde cualquier parte de codigo, es lo mismo que en el primer paso en datos.php

class persona{

    public $nombre = 'Concha';
    public $apellido = 'Martinez';
    public $fechaDeNacimiento = '1974-06-12';
    public $extraterrestre = true;

    //CONSTRUCTOR (caja de conexiones para que todo ufuncione)
    public function __construct($nombre, $apellido, $fechaDeNacimiento){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->extraterrestre = $extraterrestre;
    }



    // cereando un METODO (una función de una clase)
       public function nombreCompleto(){


        return '{$this->nombre} {$this->apellido}';

    }
    public function edad(){

        list($y, $m , $d) = explode('-','{$this->fechaDeNacimiento}');
    
        $mesDiaActual = date('md');
    
        $anyoActual = date('Y');
    
            if($mesDiaActual < $m.$d){
    
                return($anyoActual - $y - 1);
            }else{
                return(date('Y') - $Y);
            }
    }
    
    public function iniciales(){
    
        $iniciales = substr('{$this->nombre}',0,1) . substr('{$this->apellido}',0,1);
    
        return $iniciales;
    
    }
}

class botella{

    public $material = 'plastico';
    public $capacidad = '2l';
    public $rosca = 'si';
}

// Tiene que tener la misma estructura que class persona
    // PRIMER OBJETO
    $miquel = new persona('Miquel', 'Peralta' , '1978-12-12', true);
    $pepita = new persona('Pepa', 'Congorra', '2000-04-23',false);


    echo('<pre>');
    print_r($miquel);
    echo('</pre>');

