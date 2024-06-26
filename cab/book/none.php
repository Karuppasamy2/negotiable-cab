<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="location.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php 
$car=$_GET['car'];
?>
       <script>
$(document).ready(function() {
    $('#routeButton').on('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
        GetMap();
    });
});

function GetMap() {
    var carName = "<?php echo $car; ?>";
    var costPerKm = 0;
    var distance = 1000;
    var duration = 10000;

    // Determine the cost based on the car name
    switch (carName) {
        case 'audi':
            costPerKm += 20 * distance;
            break;
        case 'benz':
            costPerKm += 19 * distance;
            break;
        case 'bmw':
            costPerKm += 17 * distance;
            break;
        case 'swift':
            costPerKm += 16 * distance;
            break;
        default:
            costPerKm += 15 * distance;
    }

    document.getElementById('car').value = carName;
    document.getElementById('distance').value = distance;
    document.getElementById('cost').value = costPerKm;
    document.getElementById('duration').value = duration;

    // AJAX call to send the form data to 'saveroute.php'
    $.ajax({
        type: 'POST',
        url: 'saveroute.php',
        data: $('#ajax').serialize(),
        success: function(response) {
            alert(response);
        },
        error: function() {
            alert('Error sending route data to PHP script:');
        }
    });
}

  

</script>
    </head>
<body>
    <?php
    $driver=$_GET['driver'];
    ?>
<h1>Find The Distance Between Two Places.</h1>
    <p>This App Will Help You Calculate Your Travelling Distances.</p>
    <form id="ajax">
    <input type="text" id="from" name="from"placeholder="Origin">
    <input type="text" id="to" name="to" placeholder="Destination">
    <input type="hidden" name="driver" value="<?php echo $driver; ?>">
    <input type="hidden" name="cost" id="cost">
    <input type="hidden" name="distance" id="distance">
    <input type="hidden" name="duration" id="duration">
    <input type="hidden" name="car" id="car">

    <button id="routeButton" onclick="GetMap()">Calculate Route</button>
    <div id="output"></div>
    </form>
</body>
</html>