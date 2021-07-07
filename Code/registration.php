<?php
if(isset($_POST['submit'])){
    $u=$_POST['username'];
    $pass=$_POST['password'];
    $p=base64_encode($pass);
    $n=$_POST['username'];
    $e=$_POST['email'];
    $add=$_POST['address'];
    $phone=$_POST['phone_no'];
    try{
        $user="root";
        $server="localhost";
        $password="";
        $db="php_project";
        $dbcon=new PDO("mysql:host=$server; dbname=$db" ,$user,$password);
        $insertquery="INSERT INTO customer(username,password,name,email,address,phone_no) VALUES ('$u','$p','$n','$e','$add','$phone')";
        $query=$dbcon->query($insertquery);
        header('location: index.php');
    } catch(PDOException $e){
        echo "Error:".$e->getMessage();
    }
}
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title><style>
        html{
    background-color: #f3f3f3;
}

.form-register{
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;

    font: bold 14px sans-serif;
    text-align: center;
}

.form-register-with-email{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 130px;
    text-align: center;
}

.form-register-with-email .form-white-background{
    width: 570px;
    box-sizing: border-box;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 60px 80px;
    margin-bottom: 35px;
}

.form-register-with-email .form-row{
    text-align: left;
    margin-bottom: 23px;
}

.form-register-with-email .form-title-row{
    text-align: center;
    margin-bottom: 50px;
}

.form-register-with-email h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 20px 15px;
    border-bottom: 2px solid #6caee0;
    margin: 0;
}

.form-register-with-email .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 125px;
    text-align: right;
    padding-right: 25px;
}

.form-register-with-email input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 230px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form-register-with-email .form-checkbox input{
    margin-left: 128px;
    margin-right: 10px;
    width: auto;
    vertical-align: top;
}

.form-register-with-email .form-row .form-checkbox span{
    font-size: 12px;
    font-weight: normal;
    display: inline-block;
    text-align: left;
    width: 220px;
    margin: 0;
}

.form-register-with-email .form-checkbox span a{
    text-decoration: none;
    color:  #6caee0;
}

.form-register-with-email button{
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

.form-register-with-email .form-log-in-with-existing{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
    color: #7b9d62;
    background-color: #d6f0c3;
}

.form-register-with-email:after{
    content: 'OR';
    position: absolute;
    bottom: 330px;
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
    margin-top: 100px;
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

/*	Making the form responsive. Remove these media queries
    if you don't need the form to work on mobile devices. */

@media (max-width: 900px) {

    .form-register{
        margin: 20px auto;
    }

    .form-register-with-email{
        position: relative;
        display: block;
        margin: 0;
    }

    .form-register-with-email .form-white-background{
        margin: 0 auto 32px;
    }

    .form-register-with-email:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-sign-in-with-social {
        margin-top: 105px;
    }

}

@media (max-width: 600px) {

    .form-register-with-email .form-white-background{
        width: 300px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .form-register-with-email .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 10px;
    }

    .form-register-with-email input{
        display: block;
        margin: 0 auto;
    }

    .form-register-with-email .form-checkbox input{
        display: inline-block;
        margin-left: 0;
    }

    .form-register-with-email .form-checkbox span{
        width: 200px !important;
    }

    .form-register-with-email:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

}
        </style>
    </head>
    <body>
      
        <div class="main-content">

       

        <form class="form-register" method="post" action="">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Username</span>
                            <input type="text" name="username">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" minlength="5">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Address</span>
                            <input type="text" name="address">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Mobile No.</span>
                            <input type="number" name="phone_no" maxlength="10" mminlength="10">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="terms.html">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit">Register</button>
                    </div>

                </div>

                <a href="index.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

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
    </body>
</html>





