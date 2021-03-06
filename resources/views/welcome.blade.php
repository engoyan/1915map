<!DOCTYPE html>
<html>
  <head>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
      html, body, #map-canvas { height: 100%; width: 100%; margin: 0; padding: 0; color:#FFF;}

      #map-canvas{
		  position: absolute;
		  top: 0px;
      }

	  	.content{
	      	z-index: 1000;
		  	position: absolute;
	  		font-family: 'Poiret One', cursive;
	  	}

      .title{
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

	.footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		/* Set the fixed height of the footer here */
		height: 60px;
		/*background-color: #f5f5f5;*/
		margin-bottom: 60px;
	}
	.container > .row {
		padding-bottom: 20px;
	}


	.progress-seek {
		width: 250px;
	}

	.volume-btn {
		width: 100px;
	}

	.playa{
		border: 1px solid #676767;
  		background-color: rgba(131, 131, 131, 0.3);
	}

	#content{
		height: 100%;
	}
	.row-3{
		height: 33%;
	}

	.h1, h1 {
	  font-size: 48px;
	  font-family: 'Poiret One', cursive;
	}

	.h2, h2 {
	  font-size: 36px;
	  font-family: 'Poiret One', cursive;
	}

    </style>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
		<link href="//raw.github.com/WilliamRandol/bootstrap-player/master/css/bootstrap-player.css" rel="stylesheet">
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
                    
                    // [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"hue":"#435158"},{"saturation":10},{"lightness":30},{"gamma":0.5}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"off"},{"color":"#7c95de"},{"weight":0.69},{"saturation":95},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]}]   

                    [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"hue":"#435158"},{"saturation":10},{"lightness":30},{"gamma":0.5}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"off"},{"color":"#7c95de"},{"weight":0.69},{"saturation":95},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"color":"#003753"},{"weight":0.1},{"lightness":10}]}]                  
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  	<div class="title content">
	  	<h1>The 1915</h1>
	  	<span>knowledge is priceless</span>
<!-- 	  	<br/>
	  	<span style="color:red;">coming soon</span> -->
  	</div>

  	<div id="content">
  		
  		
  		<div class="row row-3">
  			<div class="col-md-4"></div>
  			<div class="col-md-4"></div>
  			<div class="col-md-4"></div>
  		</div>

		<div class="row row-3">
  			<div class="col-md-4"></div>
  			<div class="col-md-6">

  			<h1 class="center-block">Hardcore History #52</h1>
  			<h2>by Dan Carlin</h2>

  			<a href="http://www.dancarlin.com/product/hardcore-history-52-blueprint-for-armageddon-iii/" target="_blank">Blueprint for Armageddon III</a>
  			

  			</div>
  			<div class="col-md-4"></div>
  		</div>
  		<div class="row row-3">
  			<div class="col-md-4"></div>
  			<div class="col-md-4"></div>
  			<div class="col-md-4"></div>
  		</div>

  	</div>

	<footer class="footer">
      <div class="container">
        
		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				

  				<audio controls autoplay
  					data-mute	= 'off'
  					data-volume	= 'off'
  					data-seek-width = '400px'
					<source src="http://s.engoyan.com/if_you_believe.mp3" type="audio/mpeg" />
				</audio>



  			</div>
  		</div>

      </div>
    </footer>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	<script src="/js/bootstrap-player.js"></script>


  </body>
</html>
                        
