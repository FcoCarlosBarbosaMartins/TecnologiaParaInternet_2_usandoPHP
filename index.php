<!DOCTYPE html>
<!--


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>Testando If, Else e Elseif em PHP</h1>";
        $a = 21;
        $b = 22;
        
        if ($a > $b)
            {
                echo "$a > $b";
                echo ' -> Letra a Maior que letra b';
            }
        elseif ($a===$b) 
            {
                echo "$a === $b";
                echo ' -> Letra a e letra b tudo igual!';
            }
        else 
            {
                echo "$a < $b";
                echo ' -> Letra a Menor que letra b!';
            }
        ?>
    </body>
</html>
