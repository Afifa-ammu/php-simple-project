

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <form action="add.php"  method="post">
      <div class="container">
         <h2>Sign up</h2>
         <br>
         <label for="name">Username</label>
         <input type="text" name="names"  placeholder="enter you name" required="">
         
         <br><br>
         <label for="password">Password</label>
         <input type="password" name="passs" placeholder="enter you password" required="">
         <br><br>
         <label>Confirm password</label>
         <input type="password" name="confirms" placeholder=" your confirm password" required="">
         <br><br>
         <input type="checkbox">click me
         <br><br>
         <h4>Forget password?</h4>
         <br>
         <input type="submit" name="submit" value="Create account">
</div>
    
</body>
</html>
   