<?php
if(isset($_POST['submit']));
{
        $n=$_POST['name'];
        $c=$_POST['pass'];
        $a=$_POST['mail'];
        $y=$_POST['phone'];
        $e=$_POST['cit'];
        $w=$_POST['gen'];
        $u=$_POST['add'];
        $z=$_POST['san'];
        $o=$_POST['pla'];
       $conn=  mysqli_connect("localhost","root","","application");
       $sql="INSERT INTO RECORD(username,passwords,email,mobilenumber,city,gender,addressdet,states,place)values('$n','$c','$a','$y','$e','$w','$u','$z','$o')";
       $r = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="card">
  
  <div class="card-body my-4" >
    <h5 class="card-title">LOGIN FORM APPLICATION</h5>
    <br>
    <a href="#" class="btn btn-primary">Updated Successfull</a>
  </div>
</div>
    
</body>
</html>