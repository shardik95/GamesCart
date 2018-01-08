<html>
      <head>
	  <?php 
	  $txt1=$txt2="";
	  include('session.php');
	  $file_name = $_GET['game_id'];
	  $ses_seq3="SELECT * FROM games where game_id='".$file_name."'";
	  $result4=mysqli_query($conn,$ses_seq3);
	  $row2=mysqli_fetch_assoc($result4);
	  $gname=$row2["game_name"];
	  $rd=$row2["release_date"];
	  $price=$row2["price"];
	  $type=$row2["type"];
	  $stock=$row2["stock"];
	  $img=$row2["image"];
	  $vid=$row2["video"];
	  $platform=$row2["platform"];
	   if($_SERVER["REQUEST_METHOD"]=="POST"){
		   $code=test_input($_POST["pcode"]); 
	   }
	   function test_input($data){
		   $data=trim($data);
		   $data=stripslashes($data);
		   $data=htmlspecialchars($data);
		   return $data;
	   }
	   if ( isset( $_POST['Check'] ) ){ 
	      $pin="SELECT pcode FROM pincode Where pcode='".$code."'";
	   $result5 = $conn->query($pin);
	   if($result5->num_rows > 0){
		   $txt1="-->Cash on delivery available";
		   $txt2="-->1-day delivery also available";
	   }
	   else{
		   $txt1="-->Cash on delivery not available";
		   $txt2="-->Express delivery not available";
	   }
	   
	   }
	  if ( isset( $_POST['logout'] ) ){ 
		   if($flag){
			   
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
      <link rel="shortcut icon" href="icon.png">
      <title>Buy <?php echo $gname; ?> At GamesCart.com</title>
	  <link rel="stylesheet" type="text/css" href="header.css">
	  <link rel="stylesheet" type="text/css" href="sider.css">
	  <link rel="stylesheet" type="text/css" href="bar.css">
	  <link rel="stylesheet" type="text/css" href="footer.css">
	  <link rel="stylesheet" type="text/css" href="header2.css">
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
	     #data{
		  float:left;
		 }
		 #info{
		font-size:100%;
		font-family: Arial, Helvetica, sans-serif;
		  
		 }
		  #info1{
		font-size:130%;
		font-family: Arial, Helvetica, sans-serif;
		  
		 }
		 .pic{
		   margin-top:0px;
			margin-left:14%;
			padding-left:10px;
			padding-top:0px;
			padding-right:10px
		 }
		 .stock{
		   padding:10px;
		 }
		 .buy1{
		    border-style:solid;
            border-width:1px;
            border-color:#1f5065;
		    padding:8px 15px;
			width:150px;
			height:50px;
			margin-left:35px;
			background-color:#366b82;
			color:#fafafa;
			float:right;
			}
			.video{
			padding-top:15px;
			margin-left:14%;
			margin-right:14%;
			margin-bottom:10px;
			margin-top:10px;
			}
			.bar2{
			margin-top:15px;
			margin-bottom:15px;
			
			}
			.desp{
			margin-top:10px;
	    margin-left:14%;
		margin-right:14%;
			}
	  </style>
	  	  </head>
	   <body background="#FFFFFF" >
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
                      <li><a href="consoles.html">Consoles</a>
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
		<div id="abt"><h1 id="head"><?php echo $gname;?></h1></div>
	    <br>
	    <hr>
		<div id="main">
		  <img src="<?php echo $img;?>" class="pic" width="330px" height="400px">
		  <div id="data">
		     <p id="info"><b>Platform:<?php echo $platform; ?><br><br>
			    Released on:<?php echo $rd?><br><br>
				<form name="pincode" method="post" action="Game.php?game_id=<?php echo $file_name;?>" >
				Check Pincode Serviceability:<input type="number" name="pcode"><br><br>
                <input type="submit" value="Check" class="buy" name="Check"><br>	
                <br>
                <?php 
				 echo "$txt1";
				?>
				<br>
				<?php 
				 echo "$txt2";
				?>
				</b></p>
				<br><br>
			<div>
			     <?php
				  if($stock){
					  $s1="instock.jpg";
				  }
				  else{
					  $s1="outstock.jpg";
				  }
				 ?>
				 <img src="<?php echo $s1; ?>" width="180px" height="100px" class="stock">
             </div>		
			  <br>
			  <?php 
			    if($type=="Released"){
					$t1="addcart.png";
				
				}
				else{
					$t1="preorder_button.png";
				}
				
			  ?>
			  <?php
			  if($stock){
					$ab="cart.php";
				}
				else{
					$ab="index.php";
				}
			  ?>
              <a href="<?php echo $ab; ?>"><img src="<?php echo $t1;?>" width="230px"></a> 
               <div style="float:left;margin-right:10px;padding-top:20px;color:#366b82;">
                   <p id="info1"><b>Price: <?php echo $price;?></b></p>
               </div>			   
		  </div>
		</div>
		
		<div class="video">
		<div id="bar" class="bar2">
	     <p id="pbar" >Video</p>
		 
	   </div>
	     <div id="bar1">
	   </div>
		<iframe width="100%" height="500px" src="<?php echo $vid;?>" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="abt"><h1 id="head">Product Description</h1></div>
	    <br>
	    <hr>
		<div id="abt"><b>The ever popular Game franchise returns. With an array of new features your ability to sneak past enemy lines will be tested more than ever before. 
<br><br>
The game will introduce new aspects to the game such as:<br><br>
A new open-world game design<br>
Realtime weather<br>
Realistic passage of time<br>
A variety of ways to navigate the vast new environments within the game</b></div>
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
			   <td><a href="ps4.html">Playstation 4</a></td>
			   <td><a href="profile.php">My address</a></td>
			   <td><a href="privacy-policy.php">Privacy Policy</a></td>
			 </tr>
			 <tr>
			   <td><a href="abt-us.php">About us</a></td>
			   <td><a href="ps3.html">Playstation 3</a></td>
			   <td><a href="order.php">My orders</a></td>
			   <td><a href="faq.php">Help/Faq</a></td>
			 </tr>
			  <tr>
			   <td><a href="contact.php">Contact Us</a></td>
			   <td><a href="xboxone.html">Xbox one</a></td>
			   <td><a href="#">Shopping cart</a></td>
			   <td><a href="shipping-policy.php">Shipping policy</a></td>
			 </tr>
			  <tr>
			   <td><a href="#"></a></td>
			   <td><a href="xbox360.html">Xbox 360</a></td>
			   <td><a href="#"></a></td>
			   <td><a href="tandc.php">Terms and Conditions</a></td>
			 </tr>
			  <tr>
			   <td><a href="#"></a></td>
			   <td><a href="pc.html">PC</a></td>
			   <td><a href="#"></a></td>
			   <td><a href="#"></a></td>
			 </tr>
			 
		 </table>
		 <div align="right" class="img1" >
			  <a href="#"><img src="fb2.png"></a>
			  <a href="#"><img src="twt1.png"></a>
			  <a href="#"><img src="utube.png"></a>
	          <a href="#"><img src="gp2.png"></a>
			 <div class="last">
	    <p align="center">copyright &copy GamesCart Retail Pvt. Ltd. All rights reserved</p>
	 </div>
	 </div>
		 
  </body>
</html>