<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


    $pdo = new PDO('mysql:host=localhost;dbname=my_shop;port=8889', 'root', 'root');
    $requete = "SELECT * FROM users WHERE email= '".$email."'";
    $stmt = $pdo->prepare($requete);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(isset($row[0])){
        $user = $row[0];
        if(password_verify($password,$user['password'])===true){
            if(isset($_POST['remember'])){
                session_start();
                $_SESSION['user'] = $user;
            }
            header("Location: ./index.php");
        }
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <title>Please Login</title>
</head>
<header>
    <nav class="navbar navbar-expand-md p-0 ml-2 navbar-light bg-white ">
        <a class="navbar-brand pt-0" href="index.php"><img src="Images/Logo.png"  alt="Instan-Tea"></a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse "
             id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-dark ml-3 mr-0 pr-0"
                       href="index1.html">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark ml-3 mr-0 pr-0" href="shop.html">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark ml-3 mr-0 pr-0" href="mag.html">MAGAZINE</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse flex-row-reverse" id="Navbarirght">
            <ul class="navbar-nav d-flex">
                <li class="nav-item ml-auto p-2">
                    <a class="nav-link text-dark mx-2" href="cart.html"> <img src="Images/cartvide.png" width="30" height="30" > <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-auto p-2 mr-0">
                    <a class="nav-link text-dark " href="login.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!-- FORMULAIRE DE CONNEXION -->
<body>
<form action="login.php" method="post" style="margin-top: 5%;margin-left: 23%;">

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" value="Submit">Submit</button>

        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="margin-left: 20%;margin-top: 2%;">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
</body>
