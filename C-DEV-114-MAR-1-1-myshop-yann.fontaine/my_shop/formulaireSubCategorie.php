<?php
include_once('fonctions/mesFunctionsSQL.php');
include_once('fonctions/general.php');
include_once('models/categorie.php');
include_once('models/model.php');

adminIsOkey();


if(isset($_POST['name']) && isset($_POST['parent_id'])){

    $categorie = new categorie();
    $categorie->setName($_POST['name']);
    $categorie->setParentId($_POST['parent_id']);
    $categorie->createCategorie();
}

$model = new model();
$categories = $model->getAll('categories');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" media="screen" type="text/css" href="styleadmin.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <title>Your admin page</title>

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
                    <a class="nav-link text-dark ml-5 mr-0 pr-0" href="../../../../Users/clairewendlandt/Downloads/categoryadmin/categories.php">CATEGORIES</a>
                </li>

            </ul>
        </div>

        <div class="collapse navbar-collapse flex-row-reverse" id="Navbarirght">
            <ul class="navbar-nav d-flex">
                <?php if(isset($user)){ ?>

                    <!--BIEN FAIRE ATTENTION A CE QUE LE LOGOUT SOIT TOUJOURS APPARENT !!!!
                    A REMODIFIER DEMAIN VARIABLES SESSIONS !!! Fait ailleurs.
                  -->
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


    <form action="../../../../Users/clairewendlandt/Downloads/categoryadmin/formulaireCategorie.php" method="POST">
        <p>
            <a href="../../../../Users/clairewendlandt/Downloads/categoryadmin/categories.php">List of categories</a>

            <input type="hidden" name="id" />
        <div>
            <label for="name">Name :</label>
            <input type="text" required id="name" name="name" >
        </div>
        <div>
        <label for="parent_id">Category ID </label>
            <select name="parent_id">
                <?php
                foreach ($categories as $categorie){ ?>
                    <?php if($categorie->getParentId()==null){ ?>
                        
                        <option value="<?php echo $categorie->getId(); ?>"><?php echo $categorie->getName(); ?></option>
                        
                        </optgroup>

                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>