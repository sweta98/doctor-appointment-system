<?php
$con= mysqli_connect("localhost" , "root" , "","hmnew");
if(isset($_POST['pat_submit']))
{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $docapp= $_POST['docapp'];
    $query = "INSERT INTO doctorapp(fname,lname,email,contact,docapp)values('$fname', '$lname', '$email' , '$contact' ,'$docapp')" ;
    mysqli_query($con , $query);
    echo "<script>alert('appointment booked successfully');</script>";
    echo "window.open('logout.php' , '_self')";
    
}


    