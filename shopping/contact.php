<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art gallery-contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5b8ee6432.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-color:lightblue;
        }
        .container{
            padding-left:70px;
            padding-top:20px;
            padding-bottom:50px;
            background-color: grey;
            max-width: 600px;  
            border-radius:5px; 
        }
        form input{
            border-radius:5px;
            outline:none;
        } 
        form button{
            background: green;
            width: 50%;
            height: 35px;
            border-radius: 5px;
        }
         
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info px-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="https://www.instagram.com/nayan_drawings/">
                <i class="fa-brands fa-instagram-square" width="30" height="24"></i>
            </a>
            <a class="navbar-brand" href="https://twitter.com/Narayan_9999_">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a class="navbar-brand" href="#">
                <i class="fa-brands fa-facebook-square"></i>
            </a>
        </div>
    </nav>
    <h1 class="text-dark my-3 px-3">Contact Us</h1>
    <div class="container">
    <form class="myForm px-164" action="" method="post">
        <label>Name</label>
        <input name="name" type="text" placeholder="Enter Name">
        <br><br>
        <label>Email</label>
        <input name="email" type="text" placeholder="Enter Email">
        <br><br>
        <label>Mobile no</label>
        <input name="phn" type="text" placeholder="Enter phn number">
        <br><br>
        <label>Subject</label>
        <input name="subject" type="text" placeholder="Enter Subject">
        <br><br>
        <p>Message</p>
        <textarea name="body" rows="4" placeholder="Enter Message"></textarea>
        <br><br>
        <button type="submit" name="submit" onclick="alert();">Submit</button>
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $user= $_POST['name'];
        $phn=$_POST['phn'];
        $to_email = "narayanjasthi@gmail.com";
        $subject = $_POST['subject'];
        $message = $_POST['body'];
        $header = "From: ".$email;
        $txt= "Mobile no".$phn.".\n\n".$message;
        if (mail($to_email, $subject, $txt,$header)) {
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        } else {
        echo "Email sending failed...";
        }
  }  
  ?>

</body>
</html>