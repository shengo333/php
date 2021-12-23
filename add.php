<?php  

if(isset($_POST['submit'])){


    //check email
    if(empty($_POST['email'])){
        echo 'email is required <br/>' ;
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email is not valid';
        }
    }

    //check title
    if(empty($_POST['title'])){
        echo 'title is required <br/>' ;
    } else {
        echo htmlspecialchars($_POST['title']);
    }

    // check ingridients
    if(empty($_POST['ingredients'])){
        echo 'ingredients are required <br/>' ;
    } else {
        echo htmlspecialchars($_POST['ingredients']);
    }
}   //end of post check

?>

<!DOCTYPE html>
<html>

    <?php include('template/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label>Your email:</label>
        <input type="text" name="email">
        <label>Pizza title:</label>
        <input type="text" name="title">
        <label>Ingredients comma separated:</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

    <?php include('template/footer.php') ?>

</html>