<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name"><br>

        <label for="">Username</label>
        <input type="text" name="uname" placeholder="Username"><br>

        <label for="">Password</label>
        <input type="password" name="pass" placeholder="Password"><br>

        <label for="">Confirm Password</label>
        <input type="password" name="re_pass" placeholder="Confirm Password"><br>


        <button type="submit">SignUp</button>
        <a href="index.php" class="ca">Already have an account?</a>
    </form>
</body>
</html>