<html>
   <head>
      <link rel="shortcut icon" href="icon.png">
      <title>Buy Games Online In India, Buy PC games, Buy PS4 games, Buy Xbox games At GamesCart.com</title>
	  <link rel="stylesheet" type="text/css" href="header.css">
	  <link rel="stylesheet" type="text/css" href="header2.css">
	  <link rel="stylesheet" type="text/css" href="footer.css">
	  <style>

	  #content{
	     margin-top:10px;
	    margin-left:14%;
		margin-right:14%;
		font-size:100%;
		font-family: Arial, Helvetica, sans-serif;
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
	  </style>
	  </head>
   <body background="#FFFFFF" >
   <?php 
    include('session.php');
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
	 
	<div id="abt"><h1 id="head">Privacy Policy</h1></div>
	<br>
	<hr>
	<p id="content">GamesCart Pvt. Ltd. values your privacy. We attempt to use or share personal and demographic information that we collect only to serve you better. This notice describes our privacy policy. By visiting www.GamesCart.com, you are accepting the practices, terms and conditions described of this Privacy Policy. The website may contain links to other websites and we are not responsible for the privacy practices or content of such websites. Our privacy policy is subject to change at any time without notice. Hence in order to make sure you are aware of any changes, please review this policy periodically.
    <br><br>
	<b>COLLECTION OF PERSONALLY IDENTIFIABLE AND OTHER INFORMATION</b>
     <br><br>
		We receive information which you provide us through our website or give us any way. However you may also choose not to provide certain information, which may limit your ability to use various features of the website and buy the products. We collect and use personal identifiable information, demographic information, contact details to customize shopping for you, to improve website, send you information about our company and offers. Like other websites, we will automatically receive and collect certain anonymous information including computer-identification information like IP address, domain server, type of web server and web browser you are using obtained from "cookies," sent to your browser from a web server cookie stored on your hard drive. You can stop your computer from storing cookies if you want to. Most of the browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. We may also collect information related to pages you visit, access, time spent, shopping details and the links you click. You may terminate your account at any time. However, your information may remain stored in archive on our servers even after the deletion or the termination of your account. We do not retain any financial information like bank account or any card details on our website at any time on www.GamesCart.com. We do not sell products for purchase by children. We sell children's products for purchase by adults. If you are under 18, you may use the website only with the involvement of a parent or guardian. We are not responsible if you making any purchase without the supervision or consent of an adult.
    <br><br>
	<b>USE OF INFORMATION COLLECTED</b>
    <br><br>
	We use the personally identifiable information collected to provide you with personalized features, to get in touch with you when necessary and preserve required history. We use contact information internally to direct our effort for product and website improvement, conduct survey and contests, notify you if you win and to send you promotional materials. Generally we use the traffic information to help us identifying you in order to deliver to you a better and more personalized service from both an advertising and an editorial perspective; recognize your access privileges, track your entries in some of our contests, sweepstakes and promotions, make sure that you don't see the same ad repeatedly, help diagnose problems with our server, administer our websites, track your session so that we can understand better how people use our sites.
    <br><br>
	<b>SHARING OF INFORMATION COLLECTED</b>
    <br><br>
	The required financial information to complete the transaction will be provided you and the same will not be used by us for any other purpose.We do not rent, sell or share your personal information and we will not disclose any of your personally identifiable information to third parties unless we have your permission, to provide products or services you've requested, to help investigate, prevent or take action regarding unlawful and illegal activities, suspected fraud, potential threat to the safety or security of any person, violations of GamesCart Pvt. Ltd. terms of use or to defend against legal claims, special circumstances such as compliance with subpoenas, court orders, requests/order, notices from legal authorities or law enforcement agencies requiring such disclosure. We share your information with advertisers or third party only on an aggregate basis or with whom we have agreement for a specific purpose and to serve you better.
    <br><br>
	<b>CHOICES AVAILABLE TO YOU REGARDING COLLECTION, USE AND DISTRIBUTION OF YOUR INFORMATION</b>
    <br><br>
	On your request, we will remove or block your personally identifiable information from our database, thereby cancelling your registration. However, your information may remain stored in archive on our servers even after the deletion or the termination of your account. You may change your interests at any time. You may opt-in or opt-out of any marketing / promotional / newsletters mailings. We reserves the right to send you certain service related communication, considered to be a part of your account with us with offering you the facility to opt-out. You may update your information and change your account settings at any time. If we plan to use your personally identifiable information for any specific purpose, we will notify you at the time the purpose for which we collect that information and allow you to opt-out of having your information used for those purposes.
    <br><br>
	<b>SECURITY PROCEDURES TO PROTECT INFORMATION FROM LOSS, MISUSE OR ALTERATION</b>
	<br><br>
	We have in place appropriate physical, electronic and managerial procedures primarily to protect against the loss, misuse and alteration of the information under our control. For example, our servers are accessible only to authorized personnel and that your information is shared with respective personnel on need to know basis to complete the transaction and to provide the services requested by you. We would also like to inform you that though we endeavour to safeguard the confidentiality of your personally identifiable information, transmissions made by means of the Internet cannot be made absolutely secure. By using this site, you agree that we will have no liability for disclosure of your information due to errors in transmission or unauthorized acts of third party or any other reason whatsoever it may be.
     <br><br>
	<b>POLICY UPDATES</b>
	<br><br>
	Whether or not you have viewed our terms and conditions of use of our Websites, or this Privacy Policy, and whether or not you have chosen to not receive notices from us, those terms and notices will still govern your use of www.GamesCart.com. We reserve the right to change or update this policy at any time by placing a prominent notice on our site. Such changes shall be effective immediately upon posting to this site.
    <br><br>
	<b>REGISTERED ADDRESS:</b> <br>    <br> 
	GamesCart Pvt. Ltd.,<br>
	708, Autumn Grove, Lokhandwala Township,<br>
	Akurli Road, Kandivali (East),<br>
	Mumbai - 400 101.<br>
	INDIA<br>
	Tel: +91-22-4231 2139/147<br>
	Fax: +91-22- 4231 2118<br>
 
</p>
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