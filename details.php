<?php 

include('config/db_connect.php');

// check GET  request parameters
if(isset($_GET['id'])){

    $id= mysqli_real_escape_string($conn, $_GET['id']);
}

//make sql

    $sql ="SELECT * FROM pizzas WHERE id= $id";

// get queri result
    $result = mysqli_query($conn,$sql);

    //fetch result in array format

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    print_r($pizza)

?>


<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php') ?>

<div class="container center">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza['title']);?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza['email']);?></p>
        <p> <?php echo date($pizza['created_at']);?></p>
        <h5>Ingridients:</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']) ?></p>
    <?php else: ?> 
        <h5>No such Pizza exists</h5>
    <?php endif ?>


</div>

<?php include('template/footer.php') ?>

</html>