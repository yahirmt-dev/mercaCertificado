<?php

require_once "conexion.php";

class ModeloCursos{

    static public function mdlSaveIPN($datos,$datos2,$datos3){

        $stmt = Conexion::conectar()->prepare("INSERT INTO mercado(dato1, dato2, dato3) VALUES (:idusu, '".$datos2."', :datos3)");

        $stmt->bindParam(":idusu", $datos, PDO::PARAM_STR);
        $stmt->bindParam(":datos3", $datos3, PDO::PARAM_STR);

        if($stmt->execute()){

			    return "ok";

		    }else{

			    return "error";
		
		    }

		    $stmt->close();
		    $stmt = null;

    }


}