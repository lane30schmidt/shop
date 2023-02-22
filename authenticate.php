<?php session_start();

$hashed_pwd = '$2y$10$BMcKSABQyyciPbUWl.pE9.6zv1tbk.O0QXlX/NMLxWt7vLxOCx/h.';

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$my_hash = password_hash($pwd, PASSWORD_DEFAULT);

echo password_verify($pwd, $hashed_pwd);

//if (password_verify($pwd, $hashed_pwd) == 1){}

// TODO: PHP Form Validation (see the example under Validate Form Data With PHP)

?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.

        <a href="index.php">Homepage</a>
    </body>
</html>
