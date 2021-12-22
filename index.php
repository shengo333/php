<?php  

$price = 45;

// if ($price < 30){
//     echo 'condition is met';
// } elseif($price < 50){ 
//     echo 'else if condition';
// } else {
//     echo 'condition is not met';
// }

     $products = [
         ['name' => 'shiny star', 'price' => 20],
         ['name' => 'green shell', 'price' => 10],
         ['name' => 'red shell', 'price' => 15],
         ['name' => 'gold coin', 'price' => 5],
         ['name' => 'lightning bolt', 'price' => 40],
         ['name' => 'banana skin', 'price' => 2],
     ];

    foreach($products as $product){
        
         if($product['name'] === 'lightning bolt'){
                break;
         }

         if($product ['price'] > 15){
             continue;
         }
            echo $product['name'] . '<br />';
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>My first php page</title>
</head>
<body>


</body>
</html>