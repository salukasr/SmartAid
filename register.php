<?php
include 'components/dbconfig.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['register'])) {
    $username = $_POST['uname']; // fields
    $email = $_POST['mail'];
    $mobile = $_POST['cno'];
    $password = sha1($_POST['pass']);

    $newPost = $database
        ->getReference('new_users')
        ->push([
            'username' => $username,
            'mail' => $email,
            'mobileno' => $mobile,
            'password' => $password
        ]);

    $pushId = $newPost->getKey();

    if ($pushId) {
        header('Location: patient.php?id=' . $pushId);
        exit;
    } else {
        echo 'Error adding data to Firebase database.';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register page</title>
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

        .type3 {
            border-radius: 25px;
            border: 3px solid #609;
            padding: 20px;
            width: 250px;
            height: 15px;
            font-size: 16px;
        }
    </style>
</head>

<body style="text-align:center">
    <div class="container">
        <h1 style="padding: 20px; margin-bottom: 15px;">Register to Smart Aid</h1>

        <form method="POST">

            <div class="form-group">
                <input type="text" class="type3" name="uname" placeholder="User name" required>
            </div>
            <div class="form-group">
                <input type="email" class="type3" name="mail" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <input type="text" class="type3" name="cno" placeholder="Contact Number " required>
            </div>
            <div class="form-group">
                <input type="password" class="type3" name="pass" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" class="type3" name="cpass" placeholder="Confirm Password" required>
            </div>
            <input type="submit" class="btn" name="register" value="Submit">
        </form>
    </div>

    <!--?php include "components/bottom-nav-bar.php"; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script-->
</body>

</html>