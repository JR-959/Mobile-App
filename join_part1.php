<!DOCTYPE html>
        <html>
        <head>
        <title>First Mobile Example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        </head>

        <body>

        <div data-role="page" id="adds">

            <div data-role="header">
                <h1 style="text-align:center">Happy Employee</h1>
            </div>

       <form>
                
<?
// gets the connect information for the database
include ("connect.php");
$choice=$_GET['emp_id'];
                
// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM appt_table WHERE emp_id=$choice");
if(!$result){
  //echo('bad search');
}
else
{
 
    while ($row = mysqli_fetch_array($result))
  {
        //print( "<form>\n")
        $cust_id= $row['cust_id'];
        $item_id= $row['item_id'];
        
        //print( "</FORM>\n" );  
     ?> 
        <div data-role="content">
              <ul data-role="listview" >
                   <li><a href="join_part2.php"><?php echo $row['item_id'] ; ?></a></li>
              </ul>
        </div>    
    <?
       
  }  //end of while loop
    
} // end of IF else statement
?>
                
            </form>           

            <div data-role="footer">
                <div data-role="navbar">
                    <ul>
                       <li><a href="opening.php" data-icon="home"></a></li>
                       <li><a href="home.php">See More Adds</a></li>
                       <li><a href="http://teach.park.edu/~mlong322/test_php/ad_table_ad.html">Place an Add</a></li>
                    </ul>
                </div>
            </div>
        </div>