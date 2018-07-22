<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="rocket.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>


</head>
<body>

<div class="jumbotron jumbotron-fluid" style="background-color: aliceblue; border:1px solid blue ; height:250px">
  <div class="container">
      <div class="row">
      <div class="col-md-8">
      <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h1 class="display-4">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
          <p class="lead">We put the CARE in EYECARE</p>
    <?php endif ?>
      </div>
          <div class="col-md-4">
             <div align="right">
      <img src="logo.gif" alt="logo">
      </div>
    
          </div>
      </div>
      
     
   

  </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 " align:"center">
            
    <h5>Book Appointment</h5>
   
    <a href="bookapp.php" class="btn btn-primary">Book now</a>

</div>
            </div>
            <div class="col-md-6 c" style="height:800px">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height:400px">
      <img class="d-block w-100" alt="First slide" src="images/banner_5.jpg">
         <div class="carousel-caption d-none d-md-block">
 <a href="about.html">
             <h1>About Us</h1>
             </a>
  </div>
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" alt="Second slide" src="images/1.apply-for-a-Doctor-Loan-online.jpg">
         <div class="carousel-caption d-none d-md-block">
    <a href="expert.html">
             <h1>About Our Expert Doctors</h1>
             </a>
  </div>
    </div>
       <div class="carousel-item" style="height:400px">
      <img class="d-block w-100" alt="Third slide" src="images/Winter-Eye-Care-Tips-750x390.png">
         <div class="carousel-caption d-none d-md-block">
    <a href="care.html">
             <h1>Eye Care Tips</h1>
             </a>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
        </div>
    </div>
    
  	
		
</body>
</html>