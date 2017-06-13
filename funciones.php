<?php

function validarInformacion($informacion){
  $errores=[];
  $nombre = trim($informacion["name"]);
  if (strlen($nombre) == 0) {
    $errores["nombre"] = "Debe completar su nombre";
  }

  $apellido = trim($informacion["surname"]);
  if (strlen($apellido) == 0) {
    $errores["apellido"] = "Debe completar su apellido";
  }
  $programa=trim($informacion["programas"]);
  if (empty($programa))  {
    $errores["programa"] = "Debe elegir un programa";
  }
  $telefono = trim($informacion["phone"]);
  if (strlen($telefono) == 0) {
    $errores["telefono"] = "Debe colocar su telefono";
  }
  $mail = trim($informacion["email"]);
  if (strlen($mail) == 0 ) {
    $errores["mail"]="Debe completar el mail";
    }
    elseif (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $errores["mail"]="Debe completar con un mail valido";
    }
  $experience = trim($informacion["experience"]);
  if (strlen($experience) == 0) {
    $errores["experiencia"] = "Debe completar su experiencia.";
  }
  // $pais = trim($informacion["pais"]);
  // if (empty($pais)){
  //   $errores["pais"] = "Debe completar su pais de nacimiento.";
  // }
  return $errores;
  return $nombre;
  return $apellido;
  return $pais;
  return $telefono;
  return $mail;
  return $programa;
  return $experiencia;

}


// $destinatario = "gironafrancisco86@gmail.com";
$asunto = "Solicitud Información";
$cuerpo = $nombre . $apellido . ", nacido en " . $pais . ", con telefono: " . $telefono . "; Mail: " . $mail .  ". Solicita información de: " . $programa . ". Su experiencia es: " . $experiencia;


?>
