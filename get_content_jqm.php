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
    
<div data-role="page">
	<div data-role="header">
        <h1 style="text-align:center">NY Times</h1>
    </div>
    
	   <div data-role="content">
        <ul data-role="listview" data-inset="true">
        <?php
         //echo('in the page ');
         //include ("connect.php");
         include ("get_content_value.php");
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
