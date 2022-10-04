<?php include '../frameworks/bootstrap.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parent signup</title>
</head>
<body class='text-center'>
  <h1>sign up</h1>
<form method="POST" onsubmit='return validate()' name='myform' action="../actions/checksignindetails.php" >

  <div>
 <input type="hidden" name="firstname" class="someInputs" value='bypass' >
  <span class="msgFn errorField"></span>
</div>
 

  <div><input type="hidden" class="someInputs"  id="mNumber" name="mNumber"  value='0987654321'>
  <span class="msgmN errorField"></span></div>

  <div><p>Email:</p><input type="text" class="someInputs" id="email" name="email">
  <span class="msgem errorField"></span></div> 

  <div><p>Password:</p><input type="text" class="someInputs" id="password" name="password">
  <span class="msgpss errorField"></span></div>

  
 


<input type="submit" id="submit" name='submit' value="login" >
<p class='mt-5'>dont have any account</p>
<button ><a href='parentRegistration.php'>register</a></button> 

</div>
<input type="hidden" name="parent" class="someInputs" value='bypass' >
</form>
</body>

<script src='../validation/validate.js' defer></script>



    
</body>
</html>