<?
include ("connect.php");
$cust_id = $_POST['cust_id'];
$item_id = $_POST['item_id'];

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM cust_table, item_table WHERE cust_table.cust_id = $cust_id and item_table.item_id = $item_id");


if(!$result){
  echo('bad search');
}
else
{
 echo ('good search'); 
    while ($row = mysqli_fetch_array($result))
  {
      echo('in the loop');
      echo  $row['cust_ln'] ;
?> 
    <h2>here's the photo</h2>
    <img src="<?php echo  $row['item_photo']; ?>">
        
<? 
       
  }  //end of while loop
    
} // end of IF else statement

?>