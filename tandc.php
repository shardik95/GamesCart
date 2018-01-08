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
	<div id="abt"><h1 id="head">Terms and Conditions</h1></div>
	<br>
	<hr>
	<p id="content">Domain name www.GamesCart.com (hereinafter referred to as “Website”) is owned by GamesCart Pvt. Ltd. a company incorporated under the Companies Act, 1956 with its registered office at 708, Autumn Grove, Lokhandwala Township, Akurli Road, Kandivali (East), Mumbai - 400 101. Maharashtra (hereinafter referred to as “GamesCart”).
 
Your use of the Website and its services and tools are governed by the following terms and conditions as applicable to the Website including the applicable policies which are incorporated herein by way of reference. If you transact on the Website, you shall be subject to the policies that are applicable to the Website for such transaction. By mere use of the Website, you shall be contracting with GamesCart and these terms and conditions including the policies constitute your binding obligations, with GamesCart.
 
Here wherever the context so requires "You" or “User” shall mean any natural or legal person who has agreed or uses the website to any purchase or using any feature of the website. GamesCart may allow the User to surf the Website or making purchases with or without registering on the Website. The term “We”, “Us”, “Our” shall mean GamesCart.
 
These terms and conditions supersede all previous representations, understandings, or agreements and shall prevail notwithstanding any variance with any other terms of any order placed or service provided by GamesCart. By using the shopping services of GamesCart you agree to be bound by these terms and conditions.
<br><br>
<b>APPLICABLE LAW</b>
 <br><br>
This site www.GamesCart.com is owned and operated by GamesCart Pvt. Ltd. The laws of India shall apply and Courts in Mumbai in exclusion of any other courts shall have jurisdiction in respect of all the terms, conditions and disclaimers. GamesCart reserves the right to make changes, amendment, addition or deletion to the website and the terms, conditions and disclaimers at any time and without notice to you. For all matters related to or arising out of this policy, the Courts of Mumbai shall have exclusive jurisdiction.
 <br><br>
<b>COMMUNICATIONS</b>
 <br><br>
When you use the Website or send emails or other data, information or communication to us, you agree and understand that you are communicating with Us through electronic records and you consent to receive communications via electronic records from Us periodically and as and when required. We may communicate with you by email or by such other mode of communication, electronic or otherwise. We are not responsible for typographical errors. Pricing on any product(s) as is reflected on the Website may due to some technical issue, typographical error or product information published may be incorrectly reflected and in such an event we may cancel such your order(s).
 <br><br>
<b>DISCLAIMER OF WARRANTIES AND LIABILITY</b>
 <br><br>
On this Website, all the materials and products (including but not limited to software) and services, included on or otherwise made available to you through this site are provided on “as is” and “as available” basis without any representation or warranties, express or implied except otherwise specified in writing.
 <br>
Without prejudice to the forgoing paragraph, GamesCart does not warrant that:
 <br>
• This Website will be constantly available or available at all;
• The information on this Website is complete, true, accurate or non-misleading;
 <br>
GamesCart does not endorse in anyway any advertisers/ contents of advertisers on its web pages or other communication. GamesCart will not be liable for any damages of any kind arising from the use of the sites, including but not limited to direct, indirect, incidental, punitive, or consequential damages. Any material downloaded or otherwise obtained through the use of the sites is done at your own discretion and risk, and you are solely responsible for any damage to your computer system, breach of security, or loss of data that results from the download of any such material. No advice or information, whether oral or written, obtained by you from or through GamesCart will create any warranty not expressly stated herein.
 <br>
GamesCart shall not be liable for any delay / non-delivery of purchased goods, due to flood, fire, wars, acts of God or any cause that is beyond the control of GamesCart. All the prices, unless indicated otherwise are in Indian Rupees. The availability of products is subject to change without prior notice at the sole discretion of GamesCart and orders can be cancelled if the product goes out of stock.
 <br>
GamesCart will not be liable to in any way or in relation to the Contents of, or use of, or otherwise in connection with, the Website. GamesCart does not warrant that this site; information, Content, materials, product (including software) or services included on or otherwise made available to You through the Website; their servers; or electronic communication sent from Us are free of viruses or other harmful components.
 <br>
