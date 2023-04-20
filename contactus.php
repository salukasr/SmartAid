<?php
include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: signin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contct Us Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            overflow: scroll;
        }
        .field{
            border-radius:25px;
        }
    </style>
</head>
<body style="background-color:	#E1C16E;">
	<div class="container">
		<h1 style="color:	#A52A2A; margin-bottom:15px;">Contact Us</h1>
        <form>
            <div class="form-group">
                <div class="boxxx" style="margin-bottom:10px;">
                    <label style=" font-size: 20px; color:#D22B2B;">Contact Info</label>
                    <label style=" font-size: 20px; font-family: Century-Gothic; font-weight: normal;" class="contactusphone">077-854-0511</label>
                    <label style=" font-size: 20px; font-family: Century-Gothic; font-weight: normal;" class="contactusmail">smartaid@gmail.com</label>
                </div>
			</div>
            <div class="form-group">
                <label style=" font-size: 20px; color:	#A52A2A;">Write Us</label>
				<input type = "text" class="field" name="uname" placeholder="User name">
			</div>
            <div class="form-group">
                <textarea style="resize: none;" class="field" name="cno" placeholder="Type here..." rows="6" cols="50"></textarea>
            </div>
            <div class="form-group">
                <input type = "submit" class="field" name="submit" value="Send" style="background-color:#DE3163; color:white; max-width: 120px;">
            </div>
		</form>
	</div>
	
	<?php include "components/bottom-nav-bar.php"; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</body>
</html>