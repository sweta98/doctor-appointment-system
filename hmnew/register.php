<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>  
    <title>Registration system PHP and MySQL</title>
</head>
<body style="background:url('images/1.jpg') no-repeat ; background-size:cover;">
  <div class="container" style="width:400px; margin-top:100px" >
        <div class="card">
              <img class="card-img-top" src="images/medical-563427_1280.jpg" alt="Card image cap">

            <div class="card-body">
	
  <form method="post" action="register.php">
      <table>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
        <tr>
            <td>
  	  <label>Username</label>
            </td>
            <td>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
            </td>
        </tr>
  	</div>
  	<div class="input-group">
        <tr>
            <td>
  	  <label>Email</label>
            </td>
                <td>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
            </td> 
        </tr>
  	</div>
  	<div class="input-group">
        <tr>
            <td>
  	  <label>Password</label>
            </td>
            <td>
  	  <input type="password" name="password_1">
            </td>
        </tr>
  	</div>
  	<div class="input-group">
        <tr>
            <td>
  	  <label>Confirm password</label>
            </td>
            <td>
  	  <input type="password" name="password_2">
            </td>
        </tr>
  	</div>
  	<div class="input-group">
        <tr>
            <td>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
            </td>
        </tr>
  	</div>
          <tr>
            <td>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
              </td>
          </tr>
      </table>
  </form>
            </div>
            
      </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
