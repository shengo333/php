<?php  

//functions


    function sayHello($name='irakli', $time = 'morning'){
        echo "$name goood $time";
    }

    sayHello('shengo', 'evening');


    function formatProduct($product){
        // echo "{$product['name']} costs $ {$product['price']}";
        return "{$product['name']} costs $ {$product['price']}";
    }

    $formatted = formatProduct(['name'=> 'goldstar', 'price' => '20']);

    //echo "{$formatted} this is formated"

?>

<!DOCTYPE html>
<html>
<head>
    <title>My first php page</title>
</head>
<body>


</body>
</html>