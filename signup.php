<?php include('../config/constant.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="signin">
     <style>
        body{
            align-items: center;
           
        }
    </style> 
    <form action=""  method="POST">
        <div class="container">
          <h1>Sign Up</h1>
      
          <label for="Name"><b>Name</b><br></label>
          <input type="text" placeholder="Name" name="name" required><br>
      
          <label for="Age"><b>Age</b><br></label>
          <input type="text" placeholder="Age"  name="age" required><br>

          <label for="phonenumber"><b>Phone Number</b><br></label>
          <input type="text" placeholder="PhoneNumber"  name="phonenumber" required><br>

          <label for="address"><b>Address</b><br></label>
          <input type="text" placeholder="Address"  name="address" required><br>

          <label for="dob"><b>DOB</b><br></label>
          <input type="text" placeholder="DOB"  name="dob" required><br>

          <label for="gender"><b>Gender</b><br></label>
          <input type="text" placeholder="Gender"  name="gender" required><br>

          <label for="email"><b>Email</b><br></label>
          <input type="text" placeholder="Email"   name="email" required><br>
      
          <label for="psw"><b>Password</b><br></label>
          <input type="password" placeholder="Password"  name="password" required><br>
      
          <label>
            <input type="checkbox" checked="checked"  style="margin-bottom:15px"> Remember me
          </label>
      
      
          <div class="clearfix">
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
</body>
</html>
<?php
//echo"connect";
if(isset($_POST['submit'])) 
{
  echo"connect";
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    


    $sql = "INSERT INTO signup SET 
    name='$name',
    age='$age',
    phonenumber='$phonenumber'
    address='$address',
    dob='$dob',
    gender='$gender'
    email='$email',
    password='$password',
   
";


$res = mysqli_query($conn, $sql) or die($mysqli_error());

if($res==TRUE)
{

    echo "inserting";
  //header("location:".SITEURL.'admin/addadmin.php');

   
}
else
{
    echo "error inserting";
  // ("location:".SITEURL.'admin/addadmin.php');

   
    
}


}
?>