Nothing on Website constitutes, or is meant to constitute, advice of any kind. All the Products sold on Website are governed by applicable laws of India and in case we unable to deliver such Products due to implications of different state laws, we will return or will give credit for the amount (if any) received from the sale of such Product that could not be delivered to you. Rights reserved with GamesCart Pvt. Ltd. and it may take longer duration to settle after investigating such cases.
 <br>
You will be required to enter valid contact details while placing an order on the Website. By registering your contact details with us, you consent to be contacted by us via phone calls and/or SMS notifications, in case of any order or shipment or delivery related updates. We may update you with more related information or offers only through the contact details provided by you.
 <br><br>
<b>CHARGES</b>
 <br><br>
Browsing, activities of buying and membership on the Website are free for buyers. GamesCart reserves the right to change its Fee Policy from time to time. In particular, GamesCart may at its sole discretion introduce new services and modify some or all of the existing services offered on the Website. In such an event GamesCart reserves the right to introduce fees for the new services offered or amend/introduce fees for existing services, as the case may be. Changes to the Fee Policy shall be posted on the Website and such changes shall automatically become effective immediately after they are posted on the Website. Unless otherwise stated, all fees shall be quoted in Indian Rupees. You shall be solely responsible for compliance of all applicable laws including those in India for making payments to GamesCart.
 <br><br>
<b>PAYMENT AND SECURITY</b>
 <br><br>
There are lot of options for making payments now a days like credit cards, debit cards, cash on delivery. You can be assured with the trusted payment gateway partners as they use secure encryption technology to keep your transaction details confidential at all times. However, the following points are needed to be kept in mind while using these options:
 <br>
You can use Visa, Master Card, Maestro Card, Diner Club Card for making payments<br>
Debit cards, Credit Cards are accepted<br>
While using your credit/debit card you can increase the protection of your cards by entering the CVV and 3-D secure password when making the payments<br>
Do not share the CVV / 3-D secure password / OTP to anyone<br>
 <br>
<b>USER CONTENT</b>
 <br><br>
GamesCart may allow users to the Sites to post reviews and comments ("Content") on products featured on the Sites. By submitting such Content, you automatically agree and promise that all Content is accurate and original and that, without any particular time limit, and without the payment of any fees. Additionally, you grant GamesCart the right to use the name you submit in connection with such Content. We do not warrant that Product description or other content of this Website is accurate, complete, reliable, current, or error-free and assumes no liability in this regard.
 <br>
We do not endorse any user content. Users to the Sites are prohibited from posting through the Sites any harmful, vulgar, obscene, profane, sexually explicit, abusive, threatening, privacy invading, libellous, racially, ethnically, or otherwise objectionable or unlawful content of any kind, or that infringes or may infringe on the intellectual or other rights of another. You acknowledge that GamesCart does not endorse or pre-screen content, but that GamesCart and its designees will have the right (but not the obligation) in their sole discretion to refuse, edit, move, or remove any content that is available via the Sites. You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of any Content posted by you.
 <br>
Items sold are generally intended for normal domestic and consumer use and not for resale or commercial use. You agree that the products are provided to you by way of a license only and that any other use of the products may constitute a copyright infringement. GamesCart reserves the right to modify the usage rules for future purchases on the website at any time. However, such changes will not apply to products that you have already purchased. In the event you refuse to accept the new usage rules, you will no longer be able to acquire products from the website.
 <br><br>
<b>CANCELLATION AND RETURN POLICY</b>
 <br><br>
Once ordered, request for cancellations or replacement of orders duly placed on the website shall not be entertained. Orders once placed can be cancelled by emaling us only before it is dispatched or within 2 days whichever is earlier. There could be cancellation charges as well on case-to-case basis. GamesCart may refund or replace only in case of faulty and damaged software and hardware subject to the packaging and casing being returned in good condition. Faulty or damaged software, cases as well as hardware must be returned within 14 days from the date of dispatch but with a prior intimation of such via email to helpdesk@gamestheshop.com. In case of hardware every component part (cables, memory sticks, warranty card etc.) must be available, for it to be accepted as a return. In case you receive incorrect product for which you haven’t ordered, it has to be return in its original packing to us. After investigating such cases, correct product will be dispatched. Rights reserved with Game Shop Retail Pvt. Ltd. and it may take longer duration to settle.
 <br>
