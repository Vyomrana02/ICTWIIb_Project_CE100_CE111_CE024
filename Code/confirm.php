<?php
session_start();
$sessionset=$_SESSION["isset"];
if($sessionset!=true){
    header('location: invalid.php');
}else{
    error_reporting(E_ERROR | E_PARSE);
    $selected_item=$_SESSION["selected_item"];
    if($selected_item!=true){
        echo "<h1>Please Select an Item</h1>";
        echo "Click <a href='buy.php'>Here</a> to go back to home page";
    }else {
        $item_id=$_SESSION["item_id"];
        $customerid=$_SESSION["customerid"];
        $username=$_SESSION["username"];
        $address=$_SESSION["address"];
        $customer_name=$_SESSION["name"];
        $customer_phone=$_SESSION["phone_no"];
        $customer_email=$_SESSION["email"];
        try{
            $user="root";
            $server="localhost";
            $password="";
            $db="php_project";
            $dbcon=new PDO("mysql:host=$server; dbname=$db" ,$user,$password);
            $selectquery="SELECT * FROM item WHERE id=?";
            $stmt=$dbcon->prepare($selectquery);
            $stmt->execute([$item_id]);
            $result=$stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
        div{
            background-color:#303030;
            color:white;
        }
        </style>
    </head>
    <body>
    <div style="overflow: hidden;">
        <p style="float: left;">Hi <?php echo $username ?>&nbsp;&nbsp; <a href="homepage.php">HOME PAGE</a></p>
        <p style="float: right;"><a href="signout.php">SignOut</a></p>
    </div>
        <form action="" method="post">
            <table border="2" align="center">
                <tr>
                    <td colspan="2" align="center"><img src="image/<?php echo $result->image_name; ?>"</td>
                </tr>
                <tr>
                    <td colspan="2"><h2>&#8377; <?php  echo $result->price;?></h2></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo "<h3>".$result->product_name ."</h3>"; ?></td>
                </tr>
                <tr>
                    <td>Seller</td>
                    <td><?php echo $result->seller_name; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $result->address; ?></td>
                </tr>
                <tr>
                    <td>Seller Email</td>
                    <td><?php echo $result->email; ?></td>
                </tr>
                <tr>
                    <td>Contact No.</td>
                    <td><?php echo $result->phone_no; ?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">HEY <?php echo $username; ?> DO YOU WANT TO CONFIRM YOUR BUY <br>
                    <input type="submit" name="yes" value="YES">&nbsp;
                    <input type="submit" name="no" value="NO">
                    </td>
                </tr>
            </table>
        </form>
<?php
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }
}
?>
    </body>
</html>
<?php
if(isset($_POST['yes'])){
    $u="root";
    $ser="localhost";
    $pass="";
    $data="php_project";
    $con=new PDO("mysql:host=$ser; dbname=$data" ,$u,$pass);
    $insert="INSERT INTO buy(buyer_id,item_id,seller_id,product_name,seller_name,buyer_name,
    seller_address,buyer_address,seller_email,buyer_email,seller_phone_no,buyer_phone_no,price,image_name) 
    VALUES ('$customerid','$item_id','$result->seller_id','$result->product_name',
    '$result->seller_name','$customer_name','$result->address','$address','$result->email','$customer_email',
    '$result->phone_no','$customer_phone','$result->price','$result->image_name')";
    $query=$con->query($insert);

    $itemid=$result->id;
    $deletequery="DELETE FROM item WHERE id=?";
    $stmt=$dbcon->prepare($deletequery);
    $stmt->execute([$itemid]);  
      

         $to = $result->email;
         $subject = "About site the product";         
         $message = "Product:$result->product_name <br>Price:$result->price <br>Address:$result->address;<br>Phone:$result->phone_no;";       
         
         $header = "vyom.rana02@gmail.com";         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
         echo "<br>click <a href='homepage.php'>here</a> to go to homepage";
   
    
    
    header('location: homepage.php');
}
if(isset($_POST['no'])){
    header('location: buy.php');
}
?>
