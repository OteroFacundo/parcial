<?php
if ($app->request->method == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    
$errores=array();
	$erroresJson=array();
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $errores['errorEmail'] = "Formato invalido para un email.";
 }
//Validacion Nombre
    if (!preg_match("/^[A-Za-z\\- \']+$/",$nombre)) {
        $errores['errorNombre'] = "El nombre ingresado no es valido.";
	}

if (!preg_match("/^[A-Za-z\\- \']+$/",$apellido)) {
        $errores['errorApellido'] = "El apellido ingresado no es valido.";
	}

}






function almacenarDatos(){
    if(file_exists('datos/datos.json')){
        
		$DatosActuales = file_get_contents('datos/datos.json');
        $arrayDatos = json_decode($DatosActuales, true);
        
        $nuevoDatos = array(
            
       
            'email'=> $_POST['email'],
			'nombre'=>$_POST['nombre'],
           'apellido'=>$_POST['apellido'],
    
		);
        $arrayDatos[] = $nuevoDatos;
        $arrayDatosActualizado = json_encode($arrayDatos);

        if(!file_put_contents('datos/datos.json',$arrayDatosActualizado)){
            array_push($erroresJson['fallo'],"Hubo un error al intentar guardar su formulario!");
        }
    }else{
        array_push($erroresJson['fallo'],"No existe el archivo turnos.json");
    }
}
if($errores){
        require 'controllers/Formulario.php';//Fallo algun valor
   
}else{
        
	almacenarDatos();//Si todos lo datos correctos los almaceno en json
        if($erroresJson){//Si almacenar en archivo json fallo
            require 'controllers/Formulario.php';//Fallo algo
        }else{
            require 'controllers/formulario.php';//Todos los datos validos
        }
    }

?>