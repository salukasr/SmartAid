<?php
include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:signin.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        body{
            overflow: scroll;
        }
        .datetime {
            margin-bottom:32px;
            color: #ffffff;
            font-family: "Inter", sans-serif;
        }

        .time {
           color: #E97451;
           
        }

       .date {
           margin-top: 12px;
           color: #E97451;
           font-weight:bold;
        }

        a{
            text-decoration:none;
            
        }
        .alink{
            display: inline-block;
            padding: 2px;
            background: linear-gradient(#F3E5AB, #FFC000);
            border-radius: 20px;
        }
        a > span {
            display: inline-block;
            padding: 0 15px;
            height: 40px;
            line-height: 40px;
            width:55px;
            border-radius: 18px;
        }
        a > span > span {
            font-weight: bold;
            background: #FFF;
            -webkit-background-clip: text;
        }
        .type3{
            border-radius: 25px;
            border: 3px solid #E97451;
            padding: 20px;
            width: 250px;
            height: 15px;
            font-size: 16px;
            background:#F5F5DC;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="datetime" style="text-align:center">
            <div class="date"></div>
            <div class="time"></div>
        </div>
		<form>
            <label class="form-group" style="font-size:14px; font-weight:bold;">Monitor your signs and make your day better</label>
		
            <div class="form-group">
                <span class="type3" style="width:250px;"><a href="http://localhost/SmartAid/heartrate.php">Heart Rate</a><!--div class="hvalue" style="text-align:right;">Value</div--></span>
			</div>
            <div class="form-group">
                <span class="type3" style="width:250px;"><a href="http://localhost/SmartAid/temperature.php">Temperature</a></span>
			</div>
            <div class="form-group">
                <span class="type3" style="width:250px;"><a href="http://localhost/SmartAid/bloodoxygen.php">Blood Oxygen Level</a></span>
			</div>
            <div class="form-group">
                <span class="type3" style="width:250px;"><a href="#">ECG</a></span>
			</div>

            <label class="form-group" style="font-size:12px; text-align:center">Please make sure to consult with your health providers if the health measurements aren't normal</label>
		</form>
        <div class="form-group">
                <a class="alink" href="logout.php" ><span><span>Logout</span></span></a>
			</div>
	</div>

    <?php include "components/bottom-nav-bar.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <script src="js/widget.js"></script>
</body>
</html>