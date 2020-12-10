<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php' ;

$user = DB::table('usuario')->where('nombreusuario',$_POST['usuario'])->first();
$mensaje ='';
if ($user->password == $_POST['password']) {
    if ($user->nombreusuario == 'profesor'){
        $mensaje = "<h1> BIENVENIDO: {$user->nombreusuario}</h1>
        <br><a href='consultar.php'>ENTRAR AL SISTEMA ESCOLAR</a>";
    }
    else
    {
        $mensaje ="<h1>bienvenido alumno</h1>
        <br><a href='.php'>ENTRAR AL SISTEMA ESCOLAR</a>";
    }
}else {
      $mensaje= "<h1>USUARIO Y/O CONTRASEÑA ERRONEOS,POR FAVOR VERIFIQUE Y VUELVA AUNTENTIFICARSE</h1>
      <br><a href='index.html'>Regresar,porfavor </a>";
}


echo $mensaje;