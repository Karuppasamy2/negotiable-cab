<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="loc.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;600&display=swap');
    </style>
    <?php 
    // Initialize $car and $driver variables if they're not set
    $car = isset($_GET['car']) ? $_GET['car'] : 'default';
    $driver = isset($_GET['driver']) ? $_GET['driver'] : 'default';
    ?>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
    <script type='text/javascript'>
        function GetMap() {
            var costPerKm = 0;
            var distance = 0;
            var duration = 0;
            var money = 0;
            var hours = 0;
            var minutes = 0;
            var status = 1;

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
                    distance = routeSummary.distance; // No need to convert to kilometers
                    duration = routeSummary.time;
                    hours = Math.floor(duration / 3600);
                    minutes = Math.floor((duration % 3600) / 60); 
                    status = 1;
                    switch ("<?php echo $car; ?>") {
                        case 'audi':
                            costPerKm = 20 * distance; // Convert to kilometers
                            break;
                        case 'benz':
                            costPerKm = 19 * distance; // Convert to kilometers
                            break;
                        case 'bmw':
                            costPerKm = 17 * distance; // Convert to kilometers
                            break;
                        case 'swift':
                            costPerKm = 16 * distance; // Convert to kilometers
                            break;
                        default:
                            costPerKm = 15 * distance; // Convert to kilometers
                    }

                    money = costPerKm.toFixed(2);

                    document.getElementById('output').innerHTML = 'Distance: ' + (distance).toFixed(2) + ' km<br>Duration: ' + hours + ' hours ' + minutes + ' minutes<br>Total charge: ' + money;
                    document.getElementById('output').style.display = 'block'; // Show the output
                    document.getElementById('distance').value = (distance).toFixed(2);
                    document.getElementById('hours').value = hours;
                    document.getElementById('minutes').value = minutes;
                    document.getElementById('money').value = money;
                    document.getElementById('status').value = status;
                    document.getElementById('fromHidden').value = document.getElementById('from').value;
                    document.getElementById('toHidden').value = document.getElementById('to').value;
                });

                Microsoft.Maps.Events.addHandler(directionsManager, 'directionsError', function (e) {
                    document.getElementById('output').innerHTML = 'An error occurred calculating the route.';
                });
            });
        }
    </script>
</head>
<body>
    <h1><center>Enter your location details</center></h1>
    
    <div class="css">
        <label><b>PICK-UP</b></label>
        <input type="text" id="from" placeholder="From" name="from"><br>
        <label><b>DROP</b></label>
        <input type="text" id="to" placeholder="To" name="to">
        <button id="routeButton">
            <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="40">
                <path d="m600-120-240-84-186 72q-20 8-37-4.5T120-170v-560q0-13 7.5-23t20.5-15l212-72 240 84 186-72q20-8 37 4.5t17 33.5v560q0 13-7.5 23T812-192l-212 72Zm-40-98v-468l-160-56v468l160 56Zm80 0 120-40v-474l-120 46v468Zm-440-10 120-46v-468l-120 40v474Zm440-458v468-468Zm-320-56v468-468Z"/>
            </svg>
        </button>
    </div>
    <div id="myMap" style="position:relative;width:600px;height:400px;"></div>
    <div id="output" style="display: none;"></div> <!-- Initially hidden -->
    <form action="saveroute.php" method="post">
        <input type="hidden" id="distance" name="distance"/>
        <input type="hidden" id="hours" name="hours"/>
        <input type="hidden" id="minutes" name="minutes"/>
        <input type="hidden" id="money" name="money"/>
        <input type="hidden" id="status" name="status"/>
        <input type="hidden" id="fromHidden" name="from"/>
        <input type="hidden" id="toHidden" name="to"/>
        <input type="hidden" id="driver" name="driver" value="<?php echo $driver;?>"/>
        <button type="submit">Confirm order</button>
    </form>
</body>
</html>
