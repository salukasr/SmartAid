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
    <title>Blood Oxygen Level</title>

    <style>
        .type3{
            border-radius: 25px;
            border: 3px solid #4CBB17;
            padding: 20px;
            width: 256px;
            height: 15px;
            color:#36454F;
            text-align:center;
        }
        
        .circle{
            border-radius: 100%;
            border: 10px solid 	#50C878;
            padding: 20px;
            width: 110px;
            height: 110px;
            font-size: 16px;
            align-items:center;
        }
        .circlecontent{
            position: absolute;
            margin-top: 64px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <form>
			<div class="form-group">
                <h1 style="margin-bottom:30px;">Blood Oxygen Level</h1>
                <label class="circle"></label>
                <div class="circlecontent"><label style="font-size:20px;">95%</label></div>
            </div>
            <div class="form-group">
				<label type = "text" class="type3">Normal Range 95% to 100%</label>
			</div>
    </form>
	</div>


    <?php include "components/bottom-nav-bar.php"; ?>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</body>
</html>