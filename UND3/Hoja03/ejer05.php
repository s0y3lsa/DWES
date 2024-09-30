<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $articulos=[
            ["codigo"=>"A001","descripcion"=>"Laptop","existencias"=>50],
            ["codigo" => "A002", "descripcion" => "Smartphone", "existencias" => 120],
            ["codigo" => "A003", "descripcion" => "Tablet", "existencias" => 30]
        ];


        function mayor($articulos){

            $mayor=$articulos[0];
            foreach ($articulos as $articulo){
                if($articulo ["existencias"] > $mayor["existencias"]){
                    $mayor = $articulo; 
                }
            }
            return $mayor["descripcion"];
        }

        function sumar($articulos){
            $total=0;
            foreach($articulos as $articulo){
                $total += $articulo["existencias"];
            }
            return $total;
        }

    ?>
</body>
</html>