<?php
class controladorComentarios{
    private $c;

    public function __construct(){
        $this-> c = new conexion();
    }

    public function verComentarios(){
        $resul=$this->c->consulta("SELECT * FROM rutas_comentarios");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function anadirComentario($id){
        $resul=$this->c->consulta("INSERT INTO rutas_comentarios (id_ruta, nombre, texto, fecha) VALUES ('$id', '$_POST[nombre]', '$_POST[texto]', NOW())");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function __destruct()
    {
        $this->c = null;
    }
}
?>