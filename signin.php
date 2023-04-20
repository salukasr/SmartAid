<?php
include 'components/dbconfig.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = sha1($_POST['pass']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $ref = "new_users/";
    $data = $database->getReference($ref)->getSnapshot()->getValue();
    $found = false;

    foreach ($data as $key => $value) {
        if ($value['username'] == $username && $value['password'] == $password) {
            $_SESSION['user_id'] = $key;
            header("location: home.php");
            exit;
        }
    }

    if (!$found) {
        $message[] = "Invalid Email or Password";
    }
}
?>
<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign In Page</title>
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
            width: 200px;
            height: 200px;
            border-radius: 100%;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
        }

        .link1 {
            display: inline-block;
            background: linear-gradient(#0096FF, #00FFFF);
            border-radius: 20px;
            padding: 0 15px;
            height: 45px;
            line-height: 40px;
            border-radius: 25px;
            border: 3px solid #FFF;
            width: 300px;
            font-size: 16px;
        }

        .type3 {
            border-radius: 25px;
            border: 3px solid #609;
            padding: 20px;
            width: 256px;
            height: 15px;
            font-size: 16px;
        }
    </style>
</head>

<body style="text-align:center">
    <div class="container">
        <h1 style="padding: 20px; margin-bottom: 15px;">Sign In to Smart Aid</h1>
        <img src="img/home-image4.jpg" class="homeimg">

        <form method="post">

            <div class="form-group">
                
                <input type="text" class="type3" name="uname" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <input type="password" class="type3" name="pass" placeholder="Password" required>
            </div>

            <input type="submit" name="login" value="Login" class="link1" style="color:white;">

            <label class="form-group" style="font-size:12px; margin-top:25px;">
                Don't have an account?
                <a href="http://localhost/SmartAid/register.php" style="color:#0096FF; font-weight:bold; margin-top:5px; ">Register</a>
            </label>
        </form>
    </div>
</body>

</html>