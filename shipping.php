<!DOCTYPE html>
<html>
<head>
<title>Shipping Ingo</title>
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
        
	<div data-role="content">
	  <?
        include ("connect.php");
        $result = mysqli_query($link, "SELECT * FROM shp_table");
        if(!$result){
          echo('bad search');
        }
        else
        {
          echo('good search');
            while ($row = mysqli_fetch_array($result))
          {
              echo('in the loop');
                ?> 
                    <table width="400" border="1" cellpadding="0">
                    <tr>

                       <td><?php echo  $row['shp_company'] ; ?></td> 
                       <td><?php echo  $row['shp_date'] ; ?></td>
                       <td><?php echo  $row['shp_number'] ; ?></td>  


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
