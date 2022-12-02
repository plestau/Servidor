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

    public function buscarComentarios($id){
        $resul=$this->c->consulta("SELECT * FROM rutas_comentarios WHERE id_ruta = '$id'");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function borrarComentarios($id){
        $consulta=$this->c->consulta("DELETE FROM rutas_comentarios WHERE id_ruta = '$id'");
        if(!$consulta)
            return "ERROR: No se ha podido borrar";
        return "Todo correcto";
    }

    public function __destruct()
    {
        $this->c = null;
    }
}
?>