<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php

    $adn1 = str_split(trim($_GET['adn1']));
    $adn2 = str_split(trim($_GET['adn2']));
    $error = [];
    $dif = 0;
    if (count($adn1) != count($adn2)) {
        $error[] = "Error: Las cadenas tienen distinta longitud";
    } else {
       
                for ($i = 0; $i < count($adn1); $i++) {

                    if ($adn1[$i] != $adn2[$i]) {
                        $dif++;
                    }
                }
    }

    if(count($error) == 0){
        ?><p>Hay un total de <?= $dif ?> de diferencias</p><?php
    }else {
         foreach($error as $err){
            ?> <p> <?= $err ?> </p> <?php
         }
    }


    ?>
</body>

</html>