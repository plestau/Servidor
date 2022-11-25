<?php
class carrito{
	private $productos = array("FR001" => array("Manzana golden","1.25","manzana.jpg"),
							   "FR002" => array("Pera conferencia","2.03","pera.jpg"),
							   "FR003" => array("Plátano de canarias","1.57","platano.jpg"),
							   "FR004" => array("Sandía sin pepitas","2.59","sandia.jpg"));
							   
	public function __construct(){
		if(!isset($_SESSION)) session_start();
	}
	
	public function addProducto($referencia,$kg){
		if(isset($_SESSION["carrito"][$referencia]))
			$_SESSION["carrito"][$referencia][0] += $kg;
		else
			$_SESSION["carrito"][$referencia][0] = $kg;

		$_SESSION["carrito"][$referencia][1] = $_SESSION["carrito"][$referencia][0] *
											   $this->productos[$referencia][1];
	}
	
	public function borrarProducto($referencia){
		if(isset($_SESSION["carrito"][$referencia]))
			unset($_SESSION["carrito"][$referencia]);
	}
	
	public function modificarPeso($referencia,$kg){
		if(isset($_SESSION["carrito"][$referencia])){
			$_SESSION["carrito"][$referencia][0] = $kg;
			$_SESSION["carrito"][$referencia][1] = $_SESSION["carrito"][$referencia][0] *
											       $this->productos[$referencia][1];
		}
	}
	
	public function vaciarCarrito(){
		if(isset($_SESSION["carrito"]))
			unset($_SESSION["carrito"]);
	}
	
	public function numProductos(){
		if(isset($_SESSION["carrito"]))
			return count($_SESSION["carrito"]);
		return 0;
	}
	
	public function getKg(){
		$kg=0;
		if(isset($_SESSION["carrito"])){
			foreach($_SESSION["carrito"] as $ref => $p){
				$kg += $p[0];
			}
		}
		return $kg;
	}
	
	public function getEuros(){
		$e=0;
		if(isset($_SESSION["carrito"])){
			foreach($_SESSION["carrito"] as $ref => $p){
				$e += $p[1];
			}
		}
		return $e;
	}
	
	public function __toString(){
		$str="";
		if(isset($_SESSION["carrito"])){
			foreach($_SESSION["carrito"] as $ref => $p){
			  $str .= "
			  <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12 \">
				<div class=\"vegetable_shop\">
				  <h3>" . $this->productos[$ref][0] . "</h3>
				  <p>Precio por Kg: " . $this->productos[$ref][1] . "€</p>
				  <p>
				  
					<input type=\"hidden\" name=\"producto\" value=\"" . $ref . "\" />
					<div class=\"col-md-12\">
					  <input class=\"contactus\" placeholder=\"Kg\" type=\"text\" name=\"kg\" value=\"" . $_SESSION["carrito"][$ref][0] . "\">
					</div>
					<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12\">
					  <button class=\"send\" type=\"submit\" >Modificar peso</button>
					  <input type=\"checkbox\" value=\"" . $ref . "\" name=\"borrar\" onclick=\"javascript:this.form.submit();\" />Borrar
					</div>
					
				  </p>
				</div>
			  </div>
			  <div class=\"col-xl-7 col-lg-7 col-md-7 col-sm-12 \">
				<div class=\"vegetable_img\">
				 <figure><img src=\"images/" . $this->productos[$ref][2] . "\" alt=\"#\"/></figure>
				 <span>1</span>
				</div>
			  </div>";
			}
		}
		return $str==""?"<div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12 \"><b>La cesta está vacía</b></div>":$str;
	}
}
?>