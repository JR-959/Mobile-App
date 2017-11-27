<!DOCTYPE html>
<html>
<head>
<title>Geo  Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head>

<body>
<div data-role="page">
	<div data-role="header">
        <h1 style="text-align:center">Happy Employee</h1>
    </div>
	<div data-role="content" class="ui-content">
       <p id="demo">Click the button to get your position.</p>
            <button onclick="getLocation()">Get location</button>

            <div id="mapholder"></div>
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyAdyZipTJikHjGF8fXM30f-jtjf-U8tZzM"></script>

            <script>
            var x = document.getElementById("demo");
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else { 
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
            function showPosition(position) {
                var lat = position.coords.latitude;
                var lon = position.coords.longitude;
                var latlon = new google.maps.LatLng(lat, lon)
                var mapholder = document.getElementById('mapholder')
                mapholder.style.height = '250px';
                mapholder.style.width = '300px';

                var myOptions = {
                center:latlon,zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                mapTypeControl:false,
                navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                }

                var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
                var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
            }

            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }
            </script>
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
