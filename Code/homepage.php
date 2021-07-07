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
    $email=$_SESSION["email"];
}
?>
 <?php
      if(isset($_POST['submit'])){
          $i=$_POST['id'];
          $_SESSION["selected_item"]=true;
          $_SESSION["item_id"]=$i;
          header('location: confirm.php');
      }
      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BUY YOUR ITEMS</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
   
        <style>
             body{
      margin: 0;
      font-family:Nunito Sans;
      }
      h3{
      text-align: center;
      font-size: 30px;
      margin: 0;
      padding-top: 10px;
      }
      a{
      text-decoration: none;
      }
      .gallery{
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
      }
      .content{
      width: 24%;
      margin: 15px;
      box-sizing: border-box;
      float: left;
      text-align: center;
      border-radius:10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      padding-top: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: .4s;
      }
      .content:hover{
      box-shadow: 0 0 11px rgba(33,33,33,.2);
      transform: translate(0px, -8px);
      transition: .6s;
      }
      .img{
      width: 200px;
      height: 200px;
      text-align: center;
      margin: 0 auto;
      display: block;
      }
      p{
      text-align: center;
      color: #b2bec3;
      padding: 0 8px;
      }
      h6{
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 0;
      }
      ul{
      list-style-type: none;
      display: flex;
      /* justify-content: center;
      align-items: center; */
      padding: 0px;
      }
      li{
      padding: 5px;
      } 
      .fa{
      color: #ff9f43;
      font-size: 26px;
      transition: .4s;
      }
      .fa:hover{
      transform: scale(1.3);
      transition: .6s;
      }
      button{
      text-align: center;
      font-size: 24px;
      color: #fff;
      width: 100%;
      padding: 15px;
      border:0px;
      outline: none;
      cursor: pointer;
      margin-top: 5px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      }
      .buy-1{
      background-color: #2183a2;
      }
      .buy-2{
      background-color: #3b3e6e;
      }
      .buy-3{
      background-color: #0b0b0b;
      }
      @media(max-width: 1000px){
      .content{
      width: 46%;
      }
      }
      @media(max-width: 750px){
      .content{
      width: 100%;
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
	display: none
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
.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #2f2f2f;
  background-color: #fff;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
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
   <form action='search.php' autocomplete='off' id='search-form' method='get'>
<input name='q' placeholder='Search here...' name="st" size='15' type='text'/>

<input id='button-submit' type='submit' value='Search'/>
        </form>
    <span id='menu'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAC9JREFUeNpi/P//PwM1AQsQU9VEJgYqg8FvICgMGUeel0eTzWiyGU02Qz/ZAAQYAOPcBjEdYroKAAAAAElFTkSuQmCC'  /></span>
    <nav id='navbar' itemprop='mainEntity' itemscope='itemscope' itemtype='https://schema.org/SiteNavigationElement'>
    <ul class='navbar'>
        <li><a href='homepage.php' itemprop='url' title='Home'><span itemprop='name'>Home</span></a></li>
        <li><a href='sell.php' itemprop='url' title='Home'><span itemprop='name'>Sell</span></a></li>
        <li><a href='aboutus.php' itemprop='url' title='Home'><span itemprop='name'>About Us</span></a></li>
        <li><a href='contactus.php' itemprop='url' title='Home'><span itemprop='name'>Contact Us</span></a></li>
        <li id='sub-menu'><span itemprop='name'>My Account</span><ul class="sub-menu">
        <li><a href='updatedetails.php' itemprop='url' title='Home'><span itemprop='name'>Update</span></a></li>
        <li><a href='delete.php' itemprop='url' title='Home'><span itemprop='name'>Delete</span></a></li>
        <li><a href='signout.php' itemprop='url' title='Home'><span itemprop='name'>Logout</span></a></li>
      </ul>
		</li>
        
             </ul>
</nav>
</div>
</div>
<div style='clear: both;'/>
       <!-- End Navbar HTML -->    
    		</div>
		</div>
    </div>
</section>
    <!-- <div style="overflow: hidden;">
        <p style="float: left;">Hi <?php echo $user ?>&nbsp;&nbsp; <a href="homepage.php">HOME PAGE</a></p>
        <p style="float: right;"><a href="signout.php">SignOut</a></p>
    </div>-->
    
    <form action="" method="post">
    <div class="gallery"> 
        <?php
            try{
                $user="root";
                $server="localhost";
                $password="";
                $db="php_project";
                $dbcon=new PDO("mysql:host=$server; dbname=$db" ,$user,$password);
                $selectquery="SELECT * FROM item";
                $stmt=$dbcon->prepare($selectquery);
                $stmt->execute();
                
                while($result=$stmt->fetch(PDO::FETCH_OBJ)){
                    ?>


<div class="content" >
    <img class="img"src="image/<?php echo $result->image_name; ?>">
   
    <p><?php echo "<h3>".$result->product_name ."</h3>"; ?></p>
        <h6> ₹<?php  echo $result->price;?></h6>     
    <h3 name="id"><?php echo $result->seller_name; ?></h3>
    <h3><?php echo $result->phone_no; ?></h3>
        <ul>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
        </ul>
        <button class="buy-1" name="submit">Buy Now
        <input class="buy-1" type="submit" value=""></button>
      </div>
      
      
<?php
                }
                $count=$stmt->rowCount();
                if($count==0){
                    echo "<h1>Currently No item to sell</h1>";
                }
            }catch(PDOException $e){
                echo "Error:".$e->getMessage();
            }
            ?>

</div>
</form>

<br><p align="center"><h3>Check Your Current SELLINGS <a href="curruntsell.php">Here</a></h3></p><br>
        <p align="center"><h3>Check Your BUYINGS <a href="customerbuys.php">Here</a></p></h3><br>
        <p align="center"><h3>Check Your SELLINGS <a href="customersell.php">Here</a></h3></p>
</body>
</html>

        
