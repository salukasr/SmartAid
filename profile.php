<?php
include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: signin.php');
}
?>


<?php
include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: signin.php');
    exit();
}

$userRef = $database->getReference('new_users/' . $user_id);
$userSnapshot = $userRef->getSnapshot();
$fetch_profile = $userSnapshot->getValue();

$patientRef = $database->getReference('patient');
$patientSnapshot = $patientRef->getSnapshot();
$patients = $patientSnapshot->getValue();

if ($patients != null) {
    foreach ($patients as $patient) {
        if ($patient != null && $patient['user_id'] == $user_id) {
?>

            <?php if ($patient['name'] != null) { ?>

            <?php } ?>
<?php
        }
    }
}

?>




<!DOCTYPE html>
<html>

<head>
    <title>Profile page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script language="javascript" type="text/javascript" src="js/login.js"></script>
    <style>
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

        .img {
            width: 20px;
            height: 20px;
            position: absolute;
        }

        .type3 {
            border-radius: 25px;
            border: 3px solid #609;
            padding: 20px;
            height: 15px;
            font-size: 16px;
            width: 250px;
        }

        tr {
            height: 85px;
        }

        .test1 {
            max-width: 100%;
            text-align: center;
            padding: 10px;
        }

        .testimg {
            width: 20px;
            height: 20px;
        }

        label {
            display: inline-block;
            width: 100%;
            text-align: left;
        }
    </style>
</head>

<body style="overflow: scroll;">
    <div class="container">
        <h1 style="padding: 20px; margin-bottom: 15px;">Profile Information</h1>
        <!--?php
        $userRef = $database->getReference('new_users/' . $user_id);
        $userSnapshot = $userRef->getSnapshot();
        $fetch_profile = $userSnapshot->getValue();


        $patientRef = $database->getReference('patient');
        $patientSnapshot = $patientRef->getSnapshot();
        $patients = $patientSnapshot->getValue();

        foreach ($patients as $patient_id => $patient) :
        ?-->

        <div class="test1">
            <label class="type3"><?php echo $fetch_profile['username']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>

        <div class="test1">
            <label class="type3" name="pass">Password</label>
            <img src="img/edit.png" class="testimg">
        </div>

        <div class="test1">
            <label class="type3"><?php echo $fetch_profile['mail']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>

        <div class="test1">
            <label class="type3"><?php echo $fetch_profile['mobileno']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>
        <div class="test1">
            <label class="type3"><?php echo $patient['name']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>
        <div class="test1">
            <label class="type3"><?php echo $patient['age']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>
        <div class="test1">
            <label class="type3"><?php echo $patient['weight']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>
        <div class="test1">
            <label class="type3"><?php echo $patient['gender']; ?></label>
            <img src="img/edit.png" class="testimg">
        </div>
    </div>

    <?php include "components/bottom-nav-bar.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <script src="js/widget.js"></script>
</body>

</html>