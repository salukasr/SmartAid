<?php

include 'components/dbconfig.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['logout'])) {
    session_destroy();

    header('Location: login.php');
    exit;
}


if (isset($_POST['update'])) {
    $username = $_POST['uname'];
    $number = $_POST['cno'];
    $email = $_POST['mail'];

    $userRef = $database->getReference('users/' . $user_id);

    $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $prev_pass = $_POST['prev_pass'];
    $old_pass = sha1($_POST['old_pass']);
    $new_pass = sha1($_POST['new_pass']);
    $confirm_pass = sha1($_POST['confirm_pass']);

    $userSnapshot = $userRef->getSnapshot();
    $userData = $userSnapshot->getValue();
    $existing_pass = $userData['password'];

    if ($old_pass == $empty_pass) {
        $message[] = 'please enter old password!';
    } elseif ($old_pass != $existing_pass) {
        $message[] = 'old password not matched!';
    } else {
        $userRef->update(['name' => $username]);
        $userRef->update(['phone' => $number]);
        $userRef->update(['email' => $email]);
    }


    if ($new_pass != $confirm_pass) {
        $message[] = 'confirm password not matched!';
    } else {
        if ($new_pass != $empty_pass) {
            $userRef->update(['password' => $confirm_pass]);
            $message[] = 'password updated successfully!';
        } else {
            $message[] = 'please enter a new password!';
        }
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
