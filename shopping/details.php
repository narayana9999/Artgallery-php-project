<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art gallery-details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include './partials/connect.php'
    ?>
    <?php
    include './partials/header.php'
    ?>
    <?php
    $id= $_GET['details_id'];
    $sql="Select * from `photos` where category_id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $category_id=$row['category_id'];
    $category_name=$row['category_name'];
    $category_desc=$row['category_desc'];
    $category_image=$row['category_img'];
    $category_price=$row['category_price'];
    $artist=$row['artist'];
    $size=$row['size'];
         
     ?>
<div class="jumbotron px-3">
    <p>
    <h1 class="display-4 py-5"><?php echo $category_name?></h1>
     <button class="btn btn-dark btn-lg"><a class="btn btn-dark" href="shop.php" 
    role="button">Shop now</a></button>
    <button class="btn btn-lg"><a class="btn btn-success" href="<?php echo $artist ?>.php"
        role="button">More from this artist</a></button>
</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
             
            <img src= <?php echo $category_image?> class="img-fluid" alt=" ">
            

        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger">
                <?php echo $category_name ?></h2>
            <p><?php echo $category_desc ?></p>
            <p><strong>Artist: </strong><?php echo $artist ?></p>
            <p><strong>Price:  
            <button class="btn btn-lg"><a class="btn btn-success" href="#"
        role="button"><?php echo $category_price ?>/-</a></button>
</p>
            <p><strong>Size: </strong><?php echo $size ?></p>
             
</div>
 
</body>
</html>