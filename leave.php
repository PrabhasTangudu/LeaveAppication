<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $school=$_POST['school'];
    $program1=$_POST['program1'];
    $branch=$_POST['branch'];
    $name=$_POST['Name'];
    $roll=$_POST['rollno'];
    $attend=$_POST['attendance'];
    $sec=$_POST['section'];
    $fdate=$_POST['fdate'];
    $tdate=$_POST['tdate'];
    $adate=$_POST['applyDate'];
    $days=$_POST['days'];
    $outof=$_POST['outof'];
    $inform=$_POST['inform'];
    $sphone=$_POST['sphone'];
    $pphone=$_POST['pphone'];
    $email=$_POST['email'];
    $text=$_POST['Reason'];
    $cname=$_POST['cname'];
    $address=$_POST['address'];


}
  
   $con = mysqli_connect("localhost", "root", "", "leaveapplication");

// Check conn
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (empty($school) || empty($program1) || empty($branch) || empty($name) || empty($roll) || empty($attend) || empty($sec) || /* add other required fields */) {
  echo "Please fill out all required fields.";
} 
else {
$sql= "insert into leave_(school,program,branch,name,rollno,attendance,section,fdate,tdate,adate,days,outof,informed_to_parent,sphone,
pphone,email,reason,classTeacher,address)
values('$school','$program1','$branch','$name','$roll','$attend','$sec','$fdate','$tdate','$adate','$days','$outof','$inform','$sphone','$pphone','$email','$text','$cname','$address')";
}

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
mysqli_close($con);

?>