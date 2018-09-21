<?php  
 
 $username=$_POST['username'];
 $password=$_POST['password'];

 $con=mysqli_connect("localhost","root","","login");
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $result=mysqli_query($con,"select * from users where username='$username' and password='$password' ");
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if ($row["username"] == $username && $row["password"] == $password) {	
	 $re=mysqli_query($con,"select * from users order by points desc");
	  	 	echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script>
function myfunction()
{

}
  </script><style>
  	.bg-1{
  		font-size:30px;
  		color:red;padding: 30px 24px; font-weight: bold;
  		border-radius:10px;font-family: verdana;border-style:none;border-width: 10px 0px 10px 0px;
  		border-color: black; background-color: lightgrey;
  	}
  </style><nav class="navbar navbar-default" style="background-color: black; ">
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
      	<li><a href="login page.php" style="color: white;">LOGOUT</a></li>
<li><a href="#" style="color: white;">PROFILE</a></li><li><a href="#" style="color: white;">TASKS</a></li>
	</ul>
</div>
</div>
</nav>
</div>
<div>
 <div class="container-fluid text-center bg-1">
 	 	<div style="color:black;"><span class="glyphicon glyphicon-stats"></span>
 	 	</div>LEADERBOARD</div>';$count=0;
 	 while ($r=mysqli_fetch_assoc($re)) {
        $count=$count+1;
echo '<div class="container" style="margin-top: 10px;" align="center">
	<div class="list-group"  style="margin-left: 100px; margin-right: 100px; box-shadow: 1px 1px;width:600px;">
		<a href="#profile" class="list-group-item active">
		<a href="#profile" class="list-group-item" style="color:black; font-family:verdana;	">'.$count.')'.$r['username'].'<span class="badge">'.$r['points'].'</span></a>
	</div>
</div>
<div class="container">
	<div class="text-center">
		
	</div>
</div>';
 	 }
 } else {
 	echo "Failed to log in..Please try again";
 }
?>