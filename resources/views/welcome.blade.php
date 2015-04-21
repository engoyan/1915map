<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; width: 100%; margin: 0; padding: 0;}

      #map-canvas{
		  position: absolute;
		  top: 0px;
      }

      .title{
      	z-index: 1000;
	  	position: absolute;
  		font-family: 'Poiret One', cursive;
		padding: 20px 40px;
		text-align: center;
		background-color: rgba(131, 131, 131, 0.3);
		margin: 0 30px;
	  }
	  .title h1{
	  	color: #F00;
  		font-size: 34pt;
  		margin-bottom: 0px;
	  }
	  .title span{
  		font-size: 12pt;
  		color:#FFF;
	  }

    </style>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3.exp">
    </script>
    <script type="text/javascript">
        
        var map;

        function initialize() {
            var mapOptions = {
                zoom: 7,
              panControl: false,
              zoomControl: false,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              overviewMapControl: false,
              //38.8235622,42.2721864,7z
            center: new google.maps.LatLng(39,42),
            styles: 

                    // [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"hue":"#435158"},{"saturation":10},{"lightness":30},{"gamma":0.5}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"color":"#7c95de"},{"weight":0.69},{"saturation":95},{"lightness":20}]}]         
                    
                    [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"hue":"#435158"},{"saturation":10},{"lightness":30},{"gamma":0.5}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"off"},{"color":"#7c95de"},{"weight":0.69},{"saturation":95},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]}]                          
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  	<div class="title">
	  	<h1>The 1915</h1>
	  	<span>knowledge is priceless</span>
  	</div>
    <div id="map-canvas"></div>
  </body>
</html>
                        
