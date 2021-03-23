<?php
session_start();
include_once ('models/model.php');
include_once ('models/product.php');
include_once ('models/categorie.php');

$model = new model();
$products = $model->getAll('products');
$categories = $model->getAll('categories');

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <title>Instan-tea</title>
</head>

<body>



<div class="control-responsive justify-content-center">
    <!--  NAVBAR -->
    <nav class="navbar navbar-expand-md p-0 ml-3 navbar-light bg-white ">
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
                        <a class="nav-link text-dark ml-3 mr-0 pr-0"
                           href="#">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark ml-3 mr-0 pr-0" href="shop.html">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark ml-3 mr-0 pr-0" target="_blank" href="mag.html">MAGAZINE</a>
                    </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse flex-row-reverse" id="Navbarirght">
            <ul class="navbar-nav d-flex">
                <li class="nav-item ml-auto p-2">
                    <a class="nav-link text-dark mx-2" href="cart.html"> <img src="Images/cartvide.png" width="30" height="30" > <span class="sr-only">(current)</span></a>
                </li>
                <?php if(!isset($user)){ ?>
                <li class="nav-item ml-auto p-2 mr-0">
                    <a class="nav-link text-dark " href="signin.php">LOGIN </a>
                <li>
                <?php } ?>
                <?php if(isset($user)){ ?>
                <li class="nav-item ml-auto p-2 mt-2 mr-0">Hello <?php echo $user['username']; ?></li>
                <li class="nav-item ml-auto p-2 mr-0">
                <li class="nav-item">
                    <a class="nav-link text-primary ml-2 mr-2 p-2 mt-2 mr-0" href="admin.php">ADMIN.</a>
                </li>
                    <a class="nav-link text-danger ml-2 mr-2 p-2 mt-2 mr-0 text-danger" href="signup.php" > LOGOUT </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <br>

    <!--RECHERCHE-->

        <div class="recherche ">
            <div class="ml-4">
                <img src="Images/Search.png">
            </div>
            <div class="ml-5 mr-4">
                <input  type="text" value="living room"  />
            </div>
            <div class="mx-3">
                <select name="tea" id="teaselect">
                    <option value="yolo">Best match</option>
                    <option value="Russian tea">Russian tea</option>
                    <option value="Chines tea">Chines tea</option>
                    <option value="Japanese tea">Japanese tea</option>
                    <option value="Relax items">Relax items</option>
                </select>
            </div>
        </div>


    </div>

    <!--ORDER BY-->

    <div class="containerPerso justify-content-center mt-5" >
        <select name="tea" id="teaselect2">
            <option value="yolo">Best match</option>
            <option value="Russian tea">Russian tea</option>
            <option value="Chines tea">Chines tea</option>
            <option value="Japanese tea">Japanese tea</option>
            <option value="Relax items">Relax items</option>
        </select>
        <select name="tea" id="selectFilter" class="my-3" >
            <option value="yolo">Category</option>
            <option value="Russian tea">Tea</option>
            <option value="Chines tea">Spoons</option>
            <option value="Japanese tea">Tea cup</option>
        </select>

        <div class="card mx-3 border border-0 " id="filterN">

            <p>FILTER BY</p>
            <div>
                <select name="tea" class="my-3">
                    <option>Collection</option>
                    <?php
                    foreach ($categories as $categorie){ ?>
                        <?php if($categorie->getParentId()==null){ ?>

                            <option><?php echo $categorie->getName(); ?></option>

                            </optgroup>

                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            </select>

            <div>
                <select name="tea" class="my-4">
                    <option>Category</option>
                    <?php
                    foreach ($categories as $categorie){ ?>
                        <?php if($categorie->getParentId()==null){
                        }
                        else{ ?>

                            <option><?php echo $categorie->getName(); ?></option>

                            </optgroup>

                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            </select>



            <div slider id="slider-distance" class="mb-5">
                <div>
                    <div inverse-left class="w70"></div>
                    <div inverse-right class="w70" ></div>
                    <div range class="l3r4"></div>
                    <span thumb class="l3"></span>
                    <span thumb class="l6"></span>
                    <div sign class="l3">
                        <span id="value">300</span>
                    </div>
                    <div sign class="l6">
                        <span id="value">600</span>
                    </div>
                </div>
                <input type="range" tabindex="0" value="300" max="1000" min="0" step="10" oninput="
            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[1].style.width=value+'%';
            children[5].style.left=value+'%';
            children[7].style.left=value+'%';children[11].style.left=value+'%';
            children[11].childNodes[1].innerHTML=this.value;" />

                <input type="range" tabindex="0" value="600" max="1000" min="0" step="10" oninput="
            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[3].style.width=(100-value)+'%';
            children[5].style.right=(100-value)+'%';
            children[9].style.left=value+'%';children[13].style.left=value+'%';
            children[13].childNodes[1].innerHTML=this.value;" />
            </div>
        </div>

        <?php
        /**
         * @var product $product
         */

        foreach ($products as $product) {
            /**
             * @var categorie $categories
             */
            $categorie = null;
            if($product->getCategoryId()!=0){
                $categorie = $model->getById("categories", $product->getCategoryId());
                if (isset($categorie)){
                    $categorieText = $categorie->getName();
                    while ($categorie->getParentId() != null) {
                        $categorie = $model->getById("categories", $categorie->getParentId());
                        $categorieText = $categorie->getName() . "/" . $categorieText;
                    }
                }
            }
            else {
                $categorieText='No category';
            }


            ?>
            <div class="card mx-3 border border-0" id="<?php echo $product->getId(); ?> cardWidth">
                <img class="card-img-top pointer imgContainer" src="<?php echo $product->getPicture(); ?>" alt="Card image cap">
                <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
                    <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                        <div class="row pt-0">
                            <div class="col pl-0 pointer">
                                <strong><?php echo $product->getName(); ?></strong>
                            </div>
                            </br>
                            <div class="col  pr-3 text-right">
                                <?php echo $product->getPrice();  ?>
                            </div>
                        </div>
                        <div class="row pt-0">
                            <div class="mr-0 mx-0 ml-0 pl-0 pr-0 pt-0 font-italic font-weight-lighter "> <?php echo $product->getDescription() ?></div>
                            <br/>
                            <div class="w-100"></div>
                            <div class="col-sm pl-0 text-secondary fz-85" >
                                <?php echo ($categorieText); ?>
                                <!-- rajouter categorie id -> name Japanese Garden -->
                            </div>
                            <div class="w-100"></div>

                            <div class="col-sm pl-0 pt-0 pt-1">
                                <div class="rating">
                                    <a href="#5" title="Donner 5 étoiles">★</a>
                                    <a href="#4" title="Donner 4 étoiles">★</a>
                                    <a href="#3" title="Donner 3 étoiles">★</a>
                                    <a href="#2" title="Donner 2 étoiles">★</a>
                                    <a href="#1" title="Donner 1 étoile">☆</a>
                                    <div class="col-sm pr-1 pt-0 pb-0 mt-0 text-right" >
                                        <img class="pointer pointMargin" width="25" height="25" src="Images/cart.png" alt="responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>



    <!--NNUMÉRO DES PAGES-->

    <div class="rounded-0 border-0 pagination-grand control-responsive justify-content-center" aria-label="...">
        <ul class="pagination border-0 rounded-0 ml-110" >

            <li class="page-item active rounded-0 border-0 pageMr10" aria-current="page">
        <span class="page-link rounded-0 border-0 pagiStyle">
          1
          <span class="sr-only">(current)</span>
        </span>
            </li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0 text-black-50 " href="#">2</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">3</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">4</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">5</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">6</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">7</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">8</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">9</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50 " href="#">></a>
            </li>
        </ul>
    </div>

    <div class="rounded-0 border-0 control-responsive pagination-petit justify-content-center" aria-label="...">
        <ul class="pagination border-0 rounded-0" >

            <li class="page-item active rounded-0 border-0" aria-current="page pageMr10;">
        <span class="page-link rounded-0 border-0 pagiStyle" >
          1
          <span class="sr-only">(current)</span>
        </span>
            </li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50" href="#">2</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50" href="#">3</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50" href="#">4</a></li>
            <li class="page-item border-0 pageMr10"><a class="page-link rounded-0 border-0  text-black-50" href="#">></a></li>
        </ul>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </body>
    </html>