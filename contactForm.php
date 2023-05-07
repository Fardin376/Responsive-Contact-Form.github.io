<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contclass=>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-us">
            <form action="saveData.php" method="post">
                <input type="text" name="fname" id="" class="form-control" placeholder="First Name"> <br>
                <input type="text" name="lname" id="" class="form-control" placeholder="Last Name"> <br>
                <input type="email" name="email" id="" class="form-control" placeholder="Email"> <br>
                <input type="text" name="subject" id="" class="form-control" placeholder="Subject"> <br>
                <input type="text" name="message" id="" class="form-control" placeholder="Write Message"> <br>
                <input type="submit" name="" id="" class="form-control submit" value="submit"> <br>
                <a href="loginForm.php" class="submit" style="text-decoration: none; padding: 5px; height: auto; margin:2%; float:right;">login</a>
                <a href="contactForm.php" class="submit" style="text-decoration: none; padding: 5px; height: auto; margin:2%; float:right;">register</a>
            </form>
        </div>
    </div>
</body>
</html>