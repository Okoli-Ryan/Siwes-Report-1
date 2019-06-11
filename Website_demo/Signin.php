<?php
/**
 * Created by PhpStorm.
 * User: Ugo
 * Date: 08/04/2019
 * Time: 18:49
 */
echo <<<_End
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="signin_page_design.css"/>
</head>
<h1 style="font-size: 50px; color: #999999; border-bottom: 1px solid #999999">
    ExPLORE.
</h1>
<body>

<div class="all">
    
    <h1 class="login_title">
        Login
    </h1>
    <form method="post" action="Signin.php">
    <div class="input">
        <input type="text" placeholder="Username" name="username" class="in" autocomplete="off"/>
    </div>

    <div class="input">
        <input type="password" placeholder="Password" name="password" class="in" autocomplete="off"/>
    </div>

        <input type="submit" class="signin" name="Sign in"/>
    <a href="Signup.php" class="forgot" style="display: none; color:#839bcb">New User? Sign up</a>
    </form>

</div>
    
</body>
</html>

_End;

if ($_POST){
    require_once 'login.php';
    $pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
    $username = $_POST['username'];
    $password = sha1('%%23£a|3nHH' . $_POST['password'] . 'P42^,::t');
    $check = $pdo->query("select * from signup where username = '$username'", 1);
    $check_user = $check->fetch(1);

    if ($check_user['password'] != $password){
        echo <<<_end
            <script>
                alert("incorrect password or username");
                var forget = document.getElementsByClassName("forgot");
                forget[0].style.display = "block";
                </script>
_end;

    }
    else
    {
        echo <<<_end
            <script>
                alert("Granted Access");
                </script>
_end;
    }

}
