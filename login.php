<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:home.php");
}

include("connection.php");
$username = "";
$password = "";
$error = "";

if (isset($_POST['Login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == '' or $password == ''){
        $error .= "<li>please enter your username & password in the boxes below to get started</li>";
    }
    if(empty($error)){
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($connection, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if($r1['password'] != md5($password)){
            $error .= "<li>Wrong password!</li>";
        }
    }
    if(empty($error)){
        $login_id = $r1['login_id'];
        $sql1 = "select * from admin_access where login_id = '$login_id'";
        $q1 = mysqli_query($connection, $sql1);
        while ($r1 = mysqli_fetch_array($q1)){
            $access[] = $r1['access_id']; //baca role admin, guru, siswa
        }
        if(empty($access)){
            $error .= "<li>You don't have an access to admin page!</li>";
        }
    }

    if(empty($error)){
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_access'] = $access;
        header("location:home.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
            if ($error) {
                echo "<ul>$error</ul>";
            }
        ?>
        <form class="form" action="" method="post">
            <input type="text" value="<?php echo $username ?>" name="username" class="input"  placeholder="Username" required><br><br>

            <input type="password" name="password" placeholder="Password" class="input" ><br><br>

            <input type="submit" name="Login" value="Login" class="input button">
        </form>
    </div>
</body>
</html>