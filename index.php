<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>
<body>
    
    <h1>Authors</h1>
    <?php include './get_authors.php';?>
    <ul>
        <?php foreach($authors as $author):?>
                <li>
                    <img src = "<?php echo $author->picture->medium;?>" alt="img author">
                    <span>
                        <?php 
                            echo $author->name->first . ' ';
                            echo $author->name->last;
                        ?>
                    </span>
                </li>
        <?php endforeach;?>
    </ul>

</body>
</html>