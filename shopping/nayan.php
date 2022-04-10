<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art gallery-classic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#F5FFFA">
     <?php
     include './partials/connect.php'
     ?>
     <?php
     include './partials/header.php'
     ?>
     <h1 class="text-center text-primary my-3">Welcome to our store</h1>
     <h1 class="text-center text-success mb-4">Artist- Nayan</h1>
     <div class="container">
         <div class="row">
             <?php

$sql="SELECT * FROM photos WHERE artist='nayan' ";
$result= mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_name=$row['category_name'];
        $category_desc=$row['category_desc'];
        $category_image=$row['category_img'];
        $category_price=$row['category_price'];
         
        echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-5">
        <div class="card" style="width: 18rem;">
<img src='.$category_image.' class="card-img-top" alt="..." style="height:300px;object-fir:contain">
<div class="card-body" style="background-color:#CFECEC">
<h5 class="card-title">'.$category_name.'</h5>
<p class="card-text">'.substr($category_desc,0,55).'.....</p>
<p>'.$category_price.'/-</p>
<a href="details.php?details_id='.$category_id.'" class="btn btn-primary">know More</a>
</div>
</div>
</div>';
    }
}



?>
              
              
            </div>
</div>
</body>
</html>