Majorly, the refund will be processed for the cancelled order only through the same mode of payment i.e. payment to same account which you used during the transaction. For Credit card/Debit card mode of payment, refund processing time as per bank’s standard time frame which is approximately 8-10 business days. For COD/cheque/DD mode of payment, refund processing time is 15-20 working days. Cheque will be made as per Billing Name provided. For non delivered items, refund will be processed only on confirmation that the product was not delivered to you and you choose to take a refund and are not interested in any other product.
 <br>
The refund amount could reflect some basic charges on a case-to-case basis.
 <br><br>
<b>PRE ORDERS</b>
 <br><br>
Pre Order is one of the services we are offering to our customers. By pre-ordering it is taken that you intend to pre-pay up front and wait to receive your product as that is what a pre-order implies. Once the Pre-order booking is placed it will not be revoked or cancelled under any circumstance.
 <br>
Generally pre-ordered product is shipped on or after the day of its release. We try utmost to ship the pre-order products as soon as it is available with us. However the company is not liable for any sort of delay in the delivery or shipment of them as it depends on the availability and its supply by its supplier(s). Pre-order applies only to not-yet-released products. It does not apply to other product lines or to items that have already been released in India. Invoice for pre-ordered products will be generated only when the product is shipped.
 <br>
Pre-order applies only to items displaying the Pre-order offer message on the product listing or product description page on the website.
 <br>
To read rest of the policies of the site kindly check Terms and Conditions page.
 <br><br>
<b>TRADEMARK AND LICENSE</b>
 <br><br>
All images, characters and logos are properties of their respective owners. Material on Website is solely for your personal, non-commercial use. You must not copy, reproduce, republish, upload, post, transmit or distribute such material in any way, including by email or other electronic means and whether directly or indirectly and you must not assist any other person to do so. Without the prior written consent of the owner, modification of the materials, use of the materials on any other website or networked computer environment or use of the materials for any purpose other than personal, non-commercial use is a violation of the copyrights, trademarks and other proprietary rights, and is prohibited. Any use for which you receive any remuneration, whether in money or otherwise, is a commercial use for the purposes of this clause.
 <br><br>
<b>YOUR ACCOUNT DETAILS</b>
 <br><br>
If you register on the website, you are solely responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. GamesCart does sell products for children as well as to adults who are allowed to purchase with a credit / debit card or other permitted payment method and are above 18 years of age. If you are under 18, you may use the website only with involvement of a parent or guardian. GamesCart reserves the right to refuse service, terminate accounts, remove or edit content, or cancel orders in its sole discretion. GamesCart reserves the right to change, suspend, or discontinue all or any aspects of the website at any time without prior notice. GamesCart does not knowingly collect information from children. If you are a child, do not submit any information to GamesCart unless under your parent or guardian’s supervision.
 <br><br>
<b>SHIPPING POLICY</b>
 <br><br>
We try hard and make the best of our efforts to deliver your ordered products in excellent condition and in the fastest possible time. All the shipments usually get delivered within 2-3 business days from its shipment date, but may get longer than usual if it is non-metro city.
 <br>
We also keep you notified for the same either by email or SMS notifications. Hence keep checking your email or GamesCart account from time to time.
 <br>
Additional shipping charge Rs.79 could be applicable if the standard order value is less than Rs.1000, based on products’ availability or forthcoming status which you have ordered.
 <br><br>
<b>CONTEST POLICY</b>
 <br><br>
All the contests are for a limited period as specified. Declaring results and winners of the contest will be as per the terms and conditions on a random basis. Winners will be notified either by email or a call to their registered contact details during the contest. Prize(s) would either be shipped to their address within India or may be asked to collect it from the nearest store. Please note that the prize(s) cannot be replaced or returned. This condition applies to all the contests.
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