<!DOCTYPE html>
<html>
<head>
    <title>Distances btn two cities App</title>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
    <script type='text/javascript'>
    function GetMap() {
        var dist;
        var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'KPWN6crOmO5jKoqzdjmT~NCFExWFexXy-Bmtbcd5_BA~Ai4ZwcheN_Jb_8heJIxc3f5MgbQd1mRQSUFZCicM8TxndlK_-zn7rK3KK9fDJVen',
            center: new Microsoft.Maps.Location(9.9252, 78.1198),
            zoom: 7
        });

        Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
            var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
            document.getElementById('routeButton').addEventListener('click', function () {
                directionsManager.clearAll();
                directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.driving });
                var from = new Microsoft.Maps.Directions.Waypoint({ address: document.getElementById('from').value });
                var to = new Microsoft.Maps.Directions.Waypoint({ address: document.getElementById('to').value });
                directionsManager.addWaypoint(from);
                directionsManager.addWaypoint(to);
                directionsManager.calculateDirections();
            });

            Microsoft.Maps.Events.addHandler(directionsManager, 'directionsUpdated', function (args) {
                var routeSummary = args.routeSummary[0];
                dist = routeSummary.distance / 1000; 
                document.getElementById('output').innerHTML = 'Distance: ' + dist + ' km<br>Duration: ' + routeSummary.time + ' seconds';
                document.getElementById('direction').value= dist;
          
            });
        });
    }
    </script>
</head>
<body><p
    <h1>Find The Distance Between Two Places.</h1>
    <p>This App Will Help You Calculate Your Travelling Distances.</p>
    <label for="from">Origin:</label>
<input type="text" id="from" name="from" placeholder="Origin">

<label for="to">Destination:</label>
<input type="text" id="to" name="to" placeholder="Destination">
    <button id="routeButton">Calculate Route</button>
    <div id="myMap" style="position:relative;width:600px;height:400px;"></div>
    <div id="output"></div>
    <form action="sample.php" method="post">
        <input type="hidden" id="direction" name="direction"/>
        <button type="submit">val</submit>
    </form>
</body>
</html>
