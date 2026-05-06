<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <h1>Login Page</h1>
    </div>

    <div class="container">
        <h3>Login</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label>Email</label>
            <input type="email" name="email">

            <label>Password</label>
            <input type="password" name="password">
            
            <input type="submit" name="submit" value="Login">

            <!-- <div>Don't have an account? <a href="signup.php">Sign Up</a></div> -->

        </form>


        <?php 
            if(isset($_POST['submit'])){
                include "config.php";
                $email=mysqli_real_escape_string($conn, $_POST['email']);
                $password=$_POST['password'];
                // $password=md5($_POST['password']);


                $sql="select userId,email,role from user where email='{$email}' and password='{$password}'";

                // die();
                $result=mysqli_query($conn, $sql) or die("Query Failed");

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION['userId']=$row['userId'];
                        $_SESSION['email']=$row['email'];
                        

                        header("Location: http://localhost/ParshuProjects/02-SchoolManagement_Project/post.php");
                    }
                } else {
                    echo "<div>Email and Password are not matched.</div>";
                }
            }
        ?>
    </div>
</body>
</html>