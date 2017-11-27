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
<div data-role="page" id="employees">
    <div data-role="header">
        <h1 style="text-align:center">Happy Employee</h1>
    </div>
    
    <div data-role="content">
	  <ul data-role="listview" >
         <?
            // gets the connect information for the database
            include ("connect.php");

            // Select statement to retreive all information from table
            $result = mysqli_query($link, "SELECT * FROM employee_table");
            if(!$result){
              //echo('bad search');
            }
            else
            {
              //echo('good search');
            print( "<form name=\"form1\" method=\"get\" action=\"join_part1.php\">\n" );
            print "<p>users ";
            print ("<select name=\"emp_id\">\n");
              while ($row = mysqli_fetch_array($result))
              {
                  //echo('in the loop');
                print ("<option value=\"$row[emp_id]\"");
                print (">");
                print ("$row[emp_fn]");

              }  //end of while loop
                 print( "<INPUT TYPE=\"submit\" VALUE=\"enter \" NAME=\"submit\">\n" );
                 print( "</FORM>\n" );  
            } // end of IF else statement

        ?>
      </ul>
    </div>    
    
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
         
</body>
</html>