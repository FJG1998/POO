<?php
// LO QUE HABIAMOS HECHO HASTA AHORA ES PROGRAMACION ESTRUCTURADA, AHORA VEREMOS PROGRAMACION ORIENTADA A OBJETOS:

$nombre = 'Concha';
$apellido = 'Martinez';
$fechaDeNacimiento = '1974-06-12';

// #Para que la funcion escriba el nombre y apellido de la persona
function nombrecompleto($nombre,$apellido){

    return("$nombre $apellido");

};

echo nombrecompleto($nombre, $apellido);

// #Calcular la edad de la persona con la variable $fechaDeNacimiento

function edad($fecha){
    // LIST: sirve para almacenar listas de datos. EXPLODE: coje un string y lo divide con el signo que le indiquemos separando la fecha
    //  como en el siguiente ejemplo.
    // reconoce los guiones de fecha por ejemplo y te los separa en numeros 
      
    list($y, $m , $d) = explode('-',$fecha);


    // la funcion date nos da el mes y el dia ('md')
    $mesDiaActual = date('md');
    // la funcion date nos da el año ('y')
    $anyoActual = date('Y');

    // estamos haciendo: 0513 (mes y dia) < 0612 (mes y dia)

    if($mesDiaActual < $m.$d){

        return($anyoActual - $y - 1);
    }else{
        return(date('Y') - $Y);
    }




// SHORTHAND= versiones cortas
    // El interrogante representa un if y los dos puntos un else, usando esto solo se puede hacer un else

return($mesDiaActual < $m.$d ?
        $anyoActual - $y -1 :
        $anyoActual -$y);
    }
        echo(edad('1998-11-17'));
