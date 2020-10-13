<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="form";

$conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(!$conn){
	echo"error";
}

$firstname=filter_input(INPUT_POST,'firstname');
$lastname=filter_input(INPUT_POST,'lastname');
$Address=filter_input(INPUT_POST,'Address');
$contact=filter_input(INPUT_POST,'contact');
$emailid=filter_input(INPUT_POST,'emailid');
$gender=filter_input(INPUT_POST,'gender');
$dob=filter_input(INPUT_POST,'dob');

$sql="INSERT INTO `form1`(`firstname`,`lastname`,`Address`,`contact`,`emailid`,`gender`,`dob`) values('$firstname','$lastname','$Address','$contact','$emailid','$gender','$dob')";  

$x=mysqli_query($conn,$sql);

if(!$x){
    echo "error".mysqli_error($conn);
}
else {
    echo "success";

}	
?>