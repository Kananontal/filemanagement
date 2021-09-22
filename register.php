<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Food 4Boy</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
	<div class="container">
    <br>
  <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col-6">
    
    <div class="card mt-2 border border-primary shadow-lg">
  <div class="card-body">
  <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        

    <div class="input-group mt-5"><!--start name by poom!-->
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-user" style="font-size:24px"></i></div>
        </div>

		<script>
	function checkuser()
	{
		var elem = document.getElementById('name').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			document.getElementById('name').value = "";
		}
	}
</script>

        <input type="text" class="form-control border border-dark" placeholder="name" name="name" id="name" onblur="checkuser();" autocomplete="off" required>
      </div> <!--end username by poom!-->

	  <div class="input-group mt-3"><!--start email by poom!-->
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-envelope" style="font-size:16px"></i></div>
        </div>

		<script>
	function checkmail()
	{
		var elem = document.getElementById('email').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			document.getElementById('email').value = "";
		}
	}
</script>

        <input type="email" class="form-control border border-dark" placeholder="Email" for="email" name="email" id="email" autocomplete="off" required>
      </div> <!--end email by poom!-->


      <div class="input-group mt-3"><!--start pass1 by poom!-->
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-key" style="font-size:17px"></i></div>
        </div>

		<script>
	function checkpass()
	{
		var elem = document.getElementById('password').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			
			document.getElementById('password').value = "";
		}
	}
</script>


        <input type="password" class="form-control border border-dark" placeholder="Password" name="password_1" id="password" onblur="checkpass();" autocomplete="off" required>
      </div><!--end pass1 by poom!-->



      <div class="input-group mt-3"><!--start pass2 by poom!-->
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-key" style="font-size:17px"></i></div>
        </div>

		<script>
	function checkpass()
	{
		var elem = document.getElementById('password').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			
			document.getElementById('password').value = "";
		}
	}
</script>


        <input type="password" class="form-control border border-dark" placeholder="Confirm Password" name="password_2" id="password" onblur="checkpass();" autocomplete="off" required>
      </div><!--end pass2 by poom!-->





      
        
        
      <div class="row mt-5">

    
<div class="col">
  <button type="submit" name="reg_user" class="btn btn-block btn-outline-success">Register <i class="fa fa-address-card"></i></button>
  <a href="index.html" class="btn btn-block btn-outline-danger" role="button" aria-pressed="true">Back <i class="fa fa-exclamation-circle"></i></a><br>
</div>
    </div>
    </div>
    </div>
    <div class="col-3">
      
    </div>
  </div>
</div>







</body>
</html>