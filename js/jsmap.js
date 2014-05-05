	var rendererOptions = {
 		draggable: true
	};
	var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
	var directionsService = new google.maps.DirectionsService();
	var map;
	var routeData;
	var data = {};
	function initialize() {

	var mapOptions = {
	    zoom: 7,
	    center: new google.maps.LatLng(56.948, 24.106)
	};
	  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	  directionsDisplay.setMap(map);
	  google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
	    //computeTotalDistance(directionsDisplay.getDirections());
	  });

	}

	function calcRoute() {
	  var start = document.getElementById('trip_from').value;
	  var end = document.getElementById('trip_to').value;
	  var request = {
	      origin:start,
	      destination:end,
	      travelMode: google.maps.TravelMode.DRIVING
	  };
	  directionsService.route(request, function(response, status) {
	    if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setDirections(response);
	    }
	  });
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	$(function(){
        $("#trip_from, #trip_to").geocomplete({
          map: "#map-canvas"
        });
        
      });
	
	function saveWaypoints()
	{
	    var w=[],wp;
	    var rleg = directionsDisplay.directions.routes[0].legs[0];
	    data.start = {'lat': rleg.start_location.lat(), 'lng':rleg.start_location.lng()}
	    data.end = {'lat': rleg.end_location.lat(), 'lng':rleg.end_location.lng()}
	    var wp = rleg.via_waypoints
	    for(var i=0;i<wp.length;i++)w[i] = [wp[i].lat(),wp[i].lng()]
	    data.waypoints = w;
	     
	    routeData = JSON.stringify(data);
	    $("#trip_route").val(routeData);

	}
	$( "#trip_to").click(function() {
  		calcRoute();
	});