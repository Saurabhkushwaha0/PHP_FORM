<?php

if (isset($_POST['name'])){

$server = "Localhost";
$username ="root";
$password ="";

$con =  mysqli_connect($server,$username,$password);

if(!$con)
{
 die("Connection to this database failed due to ".$mysqli_connect_error());         
}
else{
     // echo " SuccessFull Connection To the Database";

}

@$name  = $_POST['name'];
@$email = $_POST['email'];
@$age = $_POST['age'];
@$descriibes = $_POST['describes'];
@$recommend = $_POST['recommend'];
@$languages = $_POST['languages'];
@$languages1 = implode(",",$languages);

@$desc1 = $_POST['desc1'];



$sql = "INSERT INTO `form_data`.`entries` (`name`, `email`, `age`, `describes`, `recommend`, `languages`, `desc1`,date) VALUES ('$name','$email','$age','$descriibes','$recommend','$languages1','$desc1', current_timestamp())";

// echo "$sql";

if($con->query($sql) === TRUE) 
{
   echo "Successsfully Inserted";
}
else
{
   echo " ERROR : $sql <br/> $con->error";
}

$con->close();

}

?>


