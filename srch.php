
<?php
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
		  
    // echo $_SESSION['sess1'];
	@$user_check1=$_SESSION['sess1'];
	$construct ="SELECT * FROM games WHERE game_name='".$user_check1."'";
$result10 = $conn->query($construct);

if($result10->num_rows == 0){
$x= "Sorry, there are no matching result for <b>$user_check1</b>.</br></br>";
}
else
{
 if($result10->num_rows >0){	
 $x=" results found !<p>";
 }
$run=mysqli_query($conn,$construct);
$row10 =mysqli_fetch_assoc($run);
$gn=$row10["game_name"]; 
$amt =$row10["price"];
$plat=$row10["platform"];
$idd=$row10["game_id"];
$ig=$row10["image"];
}	
?>	