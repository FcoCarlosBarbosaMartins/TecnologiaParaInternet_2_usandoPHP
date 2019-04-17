<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>Testando Switch</h1>";
        // put your code here
        
        $i=2;
        
        switch ($i){
            case 0:
                echo "i e igual a -> Zero!";
                break;
            case 1:
                echo "i e igual a -> Um!";
                break;
            case 2:
                echo "i e igual a -> Dois!";
                break;
            default :
                echo "<br> Codigo Inexistente!";
                break;
        }
        ?>
    </body>
</html>
