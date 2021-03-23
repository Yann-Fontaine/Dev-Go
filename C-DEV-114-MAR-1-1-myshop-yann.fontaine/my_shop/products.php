<?php

include_once ('fonctions/mesFunctionsSQL.php');
include_once ('fonctions/mesFunctionsTable.php');
include_once ('fonctions/general.php');
include_once ('models/model.php');
include_once ('models/product.php');

adminIsOkey();

$headers = getHeaderTable();
$model = new model();
$products = $model->getAll('products');
if(isset($_POST['deleteProduct'])){
    $model = new model();
    $model->delete('products', $_POST['deleteProduct']);
    header('location: ./products.php');
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

        <title>Products</title>

</head>

<header>
    <!--ADMIN NAVBAR-->
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
                <?php if(isset($_SESSION['user']['username'])){ ?>

                    <!--BIEN FAIRE ATTENTION A CE QUE LE LOGOUT SOIT TOUJOURS APPARENT !!!!-->
                    <li class="nav-item ml-auto p-2 mt-2 mr-0">Hello <?php echo $_SESSION['user']['username'] ?></li>
                    <li class="nav-item ml-auto p-2 mr-0">
                        <a class="nav-link text-dark " href="signup.php" > LOGOUT </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <br>
</header>

<body class="background-color ">
<div class="table-responsive">
    <table class="table table-striped  ">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Picture URL</th>
            <th scope="col">Category ID</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <br>
        <?php
        /**
         * @var product $product
         */
            foreach ($products as $product ) {
        ?>
        <tbody class=" table tbody-light">
        <tr>
            <td><?php echo $product->getId(); ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getPrice(); ?></td>
            <td><?php echo $product->getDescription(); ?></td>
            <td><?php echo $product->getPicture(); ?></td>
            <td><?php echo $product->getCategoryId(); ?></td>

            <td>
                <form class="noborder" method="post">
                    <button type="button" class="btn-sm btn-primary btn-lg active "> <a href="modifier-product.php?id=<?php echo $product->getId(); ?>" class="text-light">EDIT</a></button>
                         <button type="submit" class="btn-sm btn-danger btn-lg active " name="deleteProduct" value="<?php echo $product->getId(); ?>">DELETE</button>
                </form>
            </td>
        </tr>
        <?php } ?>
        <tbody>
    </table>
    <button type="button" class="btn-sm btn-success btn-lg active " > <a href=formulaireProduct.php class="text-light">Create a product !</a>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
