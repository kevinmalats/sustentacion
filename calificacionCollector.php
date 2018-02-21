<?php

    include_once('calificacion.php');
    include_once('Collector.php');

    class tiposervicioCollector extends Collector
    {
        function showcalifiacions(){
            $rows = self::$db->getRows("SELECT * FROM id_calificacion");
            $array = array();
            foreach($rows as $c){
                $aux = new calificacion();
                $aux->setIdcalificacion($c{'id_calificacion'});
                $aux->setcalificacion($c{'calificacion'});
                array_push($array, $aux);
            }
            return $array;
        }
        function showcalificacion($nom) {
            $rows = self::$db->getRows("SELECT * FROM id_calificacion WHERE calificacion = ?", array("{$nom}"));        
            $aux = new calificacion();
            foreach ($rows as $c){ 
                $aux->setIdcalificacion($c{'id_calificacion'});
                $aux->setcalificacion($c{'calificacion'});
            }
          return $aux;        
        }
        function comprobarcalificacion($id) {
            $rows = self::$db->getRows("SELECT * FROM id_calificacion WHERE id_calificacion = ?", array($id));        
            $aux = new calificacion();
            foreach ($rows as $c){ 
               $aux->setIdcalificacion($c{'id_calificacion'});
                $aux->setcalificacion($c{'calificacion'});
            }
          return $aux;        
        } 
        function deletecalificacion($id){
            $deleterow = self::$db->deleteRow("DELETE FROM id_calificacion WHERE id_calificacion= ?", array($id));
        }
        function crearcalificacion($nombre){
            $insertarrow = self::$db->insertRow("INSERT INTO id_calificacion (nombre) VALUES (?)", array("{$nombre}"));
        }
        function actualizarcalificacion($nombre,$id){
            $row = self::$db->getRows("UPDATE id_calificacion SET calificacion = ?  where id_calificacion= ?",array("{$nombre}",$id));
        }
    }
?>

