<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

    $roomname=$_GET['roomname'];

    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->booknow($checkin, $checkout, $name, $phone,$roomname);
        if($result)
        {
            echo "<script type='text/javascript'>
                  alert('".$result."');
             </script>";
        }   
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reservation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'dd-mm-yy'
                });
  } );
  </script>

 <style>
	 
	 body {
            background-image: url('images/arkaplan.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
			background-size: cover;
        }
	 h2{
		 color:#31bd7c;
	 }
	 label
{
    color:#31bd7c;
    
}
	 
	</style>
</head>

<body>
	
    <div class="container">
      
      
       <img class="img-responsive" src="images/hotel_logo.png" style="width:80%; height:180px;">      
        

      <div class="well">
		  <h2>Reservation: <?php echo $roomname; ?></h2>
            <hr>
            <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin">Check-in:</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkin">

                </div>
               
               <div class="form-group">
                    <label for="checkout">Check-out:</label>&nbsp;
                    <input type="text" class="datepicker" name="checkout">
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="9175XXXXXXXX" required>
                </div>
               
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Reserve</button>
               <br>
                <div id="click_here">
                    <a href="index.php">Back to Homepage</a>
                </div>
            </form>
        </div>
    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>
</html>