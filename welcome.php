<?php

$name="";
$password="";

session_start();

    if(isset($_SESSION['name'])){
        
        echo "<h1> Welcome".$_SESSION['name']."</h1>";

        echo "<a href='product.php'>product</a><br>";
        
        echo "<br> <a href='logout.php'><input type=button value=logout 
        name=logout></a>" ;
    }
    else{
        if($_POST['name']==$name && $_POST['pwd']==$pwd){
        $_SESSION['name']=$name;
        
        echo "<script>location.href='welcome.php'</script>";
    }
    else{
        echo "<script>alert('username or password incorrect!')</
        script>";

        echo "<script>location.href='login.php'</script>";
    }
}