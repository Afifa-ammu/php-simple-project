<?php
  include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into `crud`(name,email,mobile,password)values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
      //  echo "inserted";
      header('location:output.php');
    }
    else{
        echo "no";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
     <div class="container my-5">
     <form method="post">
        <br>
        <h1>CRUD APPLICATION</h1>
        <br>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name"  required autocomplete="off">
  
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email"  required autocomplete="off">
   </div>
  <div class="form-group">
    <label>Phone number</label>
    <input type="number" class="form-control" placeholder="Enter your mobile" name="mobile"  required autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" required autocomplete="off">
   </div>
   <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


     </div>


    
</body>
</html>