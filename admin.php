<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/signin.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/arkaplan.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
			background-size: cover;
        }
        
        h4 {
            color: #31bd7c;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
    </style>


</head>

<body>
    <div class="container">


        <img class="img-responsive" src="images/hotel_logo.png" style="width:100%; height:200px;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home page</a></li>
                    <li><a href="room.php">Our Rooms</a></li>
                    <li><a href="onlinereserve.php">Online Reservation</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Sign-Out</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Rooms</h4>
                <hr>
                <ul>
                    <li><a href="admin/makeroom.php">Add Room</a></li>
                    <li><a href="roomshow.php">Show All Rooms</a></li>
                    <li><a href="roomshow.php">Edit Rooms</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Reservations</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Reserve</a></li>
                    <li><a href="viewallrooms.php">Show all Reserved rooms</a></li>
                    <li><a href="viewallrooms.php">Edit reserved rooms</a></li>
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Add user</h4>
                <hr>
                <ul>
                    <li><a href="admin/reservation.php">Add user</a></li>
 
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>









    </div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>