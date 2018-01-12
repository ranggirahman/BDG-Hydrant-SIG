<center><h1>PETA KOTA BANDUNG</h1></center>

<div>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="lib/OpenLayers.js"></script>
    <script type="text/javascript">
        function init(){
			OpenLayers.ProxyHost="/proxy/?url=";
			var map = new OpenLayers.Map('map',
                        {maxExtent: new OpenLayers.Bounds(107.545900814,-6.96973538399993,107.739340474,-6.83688472599998),
                         maxResolution: 0.001546});
						 
			var mslayer = new OpenLayers.Layer.MapServer( "Kota Bandung",
						"http://localhost:82/cgi-bin/mapserv.exe?map=C:/ms4w/apps/kotabdg/sigpen.map&",
						{layers: 'KECAMATAN_BATAS'},
						{isBaseLayer: true},
						{visibility: true}, 
						{transparent: true},
						{format:'image/png'},
						{singleTile: "true", ratio:1} );

			var mslayer2 = new OpenLayers.Layer.MapServer( "Jalan",
						"http://localhost:82/cgi-bin/mapserv.exe?map=C:/ms4w/apps/kotabdg/sigpen.map&",
						{layers: 'Jalan_Kota_Bandung'},
						{isBaseLayer: false},
						{visibility: false}, 
						{transparent: true},
						{format:'image/png'},
						{singleTile: "true", ratio:1} );
									
									
			map.addLayer(mslayer);
			map.setBaseLayer(mslayer);
			map.addLayer(mslayer2);

			map.zoomTo(1);
			map.addControl(new OpenLayers.Control.LayerSwitcher());
			map.addControl(new OpenLayers.Control.Scale());
			map.addControl(new OpenLayers.Control.Navigation());
			map.addControl(new OpenLayers.Control.MousePosition());
			map.addControl(new OpenLayers.Control.SelectFeature());
			map.addControl(new OpenLayers.Control.LayerSwitcher());
			
			/*var newl = new OpenLayers.Layer.Text( "Hydrant", { location:"http://localhost/petabdg/data.txt"} );
            map.addLayer(newl);*/
            var markers = new OpenLayers.Layer.Markers( "Lokasi Hydrant" );
            map.addLayer(markers);

            var size = new OpenLayers.Size(21,25);
            var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
            var hydrant = new OpenLayers.Icon('img/fire-hydrant.png',size,offset);

            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.565606,-6.904911),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.568659,-6.907116),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.597431,-6.906309),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.590987,-6.903735),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.594217,-6.906692),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.592913,-6.904405),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.602088,-6.899973),hydrant.clone()));            
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.583997,-6.878997),hydrant.clone()));            
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.592942,-6.870416),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.585126,-6.868352),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.584545,-6.873916),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.591141,-6.877885),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.612341,-6.898714),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.634193,-6.913407),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.633057,-6.911636),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.620328,-6.901351),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.595132,-6.858718),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.602426,-6.882470),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.625696,-6.889059),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.595568,-6.856360),hydrant.clone()));
            markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.595905,-6.873985),hydrant.clone()));
            

            //markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.8,-6.8),gold.clone()));
            //markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(107.9,-6.9),gold.clone()));

            //marker = new OpenLayers.Marker(new OpenLayers.LonLat(90,10),icon.clone());
            //marker.events.register('mousedown', marker, function(evt) { alert(this.icon.url); OpenLayers.Event.stop(evt); });
            //markers.addMarker(marker); 

        }
    </script>
	<div id="map" class="smallmap"></div>
  <script type="text/javascript">
	init();
  </script>
</div>


