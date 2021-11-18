<?php 
class IPN{

    static public function ctrSaveIPN($post,$post2,$post3){
        if($post!= NULL)
		$respuesta = ModeloCursos::mdlSaveIPN($post,$post2,$post3);
        else
        $respuesta = "Sin datos";

		return $respuesta;
	}
}