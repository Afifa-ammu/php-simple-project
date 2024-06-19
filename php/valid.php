<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery form</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
<form id="myForm" autocomplete="off">
  <h1>LOGIN FORM</h1>
  <br>
  <div class="group">
  <label>USERNAME</label>
  <input type="text" name="username">
  <br>
</div>
<div class="group">
<label>PASSWORD</label>
  <input type="password" name="password">
  <br>
</div>
<div class="group">
<label>EMAIL</label>
  <input type="text" name="email">
  <br><br>
</div>
  <button type="submit" value="Submit">Submit</button>
</form>
</div>

<script>
  $(document).ready(function() {
  $('#myForm').validate({
    rules: {
      username: 'required',
      password:{
        required:true,
        minlength:5,
        maxlength:5
        
      },
      email:{
        required:true,
        minlength:10
      
      },
      
      },
    messages:{
      password:{
            minlength:"Please enter 5 password",
            maxlength:"Atleat 5 password only"
      },
      email:{
          minlength:"Please enter valid mail",
          
      },
    },
    submitHandler: function(form) {
      $.ajax({
        url: 'fills.php', // Replace with your server-side script
        type: 'POST',
        data: $(form).serialize(),
        success: function(response) {
          
          console.log(response);
          $("#myForm")[0].reset();  // reset the form
          
      },
       
      });
    }
  });
});





</script>
</body>
</html>