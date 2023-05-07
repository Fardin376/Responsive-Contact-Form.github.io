<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="loginForm">
            <form action="loginSession.php" method="post">
                <h2>Login</h2>
                <?php if(isset($_GET['error'])) {
                    ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php
                } ?>
                <label>User Name</label>
                <input type="text" name="uname" id="" class="form-control" placeholder="User Name">

                <label>Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="Password">

                <button type="submit" class="form-control submit"><a href="adminPage.php" style="text-decoration: none; padding: 5px; color:#fff;">Login</a></button>
                <button type="submit" class="form-control submit"><a href="contactForm.php" style="text-decoration: none; padding: 5px; color:#fff;">Go Back</a></button>
            </form>
        </div>
    </div>
</body>
</html>