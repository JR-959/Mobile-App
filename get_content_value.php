<?php
$choice=$_GET['chi']; 
//echo "the category is $choice";

include ("connect.php");
// Select statement to retreive all information from table using a passed value
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code='$choice'");
if(!$result){
  echo('bad search');
}
else
{
  //echo('good search');
   while ($row = mysqli_fetch_array($result))
  {
        ?> 
            <table width="400" border="1" cellpadding="0">
                <tr>
                <td><?php echo  $row['content'] ; ?></td> 
                </tr>
            </table>
        <?
  }  //end of while loop    
} // end of IF else statement
?>

