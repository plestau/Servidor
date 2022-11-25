<?php
if (isset($_POST['subir'])) {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        move_uploaded_file($_FILES['archivo']['tmp_name'], "imagenes/" . $_FILES['archivo']['name']);
        echo "La imagen se ha subido correctamente";
    } else {
        echo "Error al subir la imagen";
    }
}

$folder_path = 'imagenes/'; 
$num_files = glob($folder_path . "*.{JPG,jpeg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folder_path); 
if($num_files > 0){
 while(false !== ($file = readdir($folder)))  {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') {
   ?>
    <img style="width:200px;height:100px;" class="tfoto" src="<?php echo $file_path; ?>" alt="Imagen de ejemplo" title="Imagen de ejemplo">
     <?php
  }}}
closedir($folder);
?>