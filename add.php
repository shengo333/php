<?php  

$errors = array('email' => '', 'title'=> '', 'ingredients'=> '');

if(isset($_POST['submit'])){


    //check email
    if(empty($_POST['email'])){
        $errors['email'] =  'email is required <br/>' ;
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email is not valid';
        }
    }

    //check title
    if(empty($_POST['title'])){
        $errors['title'] =  'title is required <br/>' ;
    } else {
        $title= $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] =  'title must be only latters and space ';
        }
    }

    // check ingridients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] =  'ingredients are required <br/>' ;
    } else {
        $ingredients= $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'ingredients must be a comma separated list ';
        }
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
        <div class="red-text"> <?php echo $errors['email']?> </div>
        <label>Pizza title:</label>
        <input type="text" name="title">
        <div class="red-text"><?php echo $errors['title']?></div>
        <label>Ingredients comma separated:</label>
        <input type="text" name="ingredients">
        <div class="red-text"><?php echo $errors['ingredients']?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

    <?php include('template/footer.php') ?>

</html>