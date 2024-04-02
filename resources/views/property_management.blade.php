<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management</title>
    <link rel="stylesheet" href="css/landlord.css">
    @include('components.navbar')
</head>
<body>
    <div class="container">
        <h1>Property Management</h1>
        
        <div class="properties">
            <h2>Your Properties</h2>
            
            <div class="property-card">
                <img src="img/1.jpg" alt="Property 1">
                <h3>Property Title</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Edit</button>
                <button>Delete</button>

                <div class="property-card">
                <img src="img/1.jpg" alt="Property 1">
                <h3>Property Title</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Edit</button>
                <button>Delete</button>
            </div>
        </div>
    </div>
</body>
</html>
