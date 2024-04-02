<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>
    <link rel="stylesheet" href="css/landlord.css">
    <style>
        /* CSS styles for map container */
        #google-map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Property</h1>
        <form action="add_property.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" required>
            <div id="google-map"></div>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('google-map'), {
                center: { lat: 6.824265618550028, lng: 80.04001213226317 },
                zoom: 15
            });

            var marker;

            // Add click event listener to the map
            map.addListener('click', function(event) {
                placeMarker(event.latLng);
            });

            // Function to place marker at the clicked location
            function placeMarker(location) {
                if (marker) {
                    marker.setPosition(location);
                } else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
                // Set latitude and longitude values to hidden inputs
                document.getElementById('lat').value = location.lat();
                document.getElementById('lng').value = location.lng();
            }
        }
    </script>

    <!-- Load Google Maps API with callback to initMap function -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
            <button type="submit">Add Property</button>
        </form>
    </div>

    <!-- Google Maps API -->
    
</body>
</html>
