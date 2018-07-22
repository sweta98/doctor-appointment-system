
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>  
    </head>
    <body style="background:url('images/health-2082630_1280.jpg') no-repeat ; background-size:cover;">
    <div class="container" style="width:400px; margin-top:100px ; border: 1px solid black" >
        <div class="card">
              <img class="card-img-top" src="images/medical-563427_1280.jpg" alt="Card image cap">
              <div class="col-md-8">
        
                <form class="form-group" method="post" action="func.php">
                <label>First Name</label>
                    <input type="text" name="fname" class="form-control"><br>
                   <label>Last Name</label>
                    <input type="text" name="lname" class="form-control"><br>
                    <label>Email ID</label>
                    <input type="email" name="email" class="form-control"><br>
                    <label>Contact</label>
                    <input type="number" name="contact" class="form-control"><br>
                    <label>Doctors Appointment</label>
                    <select class="form-control" name="docapp">
                    <option value="doc1">Dr Sharma From 4pm to 6pm</option>
                        <option value="doc2">Dr Ansari From 10am to 12pm</option>
                        <option value="doc3">Dr Verma From 2pm to 4pm</option>
                        <option value="doc4">Dr Sarangi From 6pm to 8:30pm</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Book Appointment" name="pat_submit">
                </form>
                  </div>
            </div>
        </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    </body>
</html>