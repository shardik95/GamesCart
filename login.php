<html>
   <head>
      <link rel="shortcut icon" href="icon.png">
      <title>Buy Games Online In India, Buy PC games, Buy PS4 games, Buy Xbox games At GamesCart.com</title>
	  <link rel="stylesheet" type="text/css" href="header.css">
	  <link rel="stylesheet" type="text/css" href="sider.css">
	  <link rel="stylesheet" type="text/css" href="footer.css">
	  <style>
	      .error{
		    color:#FF0000;
		  }
          #login1{
		        border-style:solid;
                border-width:2px;
                 border-color:#CC0000;
		         background-color:#000000;
                 margin-top:10px;
                 height:30px;				
                 margin-left:14.5%;
                 margin-right:14.5%;	
                 border-radius:5px;	
                 box-shadow: 5px 5px 5px #888888;				 
		  }
		  .logincolor{
		        font-size:20px;
				padding-top:5px;
				padding-bottom:5px;
		        color:#FFCC00;
		  }
		   #login2{
		        border-style:solid;
                border-width:2px;
                 border-color:#CC0000;
		         	
                 margin-top:10px;
        	     height:auto;
                 margin-left:14.5%;
                 margin-right:14.5%;	
                 border-radius:5px;
                 box-shadow: 5px 5px 5px #888888;				 
		  }
		 .form1{
		    color: #1f5065;
			padding-top:20px;
			padding-bottom:20px;
			padding-left:15px;
		   
		 }
		 .inform{
		    padding:10px;
		 }
	  </style>
   </head>
    <body background="#FFFFFF">
	<?php
	$msg3="";
	  $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "gamescart";

       // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
          } 
	  $loginerr = $pswderr = "";
	  $name = $pswd = "";
	  if($_SERVER["REQUEST_METHOD"]=="POST"){
		  if(empty($_POST["login1"])){
			  $loginerr="User id is required";
		  }
		  else{
			  $name=test_input($_POST["login1"]);
		  }
		  if(empty($_POST["pswd1"])){
			  $pswderr="password is required";
		  }
		  else{
			  $pswd=test_input($_POST["pswd1"]);
		  }
		  
	  }
	  function test_input($data){
		  $data=trim($data);
		  $data=stripslashes($data);
		  $data=htmlspecialchars($data);
		  return $data;
	  }
	   if ( isset( $_POST['login'] ) ){ 
	  session_start();
	  
	  $log="SELECT user_id,password FROM user where user_id='".$name."' AND password='".$pswd."' ";
	   $result1 = $conn->query($log);
	   if($result1->num_rows == 1){
		   $_SESSION['login_user']=$name;		   // Initializing Session
           header("location: index.php");
	   }
	   else{
		  if($result1->num_rows == 0) {
          $msg3="user id or password incorrect";
		  }
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
						   <li><a href="#">forgot password?</a></li>
						</ul>
				 
				 </li>
				 
			</ul>
	
		</div>
		<div id="login">
		<form>
		   <input type="button" value="My Cart" class="signin" >
		</form>
		</div>
	  
	  <div id="wrap">
			    <ul class="navbar">
				   
				    <li><a href="ps4.html">PS4</a>
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
	       <div id="sideimg1">
		  <a href="Game.php?game_id=<?php echo "21";?>"><img src="side6.png" width="100%" ></a>
		</div>
	<div id="sideimg2">
		   <a href="Game.php?game_id=<?php echo "13";?>"><img src="side5.png" width="100%" ></a>
		</div>
	      <div id="login1">
		       <div class="logincolor" align="center">
			      Login
			   </div>
		  </div>
		  <div id="login2">
		  <br>
		    <p><span class="error">* Required Field.</span><?php echo $msg3; ?></span></p>
		       <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " >
			       Login: <input type="text" name="login1">
				   <span class="error">* <?php echo "$loginerr" ?></span>
				   <br>
				   
				   
				   <br>
				   Password: <input type="password" name="pswd1">
				   <span class="error">* <?php echo "$pswderr" ?></span>
				   <br>
				   <br>
				   <input type="submit" value="login" name="login" class="button">
				   <a href="#">forgot password?</a>
			   </form>
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
			 <div>
			 <div class="last">
	    <p align="center">copyright &copy GamesCart Retail Pvt. Ltd. All rights reserved</p>
	 </div>
	 </div>
	    </body>
</html>
			  