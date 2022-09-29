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


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Survey form Using PHP</title>
     <link rel="stylesheet" href="style.css">
</head>

<body oncontextmenu="return false">

     <h1>Next In Welcome Form</h1>

     <form action="index.php" method="post" class="form">
          <div class="control">
               <label for="">Name</label>
               <Input type="text" name="name" placeholder="Enter The Name ">
          </div>
          <div class="control">
               <label for="">Email</label>
               <Input type="text" name="email" placeholder="Enter The Email ">
          </div>
          <div class="control">
               <label for="">Age</label>
               <Input type="text" name="age" placeholder="Enter The Age ">
          </div>
          <div class="control">
               <label for="">Which option best describes you?</label>
               <select name="" id="">
                    <option value="s" name="describes">Student</option>
                    <option value="i" name="describes">Intern</option>
                    <option value="p" name="describes">Professional</option>
                    <option value="o" name="describes">Other</option>
               </select>
          </div>

          <div class="control">
               <label>Would you recommend Next Innovation to a friend?</label>
               <label for="rec1"><input type="radio" name="recommend" value="y"> Yes</label>
               <label for="rec2"><input type="radio" name="recommend" value="n"> No</label>
               <label for="rec3"><input type="radio" name="recommend" value="m"> Maybe</label>

          </div>


          <div class="control">
               <label for="">Languages and Frameworks known <small> (Check all that apply)</small></label>

               <label for=""><Input type="checkbox" value="c" name="languages[]"> C</Input></label>
               <label for=""><Input type="checkbox" value="cc" name="languages[]"> C++</Input></label>
               <label for=""><Input type="checkbox" value="ccc" name="languages[]"> C#</Input></label>
               <label for=""><Input type="checkbox" value="java" name="languages[]"> Java</Input></label>
               <label for=""><Input type="checkbox" value="python" name="languages[]"> Python</Input></label>
               <label for=""><Input type="checkbox" value="javascript" name="languages[]"> JavaScript</Input></label>
               <label for=""><Input type="checkbox" value="react js" name="languages[]"> React</Input></label>
               <label for=""><Input type="checkbox" value="angular js" name="languages[]"> Angular</Input></label>
               <label for=""><Input type="checkbox" value="spring" name="languages[]"> Spring</Input></label>
               <label for=""><Input type="checkbox" value="dart" name="languages[]"> Dart</Input></label>
               <label for=""><Input type="checkbox" value="Dot net" name="languages[]"> .net(Dot Net)</Input></label>

          </div>

          <div class="control">
               <label for="">Any comments or suggestions</label>
               <textarea cols="5" rows="5" name="desc1"></textarea>
          </div>

          <button type="submit">
               <label for="">Submit</label>
          </button>

          <!-- INSERT INTO `entries` (`name`, `email`, `age`, `describes`, `recommend`, `languages`, `date`) VALUES ('soru', 'soru@gmail.com', '21', 'student', 'yes', 'java', current_timestamp()); -->



     </form>

</body>

</html>


