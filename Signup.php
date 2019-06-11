<?php
/**
 * Created by PhpStorm.
 * User: Ugo
 * Date: 08/04/2019
 * Time: 17:57
 */
//Firstname, Surname, Username, Email, Password
echo <<<_End

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    
<script src="Signup_js_val.js"></script>
<link href="signup_page_design.css" type="text/css" rel="stylesheet"/>

    </head>
    <h1 style="font-size: 50px; border-bottom: 1px solid #999999">
    ExPLORE.
</h1>
    <body>
            <form method="post" action="Signup.php">
                <input type="text" placeholder="First name" name="firstname" required="required" class="input_signup" autocomplete="off"/>
                <input type="text" placeholder="Last Name" name="surname" required="required" class="input_signup" autocomplete="off"/>
                <input type="text" placeholder="Username" name="username" required="required" class="input_signup" autocomplete="off" id="username" onkeydown="check(this.value)"/>
                <input type="password" placeholder="Password" name="password" required="required" class="input_signup" autocomplete="off">
                <input type="email" placeholder="Name@email.com" name="email" required="required" class="input_signup" autocomplete="off">
                <input type="submit" name="Sign Up" class="submit" id="submit_button">
            </form>
</body>
</html>
_End;

if($_POST) {
    require_once 'login.php';

    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = sha1('%%23£a|3nHH' . $_POST['password'] . 'P42^,::t');

    $pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);

    $check = $pdo->query("
select username from signup", 1);

    foreach ($check as $item) {
        if ($username == $item['username']) {

            echo <<<_end
        <script>
        alert("username alreaady in use");
        
        
</script>
_end;
            exit();
        }
    }


            $add = $pdo->query(<<<_end
insert into signup(firstname, surname, username, password, email)
values('$firstname', '$surname', '$username', '$password', '$email')
_end
            );

}
