<?php
if(!empty($_POST['username']) && !empty($_POST['password'])){
if(isset($_POST['submit'])){
    $u=$_POST['username'];
    $p=$_POST['password'];
    $pass=base64_encode($p);
    try {
        $server="localhost";
        $user="root";
        $password="";
        $db="php_project";
        $dbcon=new PDO("mysql:host=$server; dbname=$db",$user,$password);
        $selectquery="SELECT * FROM customer WHERE username=? && password=?";
        $stmt=$dbcon->prepare($selectquery);
        $stmt->execute([$u,$pass]);
        if($stmt->rowCount()>0){
            $result=$stmt->fetch(PDO::FETCH_OBJ);
            session_start();
            $_SESSION["customerid"]=$result->id;
            $_SESSION["username"]=$result->username;
            $_SESSION["name"]=$result->name;
            $_SESSION["phone_no"]=$result->phone_no;
            $_SESSION["email"]=$result->email;
            $_SESSION["address"]=$result->address;
            $_SESSION["isset"]=true;
            header('location: homepage.php');
        }
        else{
            echo "Incorect Username or Password";
        }
    } catch (PDOException $e) {
        echo "Error:".$e->getMessage();
    }}
    else{
        echo "<script>alert('Username or pAssword missing')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
html{
    background-color: #f3f3f3;
}

.form-login{
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;
    margin-top:100px;
    font: bold 14px sans-serif;
    text-align: center;
}

.form-log-in-with-email{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 130px;
    text-align: center;
}

.form-log-in-with-email .form-white-background{
    width: 570px;
    box-sizing: border-box;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 60px 80px;
    margin-bottom: 32px;
}

.form-log-in-with-email .form-row{
    text-align: left;
    margin-bottom: 23px;
}

.form-log-in-with-email .form-title-row{
    text-align: center;
    margin-bottom: 60px;
}

.form-log-in-with-email h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 30px 15px;
    border-bottom: 2px solid #6caee0;
    margin:0;
}

.form-log-in-with-email .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 125px;
    text-align: right;
    padding-right: 25px;
}

.form-log-in-with-email input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 230px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form-log-in-with-email button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 15px 35px;
    border: 0;
    margin: 55px auto 0;
    cursor: pointer;
}

.form-log-in-with-email .form-forgotten-password,
.form-log-in-with-email .form-create-an-account{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
}

.form-log-in-with-email .form-forgotten-password{
    color:  #4e9eda;
}

.form-log-in-with-email .form-create-an-account{
    color:  #7b9d62;
    background-color: #d6f0c3;
}

.form-log-in-with-email:after{
    content: 'OR';
    position: absolute;
    bottom: 260px;
    right: -100px;

    border-radius: 50%;
    background-color: #edeca5;
    width: 50px;
    height: 50px;
    color: #93923b;
    font-size: 17px;
    line-height: 50px;
}

.form-sign-in-with-social{
    display: inline-block;
    max-width: 180px;
    box-sizing: border-box;
    vertical-align: top;
    text-align: center;
    margin-top: 70px;
}

.form-sign-in-with-social .form-title-row{
    margin-bottom: 50px;
}

.form-sign-in-with-social .form-title{
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 15px 20px;
    border-bottom: 2px solid #6caee0;
}

.form-sign-in-with-social .form-google-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(222, 110, 60, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}

.form-sign-in-with-social .form-facebook-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(75, 136, 194, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}

.form-sign-in-with-social .form-twitter-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(123, 195, 226, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}


@media (max-width: 900px) {

    .form-login{
        margin: 20px auto;
    }

    .form-log-in-with-email{
        position: relative;
        display: block;
        margin: 0 0 50px;
    }

    .form-log-in-with-email .form-white-background{
        margin: 0 auto 32px;
    }

    .form-log-in-with-email:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-sign-in-with-social{
        margin-top: 60px;
    }

}

@media (max-width: 600px) {

    .form-log-in-with-email .form-white-background{
        width: 300px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .form-log-in-with-email .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 10px;
    }

    .form-log-in-with-email .form-email,
    .form-log-in-with-email .form-password{
        display: block;
        margin: 0 auto;
    }

    .form-log-in-with-email:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-log-in-with-email .form-forgotten-password,
    .form-log-in-with-email .form-create-an-account{
        display: block;
        margin: 5px auto;
        max-width: 180px;
    }

}

        </style>
    </head>
    <body>
    <div id="container">



<div class="main-content">



<form class="form-login" method="post" action="#">

    <div class="form-log-in-with-email">

        <div class="form-white-background">

            <div class="form-title-row">
                <h1>Log in</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Username</span>
                    <input placeholder="Username" name="username" type="username" name="username">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Password</span>
                    <input placeholder="Password" name="password" type="password" name="password">
                </label>
            </div>


            <div class="form-row">
                <button name="submit" type="submit">Log in</button>
            </div>

        </div>


        <a href="registration.php" class="form-create-an-account">Create an account &rarr;</a>

    </div>

    <div class="form-sign-in-with-social">

        <div class="form-row form-title-row">
            <span class="form-title">Sign in with</span>
        </div>

        <a href="#" class="form-google-button">Google</a>
        <a href="#" class="form-facebook-button">Facebook</a>
        <a href="#" class="form-twitter-button">Twitter</a>

    </div>

</form>

</div>


</div>
    </body>
</html>