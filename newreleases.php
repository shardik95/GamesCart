<html>
   <head>
      <link rel="shortcut icon" href="icon.png">
      <title>Buy Games Online In India, Buy PC games, Buy PS4 games, Buy Xbox games At GamesCart.com</title>
	  <link rel="stylesheet" type="text/css" href="header.css">
	  <link rel="stylesheet" type="text/css" href="sider.css">
	  <link rel="stylesheet" type="text/css" href="bar.css">
	  <link rel="stylesheet" type="text/css" href="footer.css">
	  <style>
       #user{
		   width:100%;
		   background-color:#330033;
		   float:right;
		   margin-bottom:0px;
	   }
	   .tr1{
		   color:#FFCC00;
		    font-size:18px;
	   }
	   .tr2{
		   
	   }
	   .tr2 a:hover {
		   text-decoration:underline;
	   }
		#cart1{
		  padding:0px;
		  cellpadding:0px;
		  cellspacing:0px;
		}
		 .container{
		    width:58%;
            position:relative;
            margin-left:14%;
			margin-right:14%;
            height:400px;
            overflow:hidden;
			margin-top:35px;
			z-index:1;
			box-shadow: 5px 7px 5px #888888;
        }
		#console{
		  float:right;
		  display:inline;
		  width:12%;
		  margin-top:10px;
		  box-shadow: 5px 5px 5px #888888;
		  margin-right:15px;
		}
	  </style>
   </head>
   <body background="#FFFFFF" >
      <?php  
	    include('session.php');
		$w1=$w2="";
		if ( isset( $_POST['logout'] ) ){ 
		   if($flag){
			  //session_unset();
              session_destroy();
			   
               //echo "You have been logged out";
			   header("location: index.php");
		   }
		   else{
			   
			   header("location: login.php");
			   
		   }
		}
		if ( isset( $_GET['submit2'] ) ){
               $search = $_GET ['search']; 
               $_SESSION['sess1']=$search;
			   header("location: search.php");
			   
		}


	  ?>
      <div id="header1">
	  </div>
	  <div id="header2">
	  </div>
      <div id="header">
	    	 
	     <div id="space">
		 <div id="img">
	     <a href="index.php"><img src="logo.png" height="85px" width="300px"></a>
		 </div>
		 <div id="search">
		   
		    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                 <input type="text" placeholder="Search for Games, Consoles, Accessories and more..." required class="search" name="search">
                 <input type="submit" value="Search" class="button" name="submit2">				 
         </form>
		</div>
		<!--<div id="login">
		<form>
		   <input type="button" value="Log in" class="signin" >
		</form> 
		

		</div> -->
		
		<div id="wrap1">
		    <ul class="navbar1">
			     
                 <li><a href="login.php">Login </a>
				      <ul>
						   <li><a href="signup.php">Sign up</a></li>
						   <li><a href="login.php">Login</a></li>
						   <li><a href="#">forgot Password?</a></li>
						  
						</ul>
				 
				 </li>
				 
			</ul>
	
		</div>
		<div id="login">
		<form>
		   <input type="button" value="My Cart" class="signin" >
		</form>
		
		</div>
		<div id="login">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		   <input type="submit" value="logout" name="logout" class="signin" >
		</form>
		
		</div>
	  
	  <div id="wrap">
			    <ul class="navbar">
				   
				    <li><a href="ps4.php">PS4</a>
					    <ul>
						   <li><a href="Game.php?game_id=<?php echo "1";?>" >Grand Theft Auto V</a></li>
						   <li><a href="Game.php?game_id=<?php echo "2";?>">Witcher 3 : Wild Hunt</a></li>
						   <li><a href="Game.php?game_id=<?php echo "3";?>">Fifa 15</a></li>
						    <li><a href="Game.php?game_id=<?php echo "4";?>">Until Dawn</a></li>
						   <li><a href="Game.php?game_id=<?php echo "5";?>">Last of Us</a></li>

						</ul>
					</li>
					<li><a href="ps3.php">PS3</a>
					     <ul>
						    <li><a href="Game.php?game_id=<?php echo "6";?>">Watchdogs</a></li>
							<li><a href="Game.php?game_id=<?php echo "7";?>">Call of Duty : Advanced Warfare</a></li>
							<li><a href="Game.php?game_id=<?php echo "8";?>">Grand Theft Auto V</a></li>
							<li><a href="Game.php?game_id=<?php echo "9";?>">Tomb Raider</a></li>
							<li><a href="Game.php?game_id=<?php echo "10";?>">Hitman Absolution</a></li>
						 </ul>
					</li>
					<li><a href="xboxone.php">Xbox One</a>
					     <ul>
						    <li><a href="Game.php?game_id=<?php echo "11";?>">Batman Arkham Knight</a></li>
							<li><a href="Game.php?game_id=<?php echo "12";?>">Assassin's creed : Unity</a></li>
							<li><a href="Game.php?game_id=<?php echo "13";?>">Mad Max</a></li>
							<li><a href="Game.php?game_id=<?php echo "14";?>">HALO V : Guardians</a></li>
						 </ul>
					</li>
                    <li><a href="xbox360.php">Xbox 360</a>
                        <ul>
						    <li><a href="Game.php?game_id=<?php echo "15";?>">Forza Horizon</a></li>
							<li><a href="Game.php?game_id=<?php echo "16";?>">Halo V : Guardians</a></li>
							<li><a href="Game.php?game_id=<?php echo "17";?>">Gears of War</a></li>
							<li><a href="Game.php?game_id=<?php echo "18";?>">Alan Wake</a></li>
							<li><a href="Game.php?game_id=<?php echo "19";?>">FIFA 15</a></li>
						</ul>
                     </li>	
                    <li><a href="pc.php">PC</a>
                        <ul>
						    <li><a href="Game.php?game_id=<?php echo "20";?>">Witcher 3 : Wild Hunt</a></li>
							<li><a href="Game.php?game_id=<?php echo "21";?>">Metal Gear Solid V</a></li>
							<li><a href="Game.php?game_id=<?php echo "22";?>">Divinity : Orignial Sin</a></li>
							<li><a href="Game.php?game_id=<?php echo "23";?>">Call of Duty</a></li>
							<li><a href="Game.php?game_id=<?php echo "24";?>">Dues Ex : Mankind Divided</a></li>
						</ul>
                     </li>	
                      <li><a href="consoles.php">Consoles</a>
					   <ul>
						   <li><a href="Game.php?game_id=<?php echo "25";?>">Playstation 4</a></li>
						   <li><a href="Game.php?game_id=<?php echo "26";?>">Xbox one</a></li>
						   <li><a href="Game.php?game_id=<?php echo "27";?>">Playstation 3</a></li>
						   <li><a href="Game.php?game_id=<?php echo "28";?>">Xbox 360</a></li>
						</ul>

					</li>					 
			     </ul>
	          </div>
	 </div>
			  
	</div> 
	<div id="user">
	 <table cellpadding="10" cellspacing="3.2">
		     <tr>
			    <td class="tr1"><?php if($flag){echo "Welcome  ".$login_session;}
                  else {echo "Welcome Guest!";}
				?>&nbsp &nbsp</td>
				<?php
				 if($flag){
					 $w1="order.php";
					 $w2="profile.php";
				 }
				 else{
					 $w1="login.php";
					 $w2="login.php";
				 }
				?>
				<td class="tr2"><a href=<?php echo $w1; ?> class="tr1">My orders</a>&nbsp &nbsp</td>
				<td class="tr2"><a href=<?php echo $w2; ?> class="tr1">My Profile</a></td>
				
				
			 </tr>
		</table>	 
	</div>
	<div id="sideimg1">
		  <a href="Game.php?game_id=<?php echo "21";?>"><img src="side6.png" width="100%" ></a>
		</div>
	<div id="sideimg2">
		   <a href="Game.php?game_id=<?php echo "13";?>"><img src="side5.png" width="100%" ></a>
		</div>
