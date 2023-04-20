<?php
include 'components/dbconfig.php';


if (isset($_POST['submit'])) {
    $patientname = $_POST['pname']; // fields
    $patientage = $_POST['page'];
    $patientweight = $_POST['weight'];
    $patientgender = $_POST['gender'];
    $pushId = $_POST['user'];

    $newPost = $database
        ->getReference('patient')
        ->push([
            'name' => $patientname,
            'age' => $patientage,
            'weight' => $patientweight,
            'gender' => $patientgender,
            'user_id' => $pushId
        ]);

    if ($newPost->getKey()) {
        echo 'Successfully entered patient data to Firebase.';
        header('Location: signin.php');
    } else {
        echo 'Error adding patient data to Firebase database.';
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Patient Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script language="javascript" type="text/javascript" src="js/login.js"></script>


    <style>
        .homeimg {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
        }

        .type3 {
            border-radius: 25px;
            border: 3px solid #609;
            padding: 20px;
            width: 256px;
            height: 15px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(#0096FF, #00FFFF);
            border-radius: 20px;
            padding: 0 15px;
            height: 40px;
            line-height: 40px;
            border-radius: 18px;
            color: #36454F;
            font-weight: bold;
        }
    </style>

</head>

<body style=" text-align:center">
    <div class="container">

        <form name="form" method="POST">

        <?php 
        $pushId = isset($_GET['id']) ? $_GET['id'] : '';
        ?>
        <input type="hidden" name="user" value="<?= $pushId ?>">
            <h1 style="font-size: 20px; margin-bottom:25px; padding-top:20px; ">Patient Information</h1>

            <div class="form-group">
                <input type="text" class="type3" name="pname" placeholder="Patient Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="type3" name="page" placeholder="Patient Age" required>
            </div>
            <div class="form-group">
                <input type="text" class="type3" name="weight" placeholder="Patient Weight" required>
            </div>
            <div class="form-group">
                <select id="mySelect" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" name="submit" value="Submit" onclick="Validation()">
            </div>
        </form>

    </div>

    <!--?php include "components/bottom-nav-bar.php"; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script-->
</body>

</html>