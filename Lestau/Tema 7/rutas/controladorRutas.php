<?php
class controladorRutas{
    private $c;

    public function __construct(){
        $this-> c = new conexion();
    }

    public function verRutas(){
        $resul=$this->c->consulta("SELECT * FROM rutas");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function buscarRutas($campo, $valor){
        $resul=$this->c->consulta("SELECT * FROM rutas WHERE $campo LIKE '%$valor%' OR descripcion LIKE '%$valor%' OR notas LIKE '%$valor%'");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function buscarRuta($valor){
        $resul=$this->c->consulta("SELECT * FROM rutas WHERE id = '$valor'");
        if(!$resul)
            return "ERROR: No se ha podido mostrar";
        return $resul;
    }

    public function modificaRutas($id, $dato){
        $consulta=$this->c->consulta("UPDATE rutas SET titulo = '$dato[0]', descripcion = '$dato[1]', desnivel = '$dato[2]', distancia = '$dato[3]', dificultad = '$dato[4]', notas = '$dato[5]' WHERE id = '$id'");
        if(!$consulta)
            return "ERROR: No se ha podido modificar";
        return "Todo correcto";
    }

    public function borrarRuta($id){
        $consulta=$this->c->consulta("DELETE FROM rutas WHERE id = '$id'");
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