<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5b8ee6432.js" crossorigin="anonymous"></script>
    <style>
      .active a{
        text-decoration:none;
        color: black;  
      }
      .sub-menu-l{
        display:none;
      }
      .collapse ul li:hover .sub-menu-l {
        display:block;
        position: absolute;
        background:#33BBFF;
      }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info px-3">
  <div class="container-fluid"> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="active px-3 py-2">
          <a href="#">Categories</a>
          <div class="sub-menu-l">
          <ul>
            <li><a href="nature.php">Nature</a></li>
            <li><a href="canvas.php">Canvas</a></li>
            <li><a href="fancy.php">Fancy</a></li>
            <li><a href="devotional.php">Classic</a></li>
          </ul>
          </div>
        </li>
        <li class="active px-3 py-2">
          <a href="#">Artists</a>
          <div class="sub-menu-l">
          <ul>
            <li><a href="nayan.php">Nayan</a></li>
            <li><a href="vivek.php">vivek</a></li>
            <li><a href="ravi.php">Ravi</a></li>
            <li><a href="Gaman.php">Gaman</a></li>
            <li><a href="bapu.php">Bapu</a></li>
            <li><a href="unknown.php">Unknown</a></li>
          </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact us</a>
        </li>
      </ul>
       <ul>
      <a class="navbar-brand" href="https://www.instagram.com/nayan_drawings/">
                <i class="fa-brands fa-instagram-square" width="30" height="24"></i>
            </a>
            <a class="navbar-brand" href="https://twitter.com/Narayan_9999_">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a class="navbar-brand" href="#">
                <i class="fa-brands fa-facebook-square"></i>
            </a>
       </ul>
    </div>
  </div>
</nav>
</body>
</html>