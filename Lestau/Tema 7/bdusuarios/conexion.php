<?php
class conexion extends PDO{
    private $servidor = 'localhost';
    private $usuario = 'root';
    private $contrasena = "";
    private $baseDatos = 'prueba';

    public function __construct()
    {
        try{
            parent::__construct("mysql:host=$this->servidor;dbname=$this->baseDatos;charset=utf8",
            $this->usuario, $this->contrasena);
        } catch (PDOException $e) {
            die ("<p><h3>No se ha podido establecer la conexion
            <p>Compruebe si está activado el servidor de bases de datos
            MYSQL. </h3></p>\n <p>Error: " . $e->getMessage() . "</p>\n");
        }
    }

    public function consulta($consulta){
        $resul = $this->query($consulta);
        if(!$resul){
            $error = $this->errorInfo();
            print("<p>Error en la consulta. Error ".$error[2]. "</p>");
        }else return $resul;
    }
}
?>