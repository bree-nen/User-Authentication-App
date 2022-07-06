<?php 
    include 'config.php';

    error_reporting(0);

    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword =md5($_POST['cpassword']);
         
        if($password == $cpassword){
            $spl = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
           if($result){
            echo "Registered Succesfully.";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
           }
           else{
            echo "whoops!! Something went wrong.";
           } 
        }else{
            echo "Password NOT Matched";
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

    <title>Register Form</title>

</head>
<body>
    <div class="container">
        <h2>Register Form</h2>
        
        <form action="" method="POST">
        <p class="login-register-text">Have an account? <a href="index.php">Login Here</a></p>
            <div class="input-box">
                <input type="text" name="username" value="<?php echo $username; ?>" required>
                <span>Username</span>
            </div>
            <div class="input-box">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <span>Email</span>
            </div>
            <div class="input-box">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <span>Password</span>
            </div>
            <div class="input-box">
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                <span>Confirm Password</span>
            </div>
            <div class="input-box">
                <button name="submit" class="btn">Register</button>
            </div>          
        </form>
    </div>
    
</body>
</html>