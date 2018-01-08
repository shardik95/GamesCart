<?php
$servername = "localhost";
       $username = "root";
       $password = "YES";
       $dbname = "gamescart";
       
       // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
          }
		  
	session_start();	
    @$user_check=$_SESSION['login_user'];
	
	//$search_r=$_SESSION['srch_result'];
    if($user_check==""){
		$flag=0;
		//echo "ok";
	}	
	else{
		$flag=1;
	}
	
	$ses_seq="SELECT first_name FROM user where user_id='".$user_check."'";
	$result2=mysqli_query($conn,$ses_seq);
	$row =mysqli_fetch_assoc($result2);
    $login_session =$row["first_name"];
	
	$ses_seq1="SELECT * FROM user where user_id='".$user_check."'";
	$result3=mysqli_query($conn,$ses_seq1);
	$row1=mysqli_fetch_assoc($result3);
	$fn=$row1["first_name"];
	$Ln=$row1["last_name"];
	$add1=$row1["address1"];
	$add2=$row1["address2"];
	$city1=$row1["city"];
	$state1=$row1["state"];
	$code=$row1["pincode"];
	$phone1=$row1["phone"];
	
	//$no=1;
    $ses_seq2="SELECT * FROM games where game_id=1";
	$result4=mysqli_query($conn,$ses_seq2);
	$ro1=mysqli_fetch_assoc($result4);
	$img1=$ro1["image"];
	$pc1=$ro1["price"];
	
	 $ses_seq3="SELECT * FROM games where game_id=2";
	$result5=mysqli_query($conn,$ses_seq3);
	$ro2=mysqli_fetch_assoc($result5);
	$img2=$ro2["image"];
	$pc2=$ro2["price"];
	
	 $ses_seq4="SELECT * FROM games where game_id=3";
	$result6=mysqli_query($conn,$ses_seq4);
	$ro3=mysqli_fetch_assoc($result6);
	$img3=$ro3["image"];
	$pc3=$ro3["price"];
	
	 $ses_seq5="SELECT * FROM games where game_id=4";
	$result7=mysqli_query($conn,$ses_seq5);
	$ro4=mysqli_fetch_assoc($result7);
	$img4=$ro4["image"];
	$pc4=$ro4["price"];
	
    $ses_seq6="SELECT * FROM games where game_id=5";
	$result8=mysqli_query($conn,$ses_seq6);
	$ro5=mysqli_fetch_assoc($result8);
	$img5=$ro5["image"];
	$pc5=$ro5["price"];
	
	$ses_seq7="SELECT * FROM games where game_id=6";
	$result9=mysqli_query($conn,$ses_seq7);
	$ro6=mysqli_fetch_assoc($result9);
	$img6=$ro6["image"];
	$pc6=$ro6["price"];
	
	 $ses_seq8="SELECT * FROM games where game_id=7";
	$result10=mysqli_query($conn,$ses_seq8);
	$ro7=mysqli_fetch_assoc($result10);
	$img7=$ro7["image"];
	$pc7=$ro7["price"];	
	
	$ses_seq9="SELECT * FROM games where game_id=8";
	$result11=mysqli_query($conn,$ses_seq9);
	$ro8=mysqli_fetch_assoc($result11);
	$img8=$ro8["image"];
	$pc8=$ro8["price"];
 	
	$ses_seq10="SELECT * FROM games where game_id=9";
	$result12=mysqli_query($conn,$ses_seq10);
	$ro9=mysqli_fetch_assoc($result12);
	$img9=$ro9["image"];
	$pc9=$ro9["price"];
	
    $ses_seq11="SELECT * FROM games where game_id=10";
	$result13=mysqli_query($conn,$ses_seq11);
	$ro10=mysqli_fetch_assoc($result13);
	$img10=$ro10["image"];
	$pc10=$ro10["price"];
	
	$ses_seq12="SELECT * FROM games where game_id=11";
	$result14=mysqli_query($conn,$ses_seq12);
	$ro11=mysqli_fetch_assoc($result14);
	$img11=$ro11["image"];
	$pc11=$ro11["price"];
	
	$ses_seq13="SELECT * FROM games where game_id=12";
	$result15=mysqli_query($conn,$ses_seq13);
	$ro12=mysqli_fetch_assoc($result12);
	$img12=$ro12["image"];
	$pc12=$ro12["price"];
	
	$ses_seq14="SELECT * FROM games where game_id=13";
	$result16=mysqli_query($conn,$ses_seq14);
	$ro13=mysqli_fetch_assoc($result16);
	$img13=$ro13["image"];
	$pc13=$ro13["price"];
	
	$ses_seq15="SELECT * FROM games where game_id=14";
	$result17=mysqli_query($conn,$ses_seq15);
	$ro14=mysqli_fetch_assoc($result17);
	$img14=$ro14["image"];
	$pc14=$ro14["price"];
	
	$ses_seq16="SELECT * FROM games where game_id=15";
	$result18=mysqli_query($conn,$ses_seq16);
	$ro15=mysqli_fetch_assoc($result18);
	$img15=$ro15["image"];
	$pc15=$ro15["price"];
	
	$ses_seq17="SELECT * FROM games where game_id=16";
	$result19=mysqli_query($conn,$ses_seq17);
	$ro16=mysqli_fetch_assoc($result19);
	$img16=$ro16["image"];
	$pc16=$ro16["price"];
	
    $ses_seq18="SELECT * FROM games where game_id=17";
	$result20=mysqli_query($conn,$ses_seq18);
	$ro17=mysqli_fetch_assoc($result20);
	$img17=$ro17["image"];
	$pc17=$ro17["price"];
	
		 $ses_seq19="SELECT * FROM games where game_id=18";
	$result21=mysqli_query($conn,$ses_seq19);
	$ro18=mysqli_fetch_assoc($result21);
	$img18=$ro18["image"];
	$pc18=$ro18["price"];
	
		 $ses_seq20="SELECT * FROM games where game_id=19";
	$result22=mysqli_query($conn,$ses_seq20);
	$ro19=mysqli_fetch_assoc($result22);
	$img19=$ro19["image"];
	$pc19=$ro19["price"];
	
		 $ses_seq21="SELECT * FROM games where game_id=20";
	$result23=mysqli_query($conn,$ses_seq21);
	$ro20=mysqli_fetch_assoc($result23);
	$img20=$ro20["image"];
	$pc20=$ro20["price"];
	
		 $ses_seq22="SELECT * FROM games where game_id=21";
	$result24=mysqli_query($conn,$ses_seq22);
	$ro21=mysqli_fetch_assoc($result24);
	$img21=$ro21["image"];
	$pc21=$ro21["price"];
	
		 $ses_seq23="SELECT * FROM games where game_id=22";
	$result25=mysqli_query($conn,$ses_seq23);
	$ro22=mysqli_fetch_assoc($result25);
	$img22=$ro22["image"];
	$pc22=$ro22["price"];
	
		 $ses_seq24="SELECT * FROM games where game_id=23";
	$result26=mysqli_query($conn,$ses_seq24);
	$ro23=mysqli_fetch_assoc($result26);
	$img23=$ro23["image"];
	$pc23=$ro23["price"];
	
		 $ses_seq25="SELECT * FROM games where game_id=24";
	$result27=mysqli_query($conn,$ses_seq25);
	$ro24=mysqli_fetch_assoc($result27);
	$img24=$ro24["image"];
	$pc24=$ro24["price"];
	
		 $ses_seq26="SELECT * FROM games where game_id=25";
	$result28=mysqli_query($conn,$ses_seq26);
	$ro25=mysqli_fetch_assoc($result28);
	$img25=$ro25["image"];
	$pc25=$ro25["price"];
	
		 $ses_seq27="SELECT * FROM games where game_id=26";
	$result29=mysqli_query($conn,$ses_seq27);
	$ro26=mysqli_fetch_assoc($result29);
	$img26=$ro26["image"];
	$pc26=$ro26["price"];
	
		 $ses_seq28="SELECT * FROM games where game_id=27";
	$result30=mysqli_query($conn,$ses_seq28);
	$ro27=mysqli_fetch_assoc($result30);
	$img27=$ro27["image"];
	$pc27=$ro27["price"];
	
		 $ses_seq29="SELECT * FROM games where game_id=28";
	$result31=mysqli_query($conn,$ses_seq29);
	$ro28=mysqli_fetch_assoc($result31);
	$img28=$ro28["image"];
	$pc28=$ro28["price"];
	?>		  