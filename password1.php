<html>
<head>
    <title>First Mobile Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="themes/HappyEmployee.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>


   <body>
        <div data-role="page"  id="openingPage">

            <div data-role="header">
                <h1 style="text-align:center">Happy Employee</h1>
            </div>

            <div data-role="content" class="ui-content">

                       <form method = "POST" action = "password.php">
                          <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                          <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                          <input type = "submit" value = " Submit "/><br />
                       </form>
            </div>

        </div>

               
					

   </body>
</html>
