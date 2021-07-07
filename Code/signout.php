<?php
session_start();
if($_SESSION["isset"]==true){
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Thankyou for visiting us</h1>
        <p>Click <a href="index.php">Here</a> to go to main page</p>
    </body>
</html>
