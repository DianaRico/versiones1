<?php

namespace  Curso\MainBundle\Funciones;
use Curso\MainBundle\Model\Model;

class DefaultFunciones {
    
    public function validausr($usuario, $pass){//Para el puro login 
        $conn = new Model();

        $sql = "SELECT * from usuario where  Correo = '$usuario' and Pwd = '$pass'";
        $result = $conn->consulta($sql);
        $row = $conn->fetch_assoc($result);
        $conn->close();
        return $row;
    }

    public function Registrarusuario($nombre, $usuario, $pass){
        $conn = new Model();
        $sql = "insert into usuario (Usuarios_nombre, Usuarios_nickname, Usuarios_password, activo) values ('$nombre', '$usuario', md5('$pass'), 1);";
        $result = $conn->consulta($sql);
        $conn->close();
        return $result;
    }
    
}