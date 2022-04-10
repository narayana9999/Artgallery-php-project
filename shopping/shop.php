<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>art gallery</title>
    <style>
        body{
            background-color: lightblue;
            justify-content:center;
            display:flex;
        }
        .container{
            padding-left:100px;
            padding-top:70px;
            padding-bottom:30px;
            background-color: grey;
            max-width: 400px;  
            border-radius:5px;  
        }
        form .details{
            justify-content: space-between;
            margin:20px 0 12px 0;
            font-weight: 500;
            display: block;
        }
        form .details input{
            border-radius:5px;
            outline:none;
             
        }
        form .fdetails{
            justify-content: space-between;
            margin:20px 0 12px 0;
            font-weight: 500;
            display: block;
        }
        form .fdetails input{
            border-radius:5px;
            outline:none;    
        }
        form .fdetails input:hover{
            cursor: pointer;
        }
        form .submit button:hover{
            background-color: lightblue;
            cursor: pointer;
        }
        form .submit button{
            background: green;
            width: 50%;
            height: 25px;
            border-radius: 5px;
        }
         
    </style>
</head>
<body>
    <div class="container">
    <form action="ca2q1upload.php" method="post" enctype="multipart/form-data">
     
    <h1>Buy now</h1>
    <div class="details">
        <label>Name</label>
		<input type="text" name="username" required/>
	</div>
    <div class="details">
		 <label>Email</label>
         <input type="EMAIL" name="email" required/>
    </div>
    <div class="details">
        <label>Mobile number</label>
        <input type="tel" name="phn" required/>
    </div>
    <p>Message</p>
        <textarea name="body" rows="4" placeholder="Enter Message"></textarea>
        <br><br>
    <div class="submit">
    <button type="submit" name="submit">Submit</button>
    </div>
    </form>
    </div>
     
</body>
</html>