<?php
session_start();
$sessionset=$_SESSION["isset"];
if($sessionset!=true){
    header('location: invalid.php');
}
else {
    $id=$_SESSION["customerid"];
    $user=$_SESSION["username"];
    $address=$_SESSION["address"];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ITEM ADDED</title>
        <div style="overflow: hidden;">
            <p style="float: left;">Hi <?php echo $user ?>&nbsp;&nbsp; <a href="homepage.php">HOME PAGE</a></p>
            <p style="float: right;"><a href="signout.php">SignOut</a></p>
        </div>
    </head>
    <body>
        <h1>YOUR ITEM HAS BEEN ADDED</h1>
    </body>
</html>
