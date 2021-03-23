<?php
include_once ('fonctions/mesFunctionsSQL.php');
include_once ('fonctions/general.php');
include_once ('models/user.php');

adminIsOkey();


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
    $admin=0;
    if(isset($_POST['admin'])){ $admin=1; }

    $user = new user();
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setEmail($_POST['email']);
    $user->setAdmin($admin);

    $user->createUser();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" media="screen" type="text/css" href="styleadmin.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <title>New user</title>

</head>

<header>
    <nav class="navbar navbar-expand-md p-0 ml-3 navbar-light">
        <a class="navbar-brand pt-0" href="#"><img src="Images/Logo.png"  alt="responsive"></a>
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
                <li class="nav-item">
                    <a class="nav-link text-dark ml-5 mr-0 pr-0" href="admin.php">WELCOME ADMIN !</a>
                </li>
                <a class="nav-link text-dark ml-5 mr-0 pr-0" href="index.php">ENTER SHOP</a>
                <li class="nav-item">
                    <a class="nav-link text-dark ml-5 mr-0 pr-0"  href="users.php">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark ml-5 mr-0 pr-0" href="products.php">YOUR PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark ml-5 mr-0 pr-0" href="categories.php">CATEGORIES</a>
                </li>

            </ul>
        </div>

        <div class="collapse navbar-collapse flex-row-reverse" id="Navbarirght">
            <ul class="navbar-nav d-flex">
                <?php if(isset($user)){ ?>

                    <!--BIEN FAIRE ATTENTION A CE QUE LE LOGOUT SOIT TOUJOURS APPARENT !!!!-->
                    <li class="nav-item ml-auto p-2 mt-2 mr-0">Hello <?php echo $user['username']; ?></li>
                    <li class="nav-item ml-auto p-2 mr-0">
                        <a class="nav-link text-dark " href="signup.php" > LOGOUT </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <br>
</header>

<body class="background-color">


    <form action="formulaireUtilisateur.php" method="POST">
        <p>
            <a href="users.php">List of users</a>

            <input type="hidden" name="id" />
            <input type="hidden" name="action" />
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" id="password" name="password" >
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" >
        </div>
        <div>
            <label>
                <input type="checkbox" name="admin"> Admin
            </label>
        </div>
        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>