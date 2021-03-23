<?php
session_start();
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
                    <a class="nav-link text-dark " href="login.php">LOGIN </a>
                <li>
                <?php } ?>
                <?php if(isset($user)){ ?>
                <li class="nav-item ml-auto p-2 mt-2 mr-0">Hello <?php echo $user['username']; ?></li>
                <li class="nav-item ml-auto p-2 mr-0">
                    <a class="nav-link text-dark " href="logout.php" > LOGOUT </a>
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

<!--CARD FILTER BY-->

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

    <div class="card mx-3 border border-0 " id="filterN" style="width: 18rem; ">

        <p>FILTER BY</p>
        <select name="tea" class="my-3" >
        <option value="" style="color:#686969cc">Collection<br/></option>
        <option class="dropdown-item" href="#" value="japan">- Japanese Garden</option>
        <option class="dropdown-item" href="#" value="price">- Chinese Temple</option>
        <option class="dropdown-item" href="#" value="color">- Indian Shrine</option>
        <option class="dropdown-item" href="#" value="collection">- English Breakfast</option>
    </select>
        <select name="tea" class="my-3">
            <option value="" style="color:#686969cc">Usage<br/></option>
            <option class="dropdown-item" href="#" value="break">- Breakfast</option>
            <option class="dropdown-item" href="#" value="aftertea">- Afternoon Tea</option>
            <option class="dropdown-item" href="#" value="hightea">- High Tea</option>
            <option class="dropdown-item" href="#" value="herbal">- Herbal Tea</option>
        </select>
        <select name="tea" class="my-3">
            <option value="" style="color:#686969cc">Category<br/></option>
            <option class="dropdown-item" href="#" value="tea">- Tea</option>
            <option class="dropdown-item" href="#" value="kettle">- Kettles</option>
            <option class="dropdown-item" href="#" value="teacup">- Tea Cups</option>
            <option class="dropdown-item" href="#" value="access">- Accessories</option>
            <option class="dropdown-item" href="#" value="misc">- Miscellaneous</option>
        </select>



        <div slider id="slider-distance">
            <div>
                <div inverse-left style="width:70%;"></div>
                <div inverse-right style="width:70%;"></div>
                <div range style="left:30%;right:40%;"></div>
                <span thumb style="left:30%;"></span>
                <span thumb style="left:60%;"></span>
                <div sign style="left:30%;">
                    <span id="value">300</span>
                </div>
                <div sign style="left:60%;">
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

    <!--  PREMIERE CARTE -->
    <div class="card mx-3 border border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/teacupfalling.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Couple Teacups</strong>
                    </div>
                    <div class="col  pr-3 text-right">
                        $50,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        Japanese Garden
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
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png" alt="responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  DEUXIEME CARTE -->

    <div class="card mx-3 border border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/teacup.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Beijing Teacup</strong>
                    </div>
                    <div class="col pr-3 text-right">
                        $30,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        Chinese Temple
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 pt-0 pt-1">
                        <div class="rating">
                            <a href="#5" title="Donner 5 étoiles">★</a>
                            <a href="#4" title="Donner 4 étoiles">★</a>
                            <a href="#3" title="Donner 3 étoiles">★</a>
                            <a href="#2" title="Donner 2 étoiles">☆</a>
                            <a href="#1" title="Donner 1 étoile">☆</a>
                            <div class="col-sm pr-1 pt-0 pb-0 mt-0 text-right" >
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  TROISIEME CARTE -->


    <div class="card border mx-3 border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/TeacupE.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Lemon Tree</strong>
                    </div>
                    <div class="col  pr-3 text-right">
                        $26,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        English Breakfast
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
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUATRIEME CARTE -->

    <div class="card border mx-3 border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/contextea.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Full Set</strong>
                    </div>
                    <div class="col pr-3 text-right">
                        $640
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        Japanese Garden
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 pt-0 pt-1">
                        <div class="rating">
                            <a href="#5" title="Donner 5 étoiles">★</a>
                            <a href="#4" title="Donner 4 étoiles">★</a>
                            <a href="#3" title="Donner 3 étoiles">☆</a>
                            <a href="#2" title="Donner 2 étoiles">☆</a>
                            <a href="#1" title="Donner 1 étoile">☆</a>
                            <div class="col-sm pr-1 pt-0 pb-0 mt-0 text-right" >
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CINQUIEME CARTE -->

    <div class="card border mx-3 border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/teaspoons.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Welsh Spoons</strong>
                    </div>
                    <div class="col  pr-3 text-right">
                        $70,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        English Breakfast
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
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  SIXIEME CARTE -->

    <div class="card border mx-3 border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/india.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Full Set</strong>
                    </div>
                    <div class="col pr-3 text-right">
                        $730,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        Indian Shrine
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 pt-0 pt-1">
                        <div class="rating">
                            <a href="#5" title="Donner 5 étoiles">★</a>
                            <a href="#4" title="Donner 4 étoiles">☆</a>
                            <a href="#3" title="Donner 3 étoiles">☆</a>
                            <a href="#2" title="Donner 2 étoiles">☆</a>
                            <a href="#1" title="Donner 1 étoile">☆</a>
                            <div class="col-sm pr-1 pt-0 pb-0 mt-0 text-right" >
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  SEPTIEME CARTE -->
    <div class="card border mx-3 border-0" style="width: 20rem; ">
        <img class="card-img-top pointer imgContainer" src="Images/coffret-matcha1-416x416.jpg" alt="Card image cap">
        <div class="card-body row-cols-0 pt-2 d-flex align-items-end">
            <div class="container-fluid mr-0 mx-0 ml-0 pl-0 pr-0 pt-0">
                <div class="row pt-0">
                    <div class="col pl-0 pointer">
                        <strong>Macha Kit</strong>
                    </div>
                    <div class="col  pr-3 text-right">
                        $150,00
                    </div>
                </div>
                <div class="row pt-0">
                    <div class="w-100"></div>
                    <div class="col-sm pl-0 text-secondary" style="font-size: 0.85em;">
                        Japanese Garden
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
                                <img class="pointer" style="margin-top: -11px;" width="25" height="25" src="Images/cart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>



<!--NNUMÉRO DES PAGES-->

<div class="rounded-0 border-0 pagination-grand control-responsive justify-content-center" aria-label="...">
    <ul class="pagination border-0 rounded-0" style="margin-left: 110px;">

        <li class="page-item active rounded-0 border-0" aria-current="page" style="margin-right: 10px;">
        <span class="page-link rounded-0 border-0" style="color: white;background-color: grey;">
          1
          <span class="sr-only">(current)</span>
        </span>
        </li>
        <li class="page-item border-0" style="margin-right: 10px;"><a class="page-link rounded-0 border-0" style="color: black;" href="#">2</a></li>
        <li class="page-item border-0" style="margin-right: 10px;"><a class="page-link rounded-0 border-0" style="color: black;" href="#">3</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">4</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">5</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">6</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">7</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">8</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">9</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">></a>
        </li>
    </ul>
</div>

<div class="rounded-0 border-0 control-responsive pagination-petit justify-content-center" aria-label="...">
    <ul class="pagination border-0 rounded-0" >

        <li class="page-item active rounded-0 border-0" aria-current="page" style="margin-right: 10px;">
        <span class="page-link rounded-0 border-0" style="color: white;background-color: grey;">
          1
          <span class="sr-only">(current)</span>
        </span>
        </li>
        <li class="page-item border-0" style="margin-right: 10px;"><a class="page-link rounded-0 border-0" style="color: black;" href="#">2</a></li>
        <li class="page-item border-0" style="margin-right: 10px;"><a class="page-link rounded-0 border-0" style="color: black;" href="#">3</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">4</a></li>
        <li class="page-item border-0" style="margin-right: 10px"><a class="page-link rounded-0 border-0" style="color: black;" href="#">></a></li>
    </ul>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>