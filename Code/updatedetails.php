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

<?php
if(isset($_POST['submit'])){
    $u=$_POST['Username'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $a=$_POST['address'];
    $p=$_POST['phone'];
    try {
        $server="localhost";
        $user="root";
        $password="";
        $db="php_project";
        $dbcon=new PDO("mysql:host=$server; dbname=$db",$user,$password);
        $updatequery="UPDATE customer SET username=?, name=?, email=?, address=?, phone_no=? WHERE id=?";
        $stmt=$dbcon->prepare($updatequery);
        $stmt->execute([$u,$n,$e,$a,$p,$customer_id]);
        $_SESSION["username"]=$u;
      header('location: homepage.php');
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
            <style>
            
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }
    body{
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .container{
      max-width: 700px;
      width: 100%;
      background-color: #fff;
      padding: 25px 30px;
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .container .title{
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }
    .container .title::before{
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 30px;
      border-radius: 5px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .content form .user-details{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
      margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
    }
    form .input-box span.details{
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }
    .user-details .input-box input{
      height: 45px;
      width: 100%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
      border-color: #9b59b6;
    }
     form .gender-details .gender-title{
      font-size: 20px;
      font-weight: 500;
     }
     form .category{
       display: flex;
       width: 80%;
       margin: 14px 0 ;
       justify-content: space-between;
     }
     form .category label{
       display: flex;
       align-items: center;
       cursor: pointer;
     }
     form .category label .dot{
      height: 18px;
      width: 18px;
      border-radius: 50%;
      margin-right: 10px;
      background: #d9d9d9;
      border: 5px solid transparent;
      transition: all 0.3s ease;
    }
     #dot-1:checked ~ .category label .one,
     #dot-2:checked ~ .category label .two,
     #dot-3:checked ~ .category label .three{
       background: #9b59b6;
       border-color: #d9d9d9;
     }
     form input[type="radio"]{
       display: none;
     }
     form .button{
       height: 45px;
       margin: 35px 0
     }
     form .button input{
       height: 100%;
       width: 100%;
       border-radius: 5px;
       border: none;
       color: #fff;
       font-size: 18px;
       font-weight: 500;
       letter-spacing: 1px;
       cursor: pointer;
       transition: all 0.3s ease;
       background: linear-gradient(135deg, #71b7e6, #9b59b6);
     }
     form .button input:hover{
      /* transform: scale(0.99); */
      background: linear-gradient(-135deg, #71b7e6, #9b59b6);
      }
     @media(max-width: 584px){
     .container{
      max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
      }
      form .category{
        width: 100%;
      }
      .content form .user-details{
        max-height: 300px;
        overflow-y: scroll;
      }
      .user-details::-webkit-scrollbar{
        width: 5px;
      }
      }
      @media(max-width: 459px){
      .container .content .category{
        flex-direction: column;
      }
    }
    #add{
        width:200%;
    }
            </style>
        </head>
        <body>
        
            <div class="container">
        <div class="title">Update Account</div>
        <div class="content">
      <form action="" method="post">
          
            <div class="user-details">
              <div class="input-box">
                <span class="details">Product Name</span>
                <input type="text" value="<?php echo $username; ?>" placeholder="name" name="name" required>
              </div>
              <div class="input-box">
                <span class="details">Your Name</span>
                <input type="text" placeholder="Enter your name" name="Username" value="<?php echo $customer_name; ?>"" required>
              </div>
              <div class="input-box">
                <span class="details">Your Email</span>
                <input type="text" placeholder="Enter your email" name="email" value="<?php echo $customer_email; ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Your Contact No</span>
                <input type="text" placeholder="Enter your number" name="phone" value="<?php echo $customer_phone; ?>" required>
              </div>
              <div id="add" class="input-box">
                <span class="details">Your Address</span>
                <input type="text" placeholder="Enter Your Address" name="address" value="<?php echo $address; ?>" required>
              </div>
             
            </div>
         
            <div class="button"><input class="sell" id="sell" type="submit" name="submit" value="Submit">          
            </div>
          </form>
        </div>
      </div>
    
        </body>
    </html>