<!DOCTYPE html>
<html>
<head>
	<title title="Leaderboard" style="color: blue;">Leaderboard</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	.bg-1{
  		font-size:30px;
  		color:red;padding: 30px 24px; font-weight: bold;
  		border-radius:10px;font-family: verdana;border-style:none;border-width: 10px 0px 10px 0px;
  		border-color: black; background-color: lightgrey;
  	}
    .pa{
     padding-top: 2%;color: rgb(60,89,152);font-family: verdana;font-weight: bold;font-size: 30px;background-color: lightgrey;
    }
    .p1{
      color:black;font-weight: none;font-size: 17px;padding-left: 15%;font-family: sans-serif;padding-right: 10%;}
  </style>
</head>
<body>
<nav class="navbar navbar-default" style="background-color: black; ">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand" style="color: white;"> <span class="glyphicon glyphicon-home"> WEBSTACKS</span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#" data-toggle="modal" data-target="#myModal" style="color: white;">LOGIN</a>

  <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<form action="process.php" method="POST">
        			<div class="modal-body">
        				<div class="form-group">
        					<label for="usr">Username:</label>
        					<input type="text" class="form-control" name="username" >
        				</div>
        				<div class="form-group">
        					<label for="pwd">Password:</label>
        				    <input type="password" class="form-control" name="password">
        			    </div>
                  <div class="modal-footer">
              <button type="submit" class="btn btn-success">LOGIN</button>
            </div>
        			</form>
        		</div>
        		
        	</div>
        </div>
    </div>
</li>
<li><a href="#" style="color: white;">TASKS</a></li>
	</ul>
</div>
</div>
</nav>
<div class="container">
  <img src="data:image/jpeg;base64,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" style="width: 100%;height: 450px">
</div>
<div class="container text-centre pa">
  <p style="padding-left: 29%;">Welcome to WebStacks</p>
  <div class="container-fluid p1">Many exciting and challenging tasks are waiting for you !!! Login to enjoy the essence of development !!!</div>
</div>
<div class="container-footer">
  
</div>
</body>
</html>
<!--Front end is developed by K.Abhinay Team ID:22 
Backend is developed by R.Venkata Kausik Team ID:16-->