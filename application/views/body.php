
<div id="map-canvas"></div>
<form action="/welcome/addtrip" method="post">
	<p>From:<input type="text" id="trip_from" name="trip_from"  placeholder="from"></p>
	<p>To:<input type="text" id="trip_to" name="trip_to"  placeholder="to"></p>
	<p>Route:<input type="text" id="trip_route" name="trip_route" placeholder="trip route"></p>
	<p>Trip date:<input type="text" id="trip_date" name="trip_date" placeholder="trip date"></p>

	<p><input type="submit" value="save"></p>
</form>
<p><button onclick="calcRoute()">Calcroute</button></p>
<p><button onclick="saveWaypoints()">saveWaypoints</button></p>
