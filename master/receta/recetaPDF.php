<?php
//Clase recetaPDF que sirve para generar el documento PDF con la receta
include_once "fpdf.php";
include_once "ingrediente.php";

class recetaPDF extends FPDF{
	
	
	public function __construct($preparacion){
		parent::__construct("P","mm","A4");
	}
	
	public function crearCarta($nombre,$nComensales){
		$this->SetFont('Arial','',16);
		$this->write(12,'Estimado amigo/a ' . $nombre . ', te envio esta receta para que la elabores con tus seres queridos. Esta pensada para ' . $nComensales .' comensales');
		$this->Ln();
		$this->Image("icon-recetas.png");
	}
	
	public function crearIngredientes($c,$u,$i,$nComensales){
		//Título
		$this->SetFont('','B');
		$this->Cell(190,20,'INGREDIENTES');
		$this->Ln();
		// Colores, ancho de línea y fuente en negrita
		$this->SetFillColor(255,0,0);
		$this->SetTextColor(255);
		$this->SetDrawColor(128,0,0);
		$this->SetLineWidth(.3);
		// Cabecera
		$this->Cell(20,10,"Cant.",1,0,'C',true);
		$this->Cell(40,10,"Unidad",1,0,'C',true);
		$this->Cell(130,10,"Ingrediente",1,0,'C',true);
		$this->Ln();
		// Restauración de colores y fuentes
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Datos
		$fill = false;
		foreach($c as $k => $v)
		{
			//calculo la cantidad de ingrediente según comensales
			$ing = new ingrediente($v,$u[$k],$i[$k]);
			$ing->calcularCant($nComensales);
			
			$this->Cell(20,9,$ing->getCant(),'LR',0,'C',$fill);
			$this->Cell(40,9,$u[$k],'LR',0,'C',$fill);
			$this->Cell(130,9,$i[$k],'LR',0,'L',$fill);
			$this->Ln();
			$fill = !$fill;
		}
		// Línea de cierre
		$this->Cell(190,0,'','T');		
	}
	
	public function crearPreparacion($texto){
		$this->SetFont('','B');
		$this->Ln();
		$this->Cell(190,20,'PREPARACION');
		$this->Ln();
		$this->SetFont('');
		$this->Multicell(0,5,$texto);
	}
}
?>