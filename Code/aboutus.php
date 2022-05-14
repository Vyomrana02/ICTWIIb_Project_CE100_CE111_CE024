<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0px;
            padding:0px;
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
.navbar{
    padding:5px;
}
.about{
    line-height:52px;
    font-size:40px;
    
}
    </style>
</head>
<body>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
            
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
         
    		</div>
		</div>
    </div>
</section><br><br>

    <pre class="about">We are the devlopers of this site.We are students of DDU <br>University,Nadiad of Computer Science Department and made<br>this project in year 1 using PHP ,MySQL. 
	
</pre>
</body>
</html>