<?php
include("config/db.php");
?>

<!Doctype html>
<html>
<head>
<title> Contacts </title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body class="main">
<div class="container"  style="background:white"> 
    <div class="row">
	 <div class="col-md-8">
	 <h2 class="heading">INFiNiTi<span class="active">Traveling Solutions</span> </h2>
	 
	 </div>
	 </div>
	<div class="container"  style="background:white"> 
<nav class="navbar navbar-inverse " style="background-color:#012454">
  <div class="container-fluid">
       	<ul class="nav navbar-header  ">
		 <li><a href="login.php "> &nbsp Admin &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
      <li class="active"><a href="index.php">&nbsp Home &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
     <li><a href="about.php "> &nbsp About us &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
    
    </ul>
	</div>
	</nav>
	</div> 
	<div class="row">
	 <div class="col-md-8">
	<br>
 <div class="col-md-4"> 
	 <div class="line1">
	  <div class="left">
	   <span> &nbsp Contacts US </span>
	  </div>
	  </div>
	  <br>
	  <br>
	  <form action=contacts.php method="post">
	  <label for="name"> Write Your Name </label>
	  <input id="name" type="text" name="name" required class="form-control"> <br>
	  <label for="email"> Write Your Email </label>
	  <input id="name" type="text" name="email" required class="form-control"> <br>
	  <label for="msg"> Write Your Comments </label>
	  <textarea name=msg class="form-control" id=msg></textarea> <br>
	  <button name="submit" class="btn btn-success"> Send </button>
	  </form>
	  
	  <?php
	  if(isset($_POST['submit']))
	  {
		 $name=$_POST['name'];
		  $email=$_POST['email'];
		  		  $msg=$_POST['msg'];
		 
	 $insert= "insert into contact (name,email,msg) values ('$name','$email','$msg')";
	$run_in=mysqli_query($con,$insert);
	if($run_in)
	{
		
		echo "<script>alert('Your Comments Sended Successfully')</script>";
		
	}
	else
	{
		echo "<script> alert('Your Comments Sended Successfully')</script>";
	}
	 }
	  
	  
	  
	  ?>
	  
	  
	  
	  </div>
	  <br>
	  <br>
	
<br> <br> 
</div> 
	<?php 
	include("side.php")
	?>
	
	 
	
</div>
	
	<div class="footer">
  <p>Copyright @ 2k19</p>
</div>
</div>
</div>
</body>
</html>