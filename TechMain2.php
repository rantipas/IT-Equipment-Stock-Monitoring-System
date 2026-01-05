<?php 
include('session.php'); 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>NWC Technical Support Main</title>

<link href="css/style2.css" rel="stylesheet" />

</head>
<body>
<u><a href="logout.php" id="logout">Log Out</a></u>
<?php if(isset($_SESSION['login_user'])){ 
//database connection from separate php script

include_once 'connect.php';
echo "<p><font color=blue>Welcome $login_session</font></p>";
 }
    else {
      echo "Invalid Session";
  }    
 ?>
<div>
<nav>
    
	<ul class="navbar">
		<li><a href="#">Home</a></li>
		<li><a href="#">Asset Manager</a>
			<ul>
				<li><a href="#">HQ</a>
                                        <ul>
						<li><a href="http://10.80.185.158/TechSupport/hq-in-stock-model_1.php">Stocks</a></li>
						<li><a href="http://10.80.185.158/TechSupport/hq-in-stock-model_consumables.php">Consumables</a></li>
					</ul>
                                </li>
                                <li><a href="#">JCBU</a>
                                         <ul>
						<li><a href="http://10.80.185.158/TechSupport/jcbu-in-stock-model_1.php">Stocks</a></li>
						<li><a href="http://10.80.185.158/TechSupport/jcbu-in-stock-model_consumables.php">Consumables</a></li>
					</ul>
                                </li>
                                <li><a href="#">MTCBU</a>
                                         <ul>
						<li><a href="http://10.80.185.158/TechSupport/mtcbu-in-stock-model_1.php">Stocks</a></li>
						<li><a href="http://10.80.185.158/TechSupport/mtcbu-in-stock-model_consumables.php">Consumables</a></li>
					</ul>
                                </li>
                                
                                <li><a href="#">RCBU</a>
                                 	<ul>
						<li><a href="http://10.80.185.158/TechSupport/rcbu-in-stock-model_1.php">Stocks</a></li>
						<li><a href="http://10.80.185.158/TechSupport/rcbu-in-stock-model_consumables.php">Consumables</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Technical Support Notes</a>
			<ul>
				<li><a href="#">#############</a></li>
				<li><a href="#">#########</a></li>
			</ul>
		</li>
		<li><a href="#">About</a></li>
	</ul>
</nav>
</div>
</body>
</html>

