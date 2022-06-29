<?php
$uname="test";
$pwd="test";

session_start();

if(isset($_SESSION['uname'])){
    echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
    echo "<a href='index.php'>Weather</a><br>";

}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='welcome.php'</script>";
        
    }
    
    else{
        
        echo "<script>alert('Incorrect username or password')</script>";
    }
}


?>