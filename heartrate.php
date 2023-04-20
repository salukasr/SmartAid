<?php
include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: signin.php');
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
    <title>Heart Rate</title>

    <style>
        body{
            overflow: scroll;
        }

        .heart{
            height:110px;
            width:110px;
            background-color:red;
            position: absolute;
            transform: rotate(45deg);
            box-shadow: -20px 20px 150px #f20044;
            animation: beating 0.5s linear infinite alternate;
            margin-top:360px;
        }

        .heartcontent{
            position: absolute;
            margin-top: 310px;
            text-align:center;
        }

        @keyframes beating{
            0%{transform: rotate(45deg) scale(1.10);}
            80%{transform: rotate(45deg) scale(1.0);}
            100%{transform: rotate(45deg) scale(0.8);}
        }

        .heart::before{
            content:"";
            position: absolute;
            height:110px;
            width:110px;
            background: red;
            right: 50%;
            border-radius:50%;
            box-shadow: 20px 20px 150px #f20044;
        }

        .heart::after{
            content:"";
            position: absolute;
            height:110px;
            width:110px;
            background: red;
            top: -50%;
            border-radius:50%;
            box-shadow: 20px 20px 150px #f20044;
        }

        .type3{
            border-radius: 25px;
            border: 3px solid #C41E3A;
            padding: 20px;
            width: 256px;
            height: 15px;
            font-size: 16px;
            background-color:#FFE5B4;
        }
        a{
            text-decoration:none;
        }
		.link1 {
            display: inline-block;
            padding: 2px;
            background: linear-gradient(#0096FF, #00FFFF);
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form>
			<div class="form-group">
                <h1 style="">Heart Rate</h1>
                <div class="heart"></div>
                <div class="heartcontent"><label style="color:white; font-size:20px; font-weight: normal;">90 bpm</label></div>
            </div>
            <div class="form-group">
				<label type = "text" class="type3" style="margin-top:280px;">Avg Heart rate 72 bpm </label>
			</div>
            <div class="form-group">
				<label type = "text" class="type3">Min Heart rate 60 to 80 bpm </label>
			</div>
            <div class="form-group">
				<label type = "text" class="type3">Max Heart rate over 90 bpm </label>
			</div>
            <div class="form-group">
                <a class="link1" href="#" style=""><span class="btnbg"><span>Back</span></span></a>
			</div>
    </form>
	</div>


    <?php include "components/bottom-nav-bar.php"; ?>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</body>
</html>