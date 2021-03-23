<?php
include_once ('fonctions/mesFunctionsSQL.php');
include_once ('fonctions/general.php');

adminIsOkey();
if(isset($_POST['id'])){
    $admin=0;
    if(isset($_POST['admin'])){ $admin=1; }
    updateUser($_POST['id'], $_POST['username'],$_POST['email'], $admin);
    header('location: ./users.php');

}


if(isset($_GET['id'])){
    $user = readUser($_GET['id']);
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

    <title></title>

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
                <?php if(isset($_SESSION['user'])){ ?>

                    <!--BIEN FAIRE ATTENTION A CE QUE LE LOGOUT SOIT TOUJOURS APPARENT !!!!-->
                    <li class="nav-item ml-auto p-2 mt-2 mr-0">Hello <?php echo $_SESSION['user']['username']; ?></li>
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
<?php if(isset($user)){ ?>
<form action="modifier-user.php" method="POST">
    <p>
        <a href="users.php">List of users</a>
        <input type="hidden" name="id"  value="<?php echo $user['id']; ?>"/>
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"  value="<?php echo $user['username']; ?>" >
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>" >
    </div>
    <div>
        <label>
            <?php if($user['admin']==1) {?>
            <input type="checkbox" checked="checked" name="admin"> Admin
            <?php } else {?>
            <input type="checkbox" name="admin"> Admin
            <?php } ?>
        </label>
    </div>
    <div class="button">
        <button type="submit">Submit</button>
    </div>
</form>

<?php
}
else { ?>
<p>Aucun utilisateur n'a été créé. Vous voulez peut-etre <a href="./formulaireUtilisateur.php" >créer un nouvel utilisateur ?</a></p>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
