<?php
include("config/db.php");
?>
<html>
<head>
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
          <li><a href="about.php">&nbsp About &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
     <li><a href="contacts.php "> &nbsp Contact us &nbsp;&nbsp; &nbsp;&nbsp;</a></li>
    
    </ul>
	</div>
	</nav>
	</div> 
	<div class="row">
	 <div class="col-md-8">
	 <img src="img/three.jpg" class="img img-thumbnail" style="height: 330px ; width :150% ; padding: 10px">
 <div class="col-md-4"> 
	 <div class="line1">
	  <div class="left">
	   <span>  Latest News  </span>
	  </div>
	  </div>
	  </div>
	<div class="post">
	<?php
	$select="select * from news order by id Desc limit 0,4";
	$select_run=mysqli_query($con,$select);
	$count=mysqli_num_rows($select_run);
	if($count>0)
	{
		while($row=mysqli_fetch_array($select_run))
		{
			$id=$row[ 'id' ]; 
		 $name=$row[ 'Name' ]; 	
		 $text=$row[ 'Text' ]; 	
		 $date=$row[ 'Date' ]; 	
		 $img=$row[ 'img' ]; 	
			
	
	?>
	<br>
	<br>
	<div class="row">
	<div class="col-md-4" style="border:0px solid">  
	<img src="img/<?php echo $img ?>" class="img img-thumbnail" >
	</div>
	<div class="col-md-8">
   <h5 style="font:weight: bold;color:black"> <?php echo $name ?> </h5>
   <h6 style="float:right;"> <?php echo $date ?> </h6>
   <br>
    <p style="text-align:justify" ><?php echo $text ?> 
	</p>
	</div>
	<a href="viewnews.php?id=<?php echo $id;?>"><button class="btn btn-info" style="float:right;">read more</button></a>
 </div>
	<?php }}

else
{
	echo "<h4><center>No Post Available</center></h4>";
}

?>
	
 </div>
  
	 </div>
	

	<?php include("side.php");
	?>
	<div class="footer">
  <p>Copyright @ 2k19</p>
</div>
</div>
</div>
</body>
</html>
