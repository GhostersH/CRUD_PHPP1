<?php

$db = mysqli_connect("localhost","root", "","phpcrud_db");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>

<form method="post">

<label>Name</label>
<input type="text" name="name" placeholder="Enter name"  >
<br><br>

<label>Email</label>
<input type="email" name="email" placeholder="Enter Email"  >
<br><br>

<label>Address</label>
<input type="text" name="address" placeholder="Enter Address"  >
<br><br>
<input type="submit" name="submit" value="Submit">


</form>

    
</body>
</html>

<?php

if(isset($_POST['submit'])){


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

$qry = "insert into user values (null, '$name', '$email', '$address')";
if(mysqli_query($db,$qry)){
echo '<script>alert("User successfully!");</script>';
header('location: user.php');


}else{
echo mysqli_error($db);


}



}
?>