<?php  

//conect to database

$conn = mysqli_connect('localhost','shaun','test1234', 'ninja_pizza');

//check conection

if(!$conn){
    echo 'conection error' . mysqli_connect_error();
}

// write sql

$sql = 'SELECT title, id, ingredients FROM pizzas ORDER BY created_at';

// make quary & get result

$result = mysqli_query($conn, $sql);

// fetch resulting raws an an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory

mysqli_free_result($result);

//close conection to database

mysqli_close($conn);

//print_r($pizzas);

?>

<!DOCTYPE html>
<html>

    <?php include('template/header.php') ?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">
            <?php  foreach ($pizzas as $pizza) { ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6> <?php  echo htmlspecialchars($pizza['title']);?></h6>
                            <div><?php  echo htmlspecialchars($pizza['ingredients']);?></div>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>

            <?php } ?>   
        </div>
    </div>
    <?php include('template/footer.php') ?>

</html>