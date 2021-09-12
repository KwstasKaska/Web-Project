<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
  $_SESSION["to_download"]+=1;
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} 
else {
    // Redirect them to the login page
    header("Location: ../user_functionality/login.html"); //BALE TO SWSTO PATH
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/image.png" type="image/gif" sizes="16x16">
    <title>Its all about HAR</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    

    <!-- Css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/map.css">
    
    
    <!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

</head>


<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="imgs/image.png" width="30" height="30" class="d-inline-block align-top" alt="">harHARias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Basic Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analyze-time.php">Response times</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analyze-headers.php">Headers HTTP</a>
                </li>
                <li class="nav-item active">
                    <a  class="nav-link" href="map.php">Map for IPs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user_functionality/logout.php">Logout</a>
                </li>
            </ul> 
        </div>
    </nav>
    <div class="top-text">
        This is a map that contains information about the location of IPs on which admin has sent HTTP requests.<br>
        You can trace them as the markers on blue color.
    </div>
    <div class="map-container">
        <div id="mapid"></div>
    </div>
    <div class="bottom-text">
        The red marker displays users city of origin and the weight of line between those two markers <br> increases dynamically based on maximum records of IPs.
    </div>
    
    <script src="js/loadMap.js"></script>
</body>

</html>
<!-- 
 _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _       
|             Creators:                      |  
|Athina Fouseki, Github:athi-fus             |  
|Katerina Dervou, Github: katderv            |  
|Konstantinos Kaskantiris, Github:KwstasKaska|
|_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ |  
                    
 -->