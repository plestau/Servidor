<?php
// clase recetaPDF que sirve para generar un PDF con la receta
include_once "fpdf.php";
include_once "receta.php";
class recetaPDF extends FPDF{
    public function __construct()
    {
        parent::__construct("p", "mm", "A4");
    }

    public function crearCarta($nombre, $nComensales){
        $this->setFont("Arial",'',16);
        $this->Write(5,"Estimado amigo/a $nombre, te envio esta receta para elaborar en navidad con tu familia. Esta pensada para $nComensales comensales.");
    }

    //funcion que crea los ingredientes y los introduce en una tabla
    public function crearIngredientes($cantidad, $unidad, $nombre){
        $this->setFillColor(0,255,0);
        $this->setFont("Arial",'',16);
        $this->Write(5,"Ingredientes");
        $this->Ln(10);
        $this->setFont("Arial",'',12);
        $this->Cell(20,10,"Cantidad",1,0,"C",true);
        $this->Cell(20,10,"Unidad",1,0,"C", true);
        $this->Cell(100,10,"Nombre",1,0,"C", true);
        $this->Ln();
        for($i=0;$i<count($cantidad);$i++){
            $this->Cell(20,15,$unidad[$i],1,0,"C");
            $this->Cell(20,15,$unidad[$i],1,0,"C");
            $this->Cell(100,15,$nombre[$i],1,0,"C");
            $this->Ln();
        }
    }

    public function crearPreparacion($texto){
        $this->setFont("Arial",'',16);
        $this->Write(15,"Preparacion");
        $this->Ln();
        $this->setFont("Arial",'',12);
        $this->Write(5,$texto);
    }
}
?>