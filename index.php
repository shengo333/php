<?php  

//variable scope

//local vars


    function myFunc(){
        $price = 10;
        echo $price;
    }

    // myFunc();
    // echo $price

    function myFuncTwo($age){
        echo $age;
    }

    // myFuncTwo(50);
    // echo $age;

    //global variables

    $name = 'mario';

    // function sayHello(){
    //     global $name;
    //     $name = 'yoshi';
    //     echo "hello $name";
    // }

    // sayHello();
    // echo $name

    function sayBye(&$name){
        $name = 'warior';
        echo "bye $name";
    }

    sayBye($name);
    echo $name

?>

<!DOCTYPE html>
<html>
<head>
    <title>My first php page</title>
</head>
<body>


</body>
</html>