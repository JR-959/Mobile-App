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
                                                                         
<div data-role="page"  id="openingPage">

	<div data-role="header">
        <h1 style="text-align:center">NY Times</h1>
    </div>
    
    <div data-role="content">
      <?php
        include ("connect.php");
        // Select statement to retreive all information from table using a passed value
        $result = mysqli_query($link, "SELECT * FROM ad_table WHERE feature_item='Y'");
        if(!$result){
        echo('bad search');
        }
        else
        {
        // echo('good search');
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
