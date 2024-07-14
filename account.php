<?php

    if(isset($_POST['submit']))
    {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mobilenumber = $_POST['mobilenumber'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $host = 'localhost';
        $user='root';
        $pass='';
        $dbname = 'register';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $query = "INSERT INTO form (firstname,lastname,mobilenumber,emailaddress,password,confirmpassword) values ('$firstname','$lastname','$mobilenumber','$emailaddress','$password','$confirmpassword')";

        mysqli_query($conn, $query);

        


        if(!empty($emailaddress) && !empty($password) && !is_numeric($emailaddress))
        {


            echo "<script type='text/javascript'> alert('successfully registered')</script>";
            header('location:display.php');
        }

        else
        {
            echo "<script type='text/javascript'> alert('please enter some valid information')</script>";

        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Account form</title>
    <script src="farm.js"></script>
</head>
<body>


	 <div id="formdiv">
        <form action="#" method="POST" autocomplete="off" onsubmit="return validation()">
            <table>
                <tr>
                    <th><h3>Create Your Account</h3></th>
                </tr>

                <tr>
                     <td><input type="text" class="inputclass" placeholder="First Name" name="firstname" id="user">

                        <br><span id="userr"></span>

                     </td>
                </tr>

                <tr>
                     <td><input type="text" class="inputclass" placeholder="Last Name" name="lastname" id="name">
                       <br><span id="namee"></span>
                        </td>
                </tr>

                
                <tr>
                     <td><input type="Number" class="inputclass" placeholder="Mobile Number" name="mobilenumber" id="mobile">
                        <span id="mobilee"></span>
                    </td>
                </tr>

                <tr>
                     <td><input type="text" class="inputclass" placeholder="Email address" name="emailaddress" id="email">
                        <span id="emaill"></span>
                     </td>
                </tr>

                <tr>
                    <td><input type="password" class="inputclass" placeholder="Password" name="password" id="pass">
                        <span id="passs"></span>
                    </td>
                </tr>

                <tr>
                    <td><input type="password" class="inputclass" placeholder="Confirm password" name="confirmpassword" id="cpass">
                        <span id="cpasss"></span>
                    </td>
                </tr>

                <tr>
                     <td>
                      <input type="submit" value="Create Account" class="btnclass" name="submit"><hr>
                     </td>
                </tr>

                <tr>
                	<th><h5>Already have an account?<a href="login.php"> Login Now</a></h5></th>
                </tr>
                


                
            </table>

        </form>

    </div>

</body>
</html>