<?php

session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header("Location: loginForm.php?error=User Name is required");
        exit();
    } else if(empty($pass)) {
        header("Location: loginForm.php?error=Password is required");
        exit();
    } else {
        $conn = mysqli_connect("localhost", "root", "", "contact_db") or die("Connection Failed");

        $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";

        $query = mysqli_query($conn, $sql) or die("Query Failed!");

        if (mysqli_num_rows($query) === 1) {
            $row = mysqli_fetch_assoc($query);
            
            if($row['user_name'] === $uname && $row['password'] === $pass) {
                


                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header("Location: adminPage.php");
                exit();
            }else {
                header("Location: contactForm.php");
                exit();
            }
            
        } else {
            header("Location: loginForm.php?error=Incorrect User Name or Password");
            exit();
        }

    }
} else {
    header("Location: loginForm.php");
    exit();
}

?>