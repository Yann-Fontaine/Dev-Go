<!DOCTYPE html>
<html>
<body> 
<?php

$display=true;

    if (isset($_POST['submit'])){
        $display=false;
        echo "Hello ".$_POST['name'];
    }

    if($display){
?> 
<form method="post" action="index.php">
        <p>Name</p>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Register">  
</form>
<?php
    }
?>
</body>
</html>