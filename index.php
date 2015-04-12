

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crop Alert </title>
<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<script src="./pages/leaflet.js"></script>
 <link rel="stylesheet" href="./pages/leaflet.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="background-color:lavender;">
<div class="container" style="background-color:lavender;">
        <div class="col-sm-8 text-center" style="background-color:lavender;">
                <h3>Crop Alert</h3>
        </div>
          <div class="btn-group  col-sm-4" style="background-color:lavender;">


                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php?page=signup_submit.php"><span class="glyphicon glyphicon-user "></span><strong> Sign Up</strong></a></li>
                    <li><a href="index.php?page=login_submit.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
                </ul>

                
       
                
          </div>
          <div class="clearfix"></div>
          <div clas="col-sm-12">
                <div class="col-sm-4" style="background-color:lavender;">
                                                           

                      <div class="list-group list­group­hover­bg">
                            <a href="index.php" class="list-group-item active">Home</a>
                            <a href="index.php?page=crops_problem.php" class="list-group-item ">General disease</a>
                            <a href="index.php?page=problem_fetch.php" class="list-group-item color">Current Problem</a>
                            <a href="#" class="list-group-item">Insecticide</a>
                      </div>
                      <ul class="list-group">
                            <li class="list-group-item list-group-item-info">Latest News</li>
                            <li class="list-group-item list-group-item-info">First News</li>
                            <li class="list-group-item list-group-item-info">Second News</li>
                            <li class="list-group-item list-group-item-info">Third News</li>
                      </ul>

                      <div class="list-group">
                            <a href="#" class="list-group-item ">First item</a>
                            <a href="#" class="list-group-item ">Second item</a>
                            <a href="#" class="list-group-item active">Third item</a>
                      </div>


                </div>
                  
              

                  <div class="col-sm-8" style="background-color:lavenderblush;">
                
                      <div class="col-sm-8" style="background-color:lavenderblush;">
                        
                          <?php 
                         if(isset($_GET['page']))
                            {
                                $page=trim($_GET['page']);
                                $page="./pages/".$page;
                                
                                    
                            }
                            else
                            {
                                $page="./pages/maps.php";
                               
                            }
      
                      
                          include($page);?>
                         
                      </div >
                   
                 
                  </div>
            </div>
<div class="clearfix"></div>
<footer class="text-center">
 
     <p class="text-center">Copyright &copy; Crop Alert Nepal, All rights reserved</p>

	
</footer>
  


</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
