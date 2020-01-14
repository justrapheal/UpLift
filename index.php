<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS File -->
  

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"><h1>UpLift</h1></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="btn btn-outline-light btn-lg" href="login.php">Login</a>
        </div>
    </nav>
<!-- small screen -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-md-none">
        <a class="navbar-brand" href="index.php"><h1>UpLift</h1></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <form class="navbar-nav ml-auto" action="">
                <input type="text" name="username" id="" placeholder="Username">
                <input type="password" name="password" id="" placeholder="Password">
                <button type="login" name=""><a href="login.php">Login</a></button>
            </form>
        </div>
    </nav>

    <!-- carousel -->

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
      
        <div class="carousel-caption text center">
                <h3>A social network platform for depressed people</h3>
               <a class="btn btn-outline-light btn-lg" href="register.php">REGISTER</a>
        </div>
    </div>

    <footer class="footer">
        <div class="col-md-5 text-center">
            <p>contact information</p>
        </div>
    </footer>
 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