<div id="console">
	 <a href="consoles.php"><img src="px1.png" width="95%"></a>
	</div>			
	<div class="container">
	
	<div id="imgGallary" >
    <img src="img1.jpg" alt="" width="100%" height="400" />
    <img src="img2.jpg" alt="" width="100%" height="400" />
    <img src="img3.jpg" alt="" width="100%" height="400" />
    <img src="img6.jpg" alt="" width="100%" height="400" />
	<img src="img5.jpg" alt="" width="100%" height="400" />
</div>
    
</div>
    
   <script>
(function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
})();
     </script>
	 <div id="main">
	   <div id="bar" >
	     <p id="pbar">New Releases</p>
		 
	   </div>
	   <div id="bar1">
	   </div>
	     <table id="price">
	   <tr>
	    <th><a href="Game.php?game_id=<?php echo "1";?>"><img src="<?php echo $img1;?>" width="auto" height="45%"></a></th>
		<th><a href="Game.php?game_id=<?php echo "2";?>"><img src="<?php echo $img2;?>" width="auto" height="45%"></a></th>
		<th><a href="Game.php?game_id=<?php echo "11";?>"><img src="<?php echo $img11;?>" width="auto" height="45%"></a></th>
		<th><a href="Game.php?game_id=<?php echo "6";?>"><img src="<?php echo $img6;?>" width="auto" height="45%"></a></th>
		</tr>
		<tr>
	 	 <td><p class="p1"><b><?php echo $pc1;?></b><a class="buy" href="Game.php?game_id=<?php echo "1";?>">Buy Now</a></p></td>
		 <td><p class="p1"><b><?php echo $pc2;?></b><a class="buy" href="Game.php?game_id=<?php echo "2";?>">Buy Now</a></p></td>
		 <td><p class="p1"><b><?php echo $pc11;?></b><a class="buy" href="Game.php?game_id=<?php echo "11";?>">Buy Now</a></p></td>
		 <td><p class="p1"><b><?php echo $pc6;?></b><a class="buy" href="Game.php?game_id=<?php echo "6";?>">Buy Now</a></p></td>
         
		</tr>
		 <tr>
	    <th><a href="Game.php?game_id=<?php echo "21";?>"><img src="<?php echo $img21;?>" width="auto" height="45%"></a></th>
		<th><a href="Game.php?game_id=<?php echo "22";?>"><img src="<?php echo $img22;?>" width="auto" height="45%"></a></th>
		<th><a href="Game.php?game_id=<?php echo "7";?>"><img src="<?php echo $img7;?>" width="auto" height="45%"></a></th>
		
		</tr>
		<tr>
	 	 <td><p class="p1"><b><?php echo $pc21;?></b><a class="buy" href="Game.php?game_id=<?php echo "21";?>">Buy Now</a></p></td>
		 <td><p class="p1"><b><?php echo $pc22;?></b><a class="buy" href="Game.php?game_id=<?php echo "22";?>">Buy Now</a></p></td>
		 <td><p class="p1"><b><?php echo $pc7;?></b><a class="buy" href="Game.php?game_id=<?php echo "7";?>">Buy Now</a></p></td>
		
         
		</tr>
		
		</table>
		
	
	 </div>
	 <div id="footer">
	     <table cellspacing="10" cellpadding="4">
		     <tr class="th">
			    <th>GamesCart</th>
				<th>Platforms</th>
				<th>My Account</th>
				<th>Help</th>
				
			 </tr>
			 <tr>
			   <td><a href="index.php">Home</a></td>
			   <td><a href="ps4.php">Playstation 4</a></td>
			   <td><a href="profile.php">My address</a></td>
			   <td><a href="privacy-policy.php">Privacy Policy</a></td>
			 </tr>
			 <tr>
			   <td><a href="abt-us.php">About us</a></td>
			   <td><a href="ps3.php">Playstation 3</a></td>
			   <td><a href="order.php">My orders</a></td>
			   <td><a href="faq.php">Help/Faq</a></td>
			 </tr>
			  <tr>
			   <td><a href="contact.php">Contact Us</a></td>
			   <td><a href="xboxone.php">Xbox one</a></td>
			   <td><a href="#">Shopping cart</a></td>
			   <td><a href="shipping-policy.php">Shipping policy</a></td>
			 </tr>
			  <tr>
			   <td><a href="#"></a></td>
			   <td><a href="xbox360.php">Xbox 360</a></td>
			   <td><a href="#"></a></td>
			   <td><a href="tandc.php">Terms and Conditions</a></td>
			 </tr>
			  <tr>
			   <td><a href="#"></a></td>
			   <td><a href="pc.php">PC</a></td>
			   <td><a href="#"></a></td>
			   <td><a href="#"></a></td>
			 </tr>
			 
		 </table>
		 <div align="right" class="img1" >
			  <a href="#"><img src="fb2.png"></a>
			  <a href="#"><img src="twt1.png"></a>
			  <a href="#"><img src="utube.png"></a>
	          <a href="#"><img src="gp2.png"></a>
			 <div>
			 <div class="last">
	    <p align="center">copyright &copy GamesCart Retail Pvt. Ltd. All rights reserved</p>
	 </div>
	 </div>
	 
   </body>
</html>