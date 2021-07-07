<?php
session_start();
$sessionset=$_SESSION["isset"];
if($sessionset!=true){
  header('location: invalid.php');
}
else {
    $seller_id=$_SESSION["customerid"];
    $user=$_SESSION["username"];
    $address=$_SESSION["address"];
    $seller_name=$_SESSION["name"];
    $seller_phone=$_SESSION["phone_no"];
    $seller_email=$_SESSION["email"];
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            /* .form{
                 margin:10px 290px;
                 align:center;
            }
            .sell{
                margin:10px;
            }
            #sell{
                border-radius:4px;
                height:50px;
                width:170px;
                color:red;
                background-color:yellow;
            } */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
.full{
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





.navmenu {
	width: 100%;
	background: #303030;
	display: inline-block
} 

#menu {
	color: #fff;
	font-size: 18px;
	position: relative;
	top: 5px;
	font-weight: 500;
	cursor: pointer;
	padding-left: 10px;
}

#menu a {
	text-decoration: none
}

nav {
	display: none;
  width:100%;
}

nav ul {
	list-style-type: none;
	padding-left: 0;
	font-size: 0;
	background-color: #303030
}

nav li {
	display: block;
	font-size: 16px;
	color: white;
        margin: 0 5px;
}

ul.navbar>li>a {
	color: #fff
}

nav a {
	display: block;
	padding: 2px;
	text-decoration: none;
	color: inherit
}


/*==Dropdown Menu==*/

.sub-menu li {
	list-style-type: none;
	display: inline-block
}

ul.navbar li ul.sub-menu {
	display: none;
	position: absolute
}

ul.navbar li {
	position: relative;
}

ul.navbar li:hover ul.sub-menu {
	display: block
}

.sub-menu li {
	margin-left: 0!important
}

ul.sub-menu>li>a {
	color: #fff;
}
ul.navbar>li>a:hover,
ul.sub-menu>li>a:hover {
	color: #66a992;
}

@media only screen and (max-width:720px) {
	nav ul {
		width: 100%!important
	}
	#sub-menu {
		display: none
	}
	nav a {
		padding: 5px 10px
	}
}

@media only screen and (min-width:720px) {
    #menu {
		display: none
	}
    #navbar{
    height: 50px;
    line-height: 50px;
}
	nav {
		display: block!important
	}
	nav li {
		display: inline-block
	}
    #search-form input {
	height: 50px;
    padding: 10px;
	margin: 5px 0;
 }
}


/*----- Search -----*/

#search-form {
	display: inline-block;
	padding-top: 4px;
	padding-right: 5px;
	float: right
}

#search-form input {
	width: 200px;
	float: left;
	border-radius: 2px 0 0 2px;
	font-size: 13px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 0;
    outline: 0;
	font-size: 100%;
	font: inherit
}

#button-submit {
	width: auto!important;
	float: right;
	border-radius: 0 2px 2px 0;
	background: #66a992;
	font-size: 13px;
	font-weight: 600;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
	color: #fff
}

@media only screen and (max-width: 720px) {
    .navmenu {
        padding: 5px;
    }
    #navbar{
         display: none;
        height: 24px;
        line-height: 24px;
        
    }
	.toggle-nav {
		padding: 6px 10px
	}
	#search-form input {
		width: 150px;
        padding: 5px;
        margin: 0;
	}
}

        </style>
    </head>
    <body>

  <section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
            <!-- Navbar HTML -->
    		<div class='content-wrapper'>
  <div class='navmenu'>
   <form action='/search' autocomplete='off' id='search-form' method='get'>
<input name='q' placeholder='Search here...' size='15' type='text'/>

<input id='button-submit' type='submit' value='Search'/>
        </form>
    <span id='menu'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAC9JREFUeNpi/P//PwM1AQsQU9VEJgYqg8FvICgMGUeel0eTzWiyGU02Qz/ZAAQYAOPcBjEdYroKAAAAAElFTkSuQmCC'  /></span>
    <nav id='navbar' itemprop='mainEntity' itemscope='itemscope' itemtype='https://schema.org/SiteNavigationElement'>
    <ul class='navbar'>
        <li><a href='homepage.php' itemprop='url' title='Home'><span itemprop='name'>Home</span></a></li>
        <li><a href='buy.php' itemprop='url' title='Home'><span itemprop='name'>buy</span></a></li>
        <li><a href='aboutus.php' itemprop='url' title='Home'><span itemprop='name'>About Us</span></a></li>
        <li><a href='contact.php' itemprop='url' title='Home'><span itemprop='name'>Contact Us</span></a></li>
        <li id='sub-menu'><span itemprop='name'>My Account</span><ul class="sub-menu">
        <li><a href='updatedetails.php' itemprop='url' title='Home'><span itemprop='name'>Update</span></a></li>
        <li><a href='delete.php' itemprop='url' title='Home'><span itemprop='name'>Delete</span></a></li>
        <li><a href='signout.php' itemprop='url' title='Home'><span itemprop='name'>Logout</span></a></li>
      </ul>
	
</nav>
</div>
</div>
</div>
		</div>
    </div>
</section>

    <!--<div style="overflow: hidden;">
        <p style="float: left;">Hi <?php echo $user ?>&nbsp;&nbsp; <a href="homepage.php">HOME PAGE</a></p>
        <p style="float: right;"><a href="signout.php">SignOut</a></p>
    </div> -->
    <div class="full">
    <div class="container">
      <div class="title">Contact</div>
      <div class="content">
        <div class="user-details">
              <form action="mail.php" method="post" enctype="multipart/form-data">

                    <div class="input-box">
                    <span class="details">Enter Your Name(if you want to give another name)</span>
                   <input type="text" class="sell" name="sname" value="<?php echo $seller_name; ?>" required>
                  </div>
                  <div class="input-box">            
            <span class="detail">Message </span>
                    <input type="text" class="sell" name="message"  required>
                    </div>
                    <div class="input-box">            
            <span class="detail">Enter Your Phone Number</span>
                    <input type="number" class="sell" name="no" value="<?php echo $seller_phone; ?>" required>
                    </div>
                    <div class="input-box">            
            <span class="detail">Enter Your Email</span>
                    <input type="text" class="sell" name="email" value="<?php echo $seller_email; ?>" required>
                    </div>
                    
                    <div class="input-box">            
            <span class="detail"><input class="sell" id="sell" type="submit" name="submit" value="Submit"></span>
            </div>
          </form>
          </div>
          </div>

            </div>
            </div>
        
  
    </body>
</html>
