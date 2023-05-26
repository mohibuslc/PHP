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

    echo "hallow <br>";



    // Callculation Bout number 


    $x = 19;

    $y = 22;

    $total = $x + $y;


    echo 'This is  Total = ' . $total;


    echo '<br>';

    // Data type of Php ; 

    echo 'Example of Data Types <br>';
    $frutes = array('Applie', 'Banana ', 'Licho');

    var_dump($frutes);

    echo '<br>';
    // Learn About Object ; 

    echo ' Understand About OBJECT ';

    echo ' <br>';


    class shop
    {
        var $product;

        function shopProduct($name)
        {

            global $product;

            $product = $name;

            echo ' This is Best product in the Shop : ' . $product;

            echo '<br>';
        }
    }


    $goods = new shop;

    $goods->shopProduct('chanachor');
    ?>

</body>

</html>