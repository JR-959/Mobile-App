<!DOCTYPE html>
<html>
<head>
<title>JQM form Mobile Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
<div data-role="page">
	<div data-role="header"> 
        <img src="daycare.png" width="50%" alt="daycare">
	</div>
    <div data-role="content" class="ui-content">
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <h2> press Browse to take photo</h2>
        <input type="file" name="fileToUpload" accept="image/*" capture="user" id="fileToUpload"> 
        <h2> press Upload to save to the cloud</h2>
        <input type="submit" value="Upload">
    </form>
    </div>
    <div data-role="footer">
	     <a href="photo_taker_jqm.html" data-icon="home" data-position="fixed"></a>
    </div>
</div>	

</body>
</html>