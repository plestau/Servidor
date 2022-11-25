<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class xml{
        private $fich;
        private $xml;

        public function __construct($f){
            if (file_exists($f){
                $this -> xml = simplexml_load_file($f);
        }else{
            $string = <<<XML
            <?xml version='1.0'?>
            <asignaturas>
            </asignaturas>
            XML;
            $this->sxml = new SimpleXMLElement($string);
        }
        $this->fich = $f;
        
        public function escribeAsig($datos){
            // código
        }

        public function leeAsig($cod){
            //código
        }
    }
?>
</body>
</html>