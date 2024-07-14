<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>www.farmsizzle.com</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  


</head>

<body>
	<div class="container">
		<button><a href="account.php" class="text-light">Add User</a></button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Mobile number</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations

    </tr>
  </thead>
  <tbody>

  	<?php
  	$sql="select * from form";
  	$result=mysqli_query($con,$sql);
  	if($result)
  	{
  		while ($row=mysqli_fetch_assoc($result)) 
  		{
  			$id=$row['id'];
  			$firstname=$row['firstname'];
  			$lastname=$row['lastname'];
  			$mobile=$row['mobilenumber'];
  			$emailaddress=$row['emailaddress'];
  			$password=$row['password'];
  			echo'
  			<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$mobile.'</td>
      <td>'.$emailaddress.'</td>
      <td>'.$password.'</td>
      <td>
     <button><a href="update.php? updateid='.$id.'">Update</a></button>
     <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
     </td>
     </tr>';

  			
  		}
  	}

  	?>
    
  </tbody>
</table>
	</div>

</body>
</html>