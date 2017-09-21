<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/home.css" media="all" />
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	var isPC = window.matchMedia("only screen and (min-width: 767px)");
	
	 if (isPC.matches) {
		 switch_script('<?php echo url_root; ?>js/jquery.fullPage.js');
	}else {
		switch_script('<?php echo url_root; ?>js/jquery.fullPage_sp.js');
	}
		 
});

function switch_script(url){
	var script = document.createElement( 'script' );
    script.type = 'text/javascript';
    script.src = url;
    $('head',document).append( script );
}

</script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$('#fullpage').fullpage({
				//anchors: ['firstPage'],
				//sectionsColor: ['#4A6FB1'],
				autoScrolling: false,
				css3: true
			});
		});
		
</script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi9KZruuoyo3xx6w30iy2IV2qk-JpmlD4">
    </script>
    <script type="text/javascript">
      $(window).load(function() {
//$('#map-canvas').css({'height': $('.section').height() - $('.site-header').height()});
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
      //  { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  
  var myLatlng = new google.maps.LatLng(35.6618382, 139.7576132);
  
  var mapOptions = {
    zoom: 17,
	scrollwheel: false,
    center: myLatlng,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  
  var marker = new google.maps.Marker({
  position: myLatlng,
  map: map,
  icon: '<?php echo url_root; ?>img/access/icon_access.png',
});
  
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
  marker.setMap(map);
});
$(window).resize(function() {
//$('#map-canvas').css({'height': $('.section').height() - $('.site-header').height()});
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
      //  { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  
  var myLatlng = new google.maps.LatLng(35.6618382, 139.7576132);
  
  var mapOptions = {
    zoom: 17,
	scrollwheel: false,
    center: myLatlng,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  
  var marker = new google.maps.Marker({
  position: myLatlng,
  map: map,
  icon: '<?php echo url_root; ?>img/icon-access.png',
});
  
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
  marker.setMap(map);
});
    </script>


<div id="fullpage" class="access_page">
	<div class="section" id="section0">
    <div id="map_info1" class="map_info clear">
    <h2 class="access_title"><img src="<?php echo url_root; ?>img/access_title.png" alt="アクセス" /></h2>
    <p class="map_info_txt">
    〒105-0021 <br />
東京都港区東新橋2-4-1<br />
サンマリーノ汐留2F<br /><br />
<STRONG>JR山手線・東京メトロ銀座線</STRONG><br />
新橋駅（徒歩約7分）<br />
<STRONG>都営浅草線</STRONG><br />
新橋駅（徒歩約4分）<br />
<STRONG>都営大江戸線</STRONG><br />
汐留駅（徒歩約4分）<br /><br />
    </p>
    </div>
    
    <div id="map_info2" class="map_info clear">
    <h2 class="access_title_hide">アクセス</h2>
    <p class="map_info_txt">
    〒105-0021 <br />
東京都港区東新橋2-4-1
サンマリーノ汐留2F<br />

JR山手線・東京メトロ銀座線
新橋駅（徒歩約7分）<br />

都営浅草線 
新橋駅（徒歩約4分）<br />

都営大江戸線
汐留駅（徒歩約4分）
    </p>
    </div>
    
		<div id="map-canvas"></div>
	</div>
    
</div>

