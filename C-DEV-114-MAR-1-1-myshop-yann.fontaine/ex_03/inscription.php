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
   
   
   <title>INSCRIPTION</title>
  
  
   <meta charset="utf-8">
  
</head>
<body>
  
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