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
	  .message{
		   color:#FF0000;
		   font-size:40px;
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
                  margin-top:35px;				 
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
    <body background="FFFFFF">
	<?php
	   include('session.php'); 
	   $fname1=$lname1=$dob1=$ad11=$ad22=$pcode1=$city1=$state1=$gender1=$phone1="";
	   $fnameerr=$lnameerr=$doberr=$ad1err=$ad2err=$pcodeerr=$cityerr=$stateerr=$gendererr=$phoneerr="";
	   $msg="";
	   
	   if($_SERVER["REQUEST_METHOD"]=="POST"){
		   if(empty($_POST["fname"])){
			   $fnameerr="First name is required.";
		   }
		   else{
			  $fname1=test_input($_POST["fname"]); 
			  }
		if(empty($_POST["lname"])){
			   $lnameerr="Last name is required.";
		   }
		   else{
			  $lname1=test_input($_POST["lname"]); 
			  }			  
		if(empty($_POST["dob"])){
			   $doberr="Date of Birth is required.";
		   }
		   else{
			  $dob1=test_input($_POST["dob"]); 
			  }	  
		if(empty($_POST["ad1"])){
			   $ad1err="Address field is required.";
		   }
		   else{
			  $ad11=test_input($_POST["ad1"]); 
			  }	  
		if(empty($_POST["ad2"])){
			   $ad2err="Address field is required.";
		   }
		   else{
			  $ad22=test_input($_POST["ad2"]); 
			  }	  
		if(empty($_POST["city"])){
			   $cityerr="City is required.";
		   }
		   else{
			  $city1=test_input($_POST["city"]); 
			  }	  
		if(empty($_POST["state"])){
			   $stateerr="State is required.";
		   }
		   else{
			  $state1=test_input($_POST["state"]); 
			  }	  
		if(empty($_POST["pcode"])){
			   $pcodeerr="Pin-code is required.";
		   }
		   else{
			  $pcode1=test_input($_POST["pcode"]); 
			  }	  
		if(empty($_POST["gender"])){
			   $gendererr="gender is required.";
		   }
		   else{
			  $gender1=test_input($_POST["gender"]); 
			  }	  
		if(empty($_POST["phone"])){
			   $phoneerr="Phone no is required.";
		   }
		   else{
			  $phone1=test_input($_POST["phone"]); 
			  }	  
	   }
	   function test_input($data){
		   $data=trim($data);
		   $data=stripslashes($data);
		   $data=htmlspecialchars($data);
		   return $data;
	   }
	    
	   if( isset($_POST['updateprofile'])){
		   $sql2="UPDATE user SET first_name='".$fname1."',last_name='".$lname1."',dob='".$dob1."',address1='".$ad11."',address2='".$ad22."',city='".$city1."',state='".$state1."',gender='".$gender1."',pincode='".$pcode1."',phone='".$phone1."' where user_id='".$user_check."'";
		   //$sql2="UPDATE user SET first_name='Aaditya' WHERE user_id='aps@gmail.com' ";
		    if ($conn->query($sql2)) {
           $msg="Profile Updated successfully";
            }
			else {
           $msg="Profile couldnt be Updated ";
            }
			//echo "$fname1";
			//echo "$lname1";
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
                    <li><a href="xbox360.html">Xbox 360</a>
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
				<td class="tr2"><a href="order.php" class="tr1">My orders</a>&nbsp &nbsp</td>
				<td class="tr2"><a href="profile.php" class="tr1">My Profile</a>&nbsp &nbsp</td>
				
				
			 </tr>
		</table>	 
	</div>
	 
	   <div id="sideimg1">
		  <a href="Game.php?game_id=<?php echo "21";?>"><img src="side6.png" width="100%" ></a>
		</div>
	<div id="sideimg2">
		   <a href="Game.php?game_id=<?php echo "13";?>"><img src="side5.png" width="100%" ></a>
		</div>
	      <div id="login1">
		       <div class="logincolor" align="center">
			      Update Your Profile
			   </div>
		  </div>
		  <div id="login2">
		         <br>
		        <span class="error">* Required Field.</span><span><?php echo "$msg" ?></span>
		       <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			       First Name: <input type="text" name="fname" placeholder="<?php echo $fn;?>">
				   <span class="error">* <?php echo "$fnameerr" ?></span>
				   <br>
				   <br>
				   Last Name: <input type="text" name="lname" placeholder="<?php echo $Ln;?>">
				   <span class="error">* <?php echo "$lnameerr" ?></span>
				   <br>
				   <br>
				   Date of Birth: <input type="date" name="dob" placeholder="<?php echo $dob;?>">
				   <span class="error">* <?php echo "$doberr" ?></span>
				   <br>
				   <br>
				   Address line 1:<input type="text" name="ad1" placeholder="<?php echo $add1;?>">
				   <span class="error">* <?php echo "$ad1err" ?></span>
				   <br><br>
				   Address line 2:<input type="text" name="ad2" placeholder="<?php echo $add2;?>">
				   <span class="error">* <?php echo "$ad2err" ?></span>
				   <br><br>
				   City:<input type="text" name="city" placeholder="<?php echo $city1;?>">
				   <span class="error">* <?php echo "$cityerr" ?></span>
				   <br><br>
				   State:<input type="text" name="state" placeholder="<?php echo $state1;?>">
				   <span class="error">* <?php echo "$stateerr" ?></span>
				   <br><br>
				   Pin-code:<input type="text" name="pcode" placeholder="<?php echo $code;?>">
				   <span class="error">* <?php echo "$pcodeerr" ?></span>
				   <br><br>
				   Gender:<span class="error">* <?php echo "$gendererr" ?></span>
				   <br>
				   <select name="gender">
				   <option value="male">Male</option>
                   <option value="female">Female</option>				   
                   </select>
				   <br>
				   <br>
				   Phone no:<input type="text" name="phone" placeholder="<?php echo $phone1;?>">
				   <span class="error">* <?php echo "$phoneerr" ?></span>
				   <br><br>
				   <input type="submit" value="Update Profile" name="updateprofile" class="button">
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
			  