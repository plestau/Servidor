<?php
class usuario{
    private $c;

    public function __construct(){
        $this-> c = new conexion();
    }

    public function inserta($nombre, $rol){
        $resul=$this->c->consulta("INSERT INTO usuario(nombre, rol) VALUES('$nombre', '$rol')");
        if(!$resul)
            return "ERROR: No se ha insertado";
        return "Todo correcto";
    }

    public function verUsuarios(){
        $resul=$this->c->consulta("SELECT * FROM usuario");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function modificaUsuario($id, $nombre, $rol){
        $resul=$this->c->consulta("UPDATE usuario SET nombre='$nombre', rol='$rol' WHERE clave=$id");
        if(!$resul)
            return "ERROR: No se ha podido modificar";
        return "Todo correcto";
    }

    public function borrarUsuario($id){
        $resul=$this->c->consulta("DELETE FROM usuario WHERE clave=$id");
        if(!$resul)
            return "ERROR: No se ha podido borrar";
        return "Todo correcto";
    }

    public function __destruct()
    {
        $this->c = null;
    }
}
?>