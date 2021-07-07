<?php
session_start();
$sessionset=$_SESSION["isset"];
if($sessionset!=true){
    header('location: invalid.php');
}
else{
    $cid=$_SESSION["customerid"];
    $user=$_SESSION["username"];
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Your Sellings</title>
        <style>
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
        <li><a href='sell.php' itemprop='url' title='Home'><span itemprop='name'>Sell</span></a></li>
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

    <?php 
    try{
        $user="root";
        $server="localhost";
        $password="";
        $db="php_project";
        $dbcon=new PDO("mysql:host=$server; dbname=$db" ,$user,$password);
        $selectquery="SELECT * FROM buy WHERE buyer_id=?";
        $stmt=$dbcon->prepare($selectquery);
        $stmt->execute([$cid]);
        while($result=$stmt->fetch(PDO::FETCH_OBJ)){
            ?>
<div class="content" >
    <img class="img"src="image/<?php echo $result->image_name; ?>">
    <input type="hidden" name="id" value="<?php echo $result->id; ?>">
    <h3 name="id"><?php echo $result->id; ?></h3>
    <p><?php echo "<h3>".$result->product_name ."</h3>"; ?></p>
        <h6> <?php  echo $result->price;?></h6>
        <ul>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          </ul>
          
          </div>
          
          </body>
          </html>
          <?php            
        
    }
    $count=$stmt->rowCount();
    if($count==0){
        echo "<h1>Currently You have no buys</h1>";
    }
}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}
}
?>


