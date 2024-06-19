<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM VALIDATION</title>
    <link rel="stylesheet" href="main.css">
</head>
<style>
  h2{
    text-align:center;
  }
  form{
    text-align:center;
    
  }
  .error{
    color :red;
  }
  



</style>
<body>
    <?php


$nameErr = $emailErr = $passwordErr = $genderErr = "";

// simple server side validation
if (isset($_POST["submit"])) {
    if  ($_POST["name"] == "") {
      $nameErr = "</br>Name field is required";
     } if ($_POST["email"] == "") {
      $emailErr = "</br>Email Field is required";
     } if ($_POST["password"] ==""){
       $passwordErr ="</br> Password field is required";
      
    } if  ($_POST["gender"] == "") {
      $genderErr = "</br>Gender Field is required";
    }
  }
  

  



  

?>
    <h2>Form validation in php</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="col">
Name: <input type="text" name="name">
<span class="error"> <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error"> <?php echo $emailErr;?></span>
<br><br>
Password:
<input type="password" name="password">
<span class="error"> <?php echo $passwordErr;?></span>
<br><br>
</div>
Gender:
<input type="radio" name="gender" value="male" checked >Male
<input type="radio" name="gender" value="female">Female
<span class="error"> <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>