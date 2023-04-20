<!DOCTYPE html>
<html>
<head>
	<title>Patient Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
	<style>
		.homeimg{
			display:block;
            margin-left: auto;
			margin-right: auto;
			max-width:100%;
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
        .btnbg {
            display: inline-block;
            padding: 0 15px;
            height: 40px;
            line-height: 40px;
            background:#89CFF0;
            border-radius: 18px;
            width: 256px;
        }
        
        .type3{
            border-radius: 25px;
            border: 3px solid #609;
            padding: 20px;
            width: 256px;
            height: 15px;
            font-size: 16px;
        }
        
        .blink{
            
        }
        
	</style>
</head>
<body style="text-align:center">
	<div class="container">
		<h1 style="padding: 20px; margin-bottom: 15px;">Patient Information</h1>
		
		<form>
			<div class="form-group">
                
				<input type = "text" class="type3" name="pname" placeholder="Patient Name">
			</div>
			<div class="form-group">
                <input type = "text" class="type3" name="page" placeholder="Patient Age">
            </div>
            <div class="form-group">
                <input type = "text" class="type3" name="weight" placeholder="Patient Weight">
			</div>
            <div class="form-group">
				<select id="form" name="gender">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			<a class="link1" href="#" style="color:white;" class="alink"><span class="btnbg"><span>Enter</span></span></a>
            <label class="form-group" style="font-size:12px; margin-top:25px;">
                Already have an account?
                <a href="#" style="color:#0096FF; font-weight:bold; margin-top:5px; ">Sign Up</a>
            <label>
		</form>
	</div>
	
	<?php include "components/bottom-nav-bar.php"; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</body>
</html>
