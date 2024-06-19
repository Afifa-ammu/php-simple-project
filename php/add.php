<?php



$name=$_POST['names'];
$pass=$_POST['passs'];
$confirm=$_POST['confirms'];



$conn=mysqli_connect('localhost','root','','crud');
$sql="INSERT INTO USERS(username,passwords,confirmpassword)VALUES('$name','$pass','$confirm')";
$result=mysqli_query($conn,$sql);

if($result){
  echo "<br><br>";
  echo "<h1>Your data successfully inserted</h1>";

}
else{
  echo "error";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Sign up form</h5>
    <br>
    <a href="#" class="btn btn-primary">data inserted</a>
  </div>
</div>
</body>
</html>
