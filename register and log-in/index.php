<?php 
    include'config.php';

   session_start();

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($result→num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");
          } else{
            echo "<script>alert('Email or Password is wrong.')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>LOG-IN PAGE</title>

</head>
<body>
    <div class="container">
        <h2>LOG-IN</h2>
        
        <form action="" method="POST" >
        <p class="login-register-text"> Don't have an account? <a href="register.php">Register Here</a></p>
        
            <div class="input-box">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <span>Email</span>
            </div>
            <div class="input-box">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <span>Password</span>
            </div>
            <div class="input-box">
                <button name="submit" class="btn" >LogIn</button>
            </div>          
        </form>
    </div>
    
</body>
</html>