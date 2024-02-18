
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leaveapplication";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$enteredUsername=$_POST['username'];

$enteredPassword=$_POST['password'];


$sql =  "SELECT * FROM login WHERE username = '$enteredUsername' AND password = '$enteredPassword'";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
 header("Location:leave.html");
} 

else {
    header("Location:login-1.html");

  echo "Invalid credentails";
}

mysqli_close($conn);
?>

