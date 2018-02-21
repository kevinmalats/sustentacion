<?php

class calificacion
{

    private $id_calificacion;
    private $calificacion;

    function __construct(){

    }

    function setIdcalificacion($id_calificacion){
        $this->idcalificacion=$id_calificacion;
    }

    function getIdcalificacion(){
        return $this->id_calificacion;
    }

    function setcalificacion($calificacion){
        $this->calificacion=$calificacion;
    }

    function getcalificacion(){
        return $this->calificacion;
    }

}
?>

