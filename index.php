<?php  
//multi-dimensional arrays

    $blogs = [
        ['title' =>'mario party', 'author'=> 'mario', 'content' => 'lorem', 'likes' => '30'],
        ['title' => 'mario Kart cheats', 'author'=> 'toad', 'content' => 'lorem', 'likes' => '25'],
        ['title' => 'zelda hiden chest', 'author'=> 'link', 'content' => 'lorem', 'likes' => '50'],
    ];

    //print_r($blogs[1][1]);

    // echo $blogs[2]['author'];

    // echo count($blogs);

    $blogs[]=['title'=> 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes'=> '100'];

    //print_r($blogs);

    $popped = array_pop($blogs);

    print_r($popped)

?>

<!DOCTYPE html>
<html>
<head>
    <title>My first php page</title>
</head>
<body>
    

</body>
</html>