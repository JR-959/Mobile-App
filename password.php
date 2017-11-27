<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];   
echo "the username is $myusername";
 echo "the password is $mypassword";   
}
include ("connect.php");
// Select statement to retreive all information from table using a passed value
$sql = "SELECT * FROM employee_table WHERE emp_usn = '$myusername' and emp_pwd = '$mypassword'";
$result = mysqli_query($link, $sql);

if(!$result){
  echo('bad search');
}
else
{
  echo('good search');
   $count = mysqli_num_rows($result); 
    if($count == 1) {
     header("location: home.php");
      }else {
        //header ("location: password1.php")
        header ("location: password1.php");
      }
    
      
} // end of IF else statement
?>

   
   
   