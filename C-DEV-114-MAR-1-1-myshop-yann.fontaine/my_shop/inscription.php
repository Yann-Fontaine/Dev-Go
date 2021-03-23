<!DOCTYPE html>
<html>  


<?php  
if (isset($_POST['submit'])){

   
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$password_confirmation = htmlspecialchars(trim($_POST['password_confirmation']));
$user=array();

    if ($name&&$email&&$password&&$password_confirmation){
        if(strlen($name)<3 && strlen($name)>10){
            echo "Invalid name";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email";
        }
        if (strlen($password)>3 && strlen($password)<10 && $password==$password_confirmation){
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $pdo=new PDO('mysql:host=localhost;dbname=my_shop', 'root', 'root');
            $rq="INSERT INTO users (username, password, email, created_at) VALUES ('".$name."', '".$pass."', '".$email."', CURRENT_DATE);";
            $stmt=$pdo->prepare($rq);
            $stmt->execute();
        }
        else{
            echo "Invalid password or password confirmation";

        }
    }
    else{
        echo "Please fill all the blocks";
    }
}
?>
<head>
   
   
   <title>Register</title>
  
  
   <meta charset="utf-8">
  
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
                    <a class="nav-link text-dark " href="signup.php" > LOGOUT </a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </nav>
    <br>

  
<h1>Inscription<h1>
  
   <form method="post" action="inscription.php">
       <p>Name</p>
       <input type="text" id="name" name="name">
       <p>email</p>
       <input type="text" id="email" name="email">
       <p>Password</p>
       <input type="password" id="password" name="password">
       <p>Confirm your password</p>
       <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
       <input type="submit" name="submit" value="Register">
  
   </form>   
</body>
</html>
<?php
?>