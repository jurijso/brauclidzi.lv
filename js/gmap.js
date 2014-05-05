
var map, ren, ser;
var data = {};
function goma()
{
    map = new google.maps.Map( document.getElementById('map-canvas'), {'zoom':12, 'mapTypeId': google.maps.MapTypeId.ROADMAP, 'center': new google.maps.LatLng(26.05678288577881, -80.30236816615798) })
 
    ren = new google.maps.DirectionsRenderer( {'draggable':true} );
    ren.setMap(map);
    ser = new google.maps.DirectionsService();
     
    ser.route({ 'origin': new google.maps.LatLng(26.104887637199948, -80.39231872768141), 'destination':  new google.maps.LatLng(25.941991877144947, -80.16160583705641), 'travelMode': google.maps.DirectionsTravelMode.DRIVING},function(res,sts) {
        if(sts=='OK')ren.setDirections(res);
    })     
}
$(function() {
	goma();
});