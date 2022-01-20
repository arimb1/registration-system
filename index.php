<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">Username</label>
        <input type="text" name="uname" placeholder="Insert Username"><br>

        <label for="">Passsword</label>
        <input type="password" name="pass" placeholder="Insert Password"><br>

        <button type="submit">Login</button>
        <a href="signup.php" class="new">Create an account</a>
    </form>
</body>
</html>