<?php 
include('session.php'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
  

    <title>NWC Technical Support Main</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap-submenu.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
  
  
    <script src="js/bootstrap-submenu.js" defer></script>
  <script src="js/bootstrap-submenu.min.js" defer></script>
  <script src="js/bootstrap.js" defer></script>
  <script src="js/bootstrap.min.js" defer></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <div class="container">

     
      <div class="masthead">
        <h3 class="text-muted">National Water Company Technical Support Site</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asset Manager<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://10.80.185.158/TechSupport/hq-in-stock-model_1.php">HQ Stocks Inventory</a></li>
                <li><a href="http://10.80.185.158/TechSupport/mtcbu-in-stock-model_1.php">MTCBU Stocks Inventory</a></li>
                <li><a href="http://10.80.185.158/TechSupport/rcbu-in-stock-model_1.php">RCBU Stocks Inventory</a></li>
                <li><a href="http://10.80.185.158/TechSupport/jcbu-in-stock-model_1.php">JCBU Stocks Inventory</a></li>
                <li><a href="http://10.80.185.158/TechSupport/hq-in-stock-model_consumables.php">HQ Stocks Consumables</a></li>
                <li><a href="http://10.80.185.158/TechSupport/jcbu-in-stock-model_consumables.php">JCBU Stocks Consumables</a></li>
                <li><a href="http://10.80.185.158/TechSupport/rcbu-in-stock-model_consumables.php">RCBU Stocks Consumables</a></li>
                <li><a href="http://10.80.185.158/TechSupport/mtcbu-in-stock-model_consumables.php">MTCBU Stocks Consumables</a></li>
                           
              </ul>
            </li>
            <li><a href="#">Technical Support Notes</a></li>
          
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

        
        
      <!-- Jumbotron -->
      <div class="jumbotron">
        
      </div>

      <!--row of columns -->
      <div class="row">
        <div class="col-lg-4">
          
        </div>
        <div class="col-lg-4">
          
       </div>
        <div class="col-lg-4">
          
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; rantipas@nwc.com.sa</p>
      </footer>

    </div> <!-- /container -->

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
 
  </body>
</html>
