<?php 


//conect to database

$conn = mysqli_connect('localhost','shaun','test1234', 'ninja_pizza');

//check conection

if(!$conn){
    echo 'conection error' . mysqli_connect_error();
}


?>