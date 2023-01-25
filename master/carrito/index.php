<?php
include_once "carrito.php";
$c=new carrito();
if(isset($_GET["producto"])) $c->addProducto($_GET["producto"],$_GET["kg"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Fruterias Paco</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="#">Inicio</a> </li>
                      <li> <a href="#vegetable">Comprar</a> </li>
                      <li> <a href="verCarrito.php">Carrito</a> </li>
                      <span><?php echo $c->numProductos(); ?></span>
                     <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
</div>
</header>
<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Bienvenido a tu <strong class="llow">frutería</strong> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Manzanas</h3>
          <p>Deliciosas manzanas a 1.25€/Kg </p>
		  <p>
           <form action="" method="get">
		    <input type="hidden" name="producto" value="FR001" />
			<div class="col-md-12">
			  <input class="contactus" placeholder="Kg" type="text" name="kg">
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			  <button class="send" type="submit" >Añadir al carrito</button>
			</div>
           </form>
		  </p>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/manzana.jpg" alt="#"/></figure>
         <span>01</span>
        </div>
      </div>
	  
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Peras</h3>
          <p>Desliciosas peras conferencia a 2.03 €/kg </p>
		  <p>
           <form action="" method="get">
		    <input type="hidden" name="producto" value="FR002" />
			<div class="col-md-12">
			  <input class="contactus" placeholder="Kg" type="text" name="kg">
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			  <button class="send" type="submit" >Añadir al carrito</button>
			</div>
           </form>
		  </p>
        </div>
      </div>
	  
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/pera.jpg" alt="#"/></figure>
         <span>02</span>
        </div>
      </div>
	  
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Plátanos</h3>
          <p>Desliciosas plátanos de canarias a 1.57 €/kg </p>
		  <p>
           <form action="" method="get">
		    <input type="hidden" name="producto" value="FR003" />
			<div class="col-md-12">
			  <input class="contactus" placeholder="Kg" type="text" name="kg">
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			  <button class="send" type="submit" >Añadir al carrito</button>
			</div>
           </form>
		  </p>
        </div>
      </div>
	  
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/platano.jpg" alt="#"/></figure>
         <span>03</span>
        </div>
      </div>
	  
	  
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Sandia</h3>
          <p>Sandía sin pepitas a 2.59 €/kg </p>
		  <p>
           <form action="" method="get">
		    <input type="hidden" name="producto" value="FR002" />
			<div class="col-md-12">
			  <input class="contactus" placeholder="Kg" type="text" name="kg">
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			  <button class="send" type="submit" >Añadir al carrito</button>
			</div>
           </form>
		  </p>
        </div>
      </div>
	  
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/sandia.jpg" alt="#"/></figure>
         <span>04</span>
        </div>
      </div>
	  
    </div>
  </div>
</div>
<!-- end vegetable -->
</div>
</div>
    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Dirección </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact 
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+71 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Redes</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Novedades</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2022 Fruterías Paco </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>