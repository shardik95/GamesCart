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
	<div id="abt"><h1 id="head">FAQ's</h1></div>
	<br>
	<hr>
	<p id="content"><b>1. How do I register with GamesCart?</b><br><br>
 
To register with GamesCart you need to click on sign up.<br>
Fill up the create account form and you will receive an e-mail verification message on the registered e-mail id.<br>
Once you verify the e-mail id the account gets activated.<br>
You need not to be a registered user to buy a product.<br>
Having an account helps you to speed up the ordering process and keep a track of the orders, shipments, refunds etc.<br>

<br>
<b>2. What to do if you are not able to log in or forget password? </b><br>
 <br>
Click on Sign In button<br>
Put your registered email id and click Forgot Password link<br>
A link will be emailed to you which you need to select<br>
Put your new password and you will be able to log in<br>
 <br>
 
<b>3. How should I buy product? </b><br>
 <br>
Placing an order or buying any product on the site very simple. Select the product you want to buy. Click on Buy Now or Pre-Order Now button on the product page, sign in with your existing account or create a new account by filling the required boxes. Next enter your Shipping Address with correct contact details. Check the Order Summary and proceed to Payment.
 <br>
 <br>
<b>4. What are the available payment modes?</b>
 <br><br>
There are lots of options for making payments now a days. You can be assured with the trusted payment gateway partners as they use secure encryption technology to keep your transaction details confidential at all times.
 <br>
The payment modes available on GamesCart are:
 <br>
Credit/Debit Cards - Visa, MasterCard, Maestro
Net Banking
Cash On Delivery
E-wallet 
 <br>
 <br>
<b>5. What is an e-wallet?</b>
 <br><br>
E-wallet is a new payment option that you can use to place a prepaid order on GamesCart.com. You can pay using all credit/debit cards and also net banking.
 <br><br>
<b>6. How can I place a COD order?</b>
 <br><br>
COD orders are placed when a customer wants to make the payment only once after receiving the products physically.
 <br>
There are certain terms that one needs to keep in mind while placing a COD order:
 <br>
When you place a COD order on GamesCart, you will be receiving a call from our customer care agent also a mail containing the order confirmation will be sent to you. In case you don’t pick up the call or your contact no. is not reachable you can call and confirm the order yourself
 <br>
Additional shipping charge Rs.79 could be applicable if the standard order value is less than Rs.1000, based on products’ availability or forthcoming status which you have ordered.
 <br>
There is a purchase limit for placing an order when choosing your mode of payment as COD which depends on your pin code.
 <br>
The fulfilment of COD orders are not available on certain pin codes, so to check the same you need to click the link stating COD service availability on the product page and in the search bar enter the pin code which lets you know whether COD service is available on your location or not.
 <br>
If the COD option is not available at your location, one can always place order using credit/debit card.
 <br>
In some cases the COD facility is not available at a particular pin code because our shipping partners do not service on those particular locations.
 <br>
The COD amount should be handed over to the delivery agent before opening the order package.
 <br>
 <br>
<b>7. Why is the COD option not available at my location?</b>
 <br><br>
Availability of COD service depends on the ability of our courier partner servicing your location to accept cash as payment at the time of delivery.
 <br>
Our courier partners have limits on the cash amount payable on delivery depending on the destination and your order value might have exceeded this limit. Please enter your pin code on the product page to check if COD is available in your location.
 <br>
 <br>
<b>8. What is Pre-Ordering and how it works?</b>
 <br><br>
Pre-order is one way to get your hands on first of your favourite game as soon as it is released in India.
 <br>
When you pre-order any product, you authorize us to charge your account and ship and deliver the product once the same is released.
 <br>
From time to time we run promotional discounts and also offer freebies till the supplies last.
 <br>
Price guarantee is offered by GamesCart only on certain products. This means that if the price of some product has been hiked after the release you have to pay the same price on which you pre-ordered the product. But in case of reduction of the price, you will be paying less.
 <br>
The shipment of the ordered product or game starts on or after it is released in India. We strive towards delivering the order as soon as the product is released.
 <br>
Sometimes the publisher might limit the product availability, in that case the orders are dispatched on first come first serve basis.
 <br>
In case there is a delay in the release we try working it out with the manufacturer and also keep our customers informed about the same.
 <br>
 <br>
<b>9. What can I do to ensure the pre-orders are shipped to me early?</b>
 <br><br>
Instead of COD, choose Prepaid option of Debit / Credit or Net Banking, If you choose to make a prepaid pre-order, the chances of shipping the game to you one day prior its release will be high, subject to its availability. Hence it will be delivered more faster.
 <br><br>
 
<b>10. When will the product get delivered? </b>
 <br><br>
For metro cities, shipments are reached generally next day itself from the day it gets shipped. For cities it may take 2-4 days more. You will receive an email notification to your registered email id as soon as your product gets shipped. Kindly check your spam box as well for such notifications.
 <br>
Shipment for Pre-Order products generally starts on the day of release or a day before if it is a prepaid order.
 <br>
 <br>
<b>11. What are the refund policies? </b>
 <br><br>
Company provides refund only in case of faulty and damaged condition, after investigation. For PC games, kindly be aware of the high systems requirements before making of its purchase as there are no refunds or returns possible for PC games. For any prepaid order placed on the website, there will be a cancellation charge of 3% of the order Amount. The amount you paid for the product plus any shipping paid at the time of order after deducting 3% of the order amount will be directly refunded back to your bank account/credit card/debit card within 10-15 working days (does not include Saturdays, Sundays and Bank Holidays).
 <br>
All rights reserved with GamesCart Pvt. Ltd. To be updated, kindly read the Terms and Conditions from time to time. 
 <br>
 <br>
<b>12. I have paid my order using mobikwik wallet, how will I get the refund?</b>
 <br><br>
In case of refund the full amount is refunded to your mobikwik wallet after deducting 3% cancellation charges and also cashbacks if any given at the time of placing the order
 <br>
 <br>
<b>13. I tried placing an order through credit card/debit card, but the order was not successful. What will happen to the money deducted from the bank account?</b>
 <br><br>
First of all please check your bank/credit card account to ensure that the amount has been debited. If the same has happened after the payment failure, the bank normally rolls backs the amount in 7 business days. The time taken varies from bank to bank, and unfortunately we won’t be able to help you.
<br>
If the bank asks you to contact us, and if the money has been received by us we will initiate a refund for the same within 3 days of your request. Or if you are still interested in placing an order we can process the same for you if the money has been received by us.
 <br>
 <br>
<b>14. I placed an order on the website, but did not avail the discount coupon.</b>
 <br><br>
The Coupons listed on our website need to be availed in order to gain the discount available under a particular offer.
 <br>
a. To avail a coupon discount you need to put in the code in the apply coupon box on the order summary page.<br>
b. Click on apply, following which the system would check if your coupon code is valid or not.<br>
c. If the coupon is valid then, the system would automatically generate the discount.<br>
 
In case the mentioned proceure is not followed, discount cannot be retrospectively applied to an order.
 <br>
 <br>
<b>15. What are the Contact details for any queries? </b>
 <br><br>
Click on Contact Us link at the bottom of the page and fill the details with your query, or Contact Help Desk at number +91-22-4231 2147  from 10am to 6pm from Monday to Friday except public holidays, or<br>Write to us helpdesk@GamesCart.com<br>
 
You will be answered maximum within 48 working hours. 
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