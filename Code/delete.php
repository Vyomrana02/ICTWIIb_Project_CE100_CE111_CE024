<?php
session_start();
$sessionset=$_SESSION["isset"];
if($sessionset!=true){
    header('location: invalid.php');
}
else {
    $customer_id=$_SESSION["customerid"];
    $username=$_SESSION["username"];
    $address=$_SESSION["address"];
    $customer_name=$_SESSION["name"];
    $customer_phone=$_SESSION["phone_no"];
    $customer_email=$_SESSION["email"];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div style="overflow: hidden;">
            <p style="float: left;">Hi <?php echo $username ?>&nbsp;&nbsp; <a href="homepage.php">HOME PAGE</a></p>
            <p style="float: right;"><a href="signout.php">SignOut</a></p>
        </div>
        <form action="" method="post">
            <table>
                <th>Do You Really Want To DELETE Your Account?</th>
                <tr>
                    <td align="center"><input type="submit" name="yes" value="YES">&nbsp;
                        <input type="submit" name="no" value="NO">
                    </td>
                </tr>
            </table>

        </form>
    </body>
</html>
<?php
if(isset($_POST['yes'])){
    try {
        $server="localhost";
        $user="root";
        $password="";
        $db="php_project";
        $dbcon=new PDO("mysql:host=$server; dbname=$db",$user,$password);
        $deletequery="DELETE FROM customer WHERE id=?";
        $stmt=$dbcon->prepare($deletequery);
        $stmt->execute([$customer_id]);
        session_unset();
        session_destroy();
        header('location: index.php');
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
        }
}
if(isset($_POST['no'])){
    header('location: homepage.php');
}
?>
