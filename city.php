<html>
<head>
<title>CREATE NEW ADMIN</title>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php
 
 if(isset($_POST['submit_btn']))
 {
   $stateid=$_POST['stateid'];
   $cityname=$_POST['cityname'];
 if(empty($stateid))
 {
	 echo "Please Enter Your State Id!";
 }
 else if(empty($cityname))
 {
    echo "Please Enter Your city Name!";
 }
else
   {
	   $con=mysqli_connect(@"localhost","root","","demo1");
	   $sql="insert into tblcity(id,stateid,cityname) values(NULL,'$stateid','$cityname')";
	   if(mysqli_query($con,$sql))
	   {
		   echo "New city Added Successfuly.";
	   }
	   else
	   {
		   echo "ERROR";
	   }
   }
 }

?>

<!--HTML & CSS form with bootstrap -->

   
   <form class="admin-form row" id="admin_form" name="admin_form" method="POST" action="">
   
   <div class="form-field col-lg-6">
         <label class="label" >Enter State Id</label>
	 <input id="stateid" name="stateid" class="form-control" type="text" >
   
   </div>
      <div class="form-field col-lg-6">
         <label class="label" >Enter City Name</label>
	 <input id="cityname" name="cityname" class="form-control" type="text" >
      </div>
      
     
      <div class="form-field col-lg-12">
         <input id="submit_btn" name="submit_btn" class="submit-btn" type="submit" value="SUBMIT">
      </div>
   </form>




</body>
</html>