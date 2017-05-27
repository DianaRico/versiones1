<?php 
namespace Curso\MainBundle\Model;

class Model {
    private $conexion;//conexion a la base de datos 
    private $host;//puerto
    private $usuario;
    private $password;
    private $db;//base de datos para activar
    private $logs;
    private $sqlError;//identificar errores 
public function __construct(){//identificador de la base de datos 
        $this->host = 'localhost';
        $this->usuario = 'root';
        $this->password = '';
        $this->db = 'proyecto';//nombre de la BD
        if(!isset($this->conexion)){
            $this->conexion = (mysqli_connect($this->host, $this->usuario, $this->password, $this->db)) or die (mysqli_connect_error());
        }
    }

	function getConexion(){ //liga la conexion 
		return $this->conexion;
	}

    public function consulta($consulta){//Consultar la BD.
        $resultado = mysqli_query($this->conexion, $consulta) or die($this->setError( mysqli_errno( $this->conexion ), mysqli_error( $this->conexion ), $consulta));
        return $resultado;
    }

    public function fetch_array($consulta){
        if( !$consulta ){
            return 0;
        }
        return mysqli_fetch_array($consulta);
    }

    public function fetch_assoc($consulta){//pendiente
        if( !$consulta ){
            return 0;
        }
        return mysqli_fetch_assoc($consulta);
    }

    public function num_rows($consulta){
        if( !$consulta ){
            return 0;
        }
        return mysqli_num_rows($consulta);
    }

    public function affected_rows(){
        return mysqli_affected_rows($this->conexion);
    }

    public function close(){//cierra la conexion
        mysqli_close($this->conexion);
    }

    public function insert_id(){//pendiente 
        return mysqli_insert_id($this->conexion);
    }

    public function setError($no_err,$err,$sq){
        $this->sqlError = " Error SQL: ".$no_err." -- ".$err.". En la sentencia: ".$sq;
        return $this->sqlError;
    }

    /*public function errores(){
        return $this->sqlError;
    }*/
}




 ?>