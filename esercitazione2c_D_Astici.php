<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_POST["num"];
        $sommaPari = 0;

        if ($numero %2 == 0){
            while ($numero>0){
                $sommaPari = $sommaPari + $numero;
                $numero = $numero-2;
            }
            echo "Somma numeri pari:" . $sommaPari;
        } 
        
        else{
            while (($numero - 1) > 0){
                $sommaPari = $sommaPari + ($numero-1);
                $numero = $numero-2;
            }
            echo "Somma numeri pari:" . $sommaPari;
    
        }
    ?>
    
</body>
</html>