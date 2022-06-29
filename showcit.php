<html>
<head>
<title>SHOW ALL ADMIN</title>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>


.show-admin 
{
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.table-hover
{
	background-color:skyblue;
}

.table-hover tr:hover
{
	transform: scale(1.5);
}

</style>
</head>


<body class="show-admin">

<!--PHP for validation and backend-->
<form id="form1" name="form1" method="POST" action="">
<table class="table table-hover">
<thead class="table-dark">
<tr>


<th>ID</th>
<th>State ID</th>
<th>City Name</th>


</tr>
</thead>
<tbody>

	<input type="text" class="txtsearch" id="txtsearch" name="txtsearch"></input>
	<input type="submit" class="btnsearch" id="btnsearch" name="btnsearch"></input>
<?php
  

  
	
	$con=mysqli_connect(@"localhost","root","","demo1");
	$sql="select * from tblcity";
	$result=mysqli_query($con,$sql);
	
	
						if(isset($_POST['btnsearch']))
						{
							$s=$_POST['txtsearch'];
							$sql="select * from `tblcity` where `cityname` like '%$s%'";
							mysqli_query($con,$sql);
						}
						else
						{
							$sql="select * from tblcity";
						}
						
						$result=mysqli_query($con,$sql);
						$count=mysqli_num_rows($result);
						
						if($count==0)
						{
							echo "<p style=\"color:red\">Ooops! No Data Found!</p>";
						}
						else if($count==1)
						{
							echo "<p style=\"color:green\">1 Record Found.</p>";
						}
						else 
						{
							echo "<p style=\"color:green\">$count Records Found.</p>";
						}
						

						while($line=mysqli_fetch_array($result))
						{
							$id=$line['id'];
							$stateid=$line['stateid'];
							$cityname=$line['cityname'];
							
							echo "<tr>
									<td>$id</td>
									<td>$stateid</td>
									<td>$cityname</td>
								  </tr>";

						}
	



?>
</tbody>

     
      



</table>
</form>
</body>
</html>