<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "contact_db"); 
            $query = "SELECT * FROM msg_tbl";
            
            
            echo '<table border="0" cellspacing="10" cellpadding="5"> 
                  <tr> 
                      <td> <font face="Arial", color="#ff5722">First Name</font> </td> 
                      <td> <font face="Arial", color="#ff5722">Last Name</font> </td> 
                      <td> <font face="Arial", color="#ff5722">Email</font> </td> 
                      <td> <font face="Arial", color="#ff5722">Subject</font> </td> 
                      <td> <font face="Arial", color="#ff5722">Message</font> </td> 
                  </tr>';
            
            if ($result = $conn->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $firstName = $row["First_name"];
                    $lastName = $row["Last_name"];
                    $email = $row["Email"];
                    $subject = $row["Subject"];
                    $message = $row["Message"]; 
            
                    echo '<tr> 
                              <td><font face="Arial", color="#fff">'.$firstName.'</td> 
                              <td><font face="Arial", color="#fff">'.$lastName.'</td> 
                              <td><font face="Arial", color="#fff">'.$email.'</td> 
                              <td><font face="Arial", color="#fff">'.$subject.'</td> 
                              <td><font face="Arial", color="#fff">'.$message.'</td> 
                          </tr>';
                }
                $result->free();
            } 
        ?>

        <a href="contactForm.php" style="background: #ff5722;
        border: transparent;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        padding: 5px;
        margin-top: 20px;
        text-transform: uppercase;
        border-radius: 5px;
        text-decoration:none;
        ">Logout</a>
</body>
</html>

<?php 
} else{
        header("Location: loginForm.php");
        exit();
    }
?>