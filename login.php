<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body><br><br>

  


<div class="container" style="margin-left:32%;">
  
  <div class="row" id="pwd-container">

<div class="col-md-6">
      <section class="login-form">
<form aligned="center" method="post" action="studentlogin.php" role="login" onSubmit="return check();" >
    <h3><i>Registration Number</i></h3><input type="text" name="lid" placeholder="Bit/41092/2016..." required class="form-control input-lg">
    <h3><i>Password</i></h3> <input type="password" name="password" class="form-control input-lg" id="password" required>
    <div class="pwstrength_viewport_progress"></div><br>
    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">login</button>
</form>
</section>
</div>
</div>
</div>
    

</body>
</html>