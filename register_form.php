<style>
    body {
    background: #FFEAE3; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

.form-container {
    background: #FFB1B1;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.form-container form h3 {
    color: #FFFFFF;
    margin-bottom: 20px;
    font-size: 24px;
}

.form-container form input,
.form-container form select {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background: #FFCBCB;
    color: #000000;
    font-size: 16px;
}

.form-container form input::placeholder {
    color: #000000;
}

.form-container form .form-btn {
    background: #FFCBCB;
    color: #000000;
    border: none;
    border-radius: 5px;
    padding: 15px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 20px;
}

.form-container form .form-btn:hover {
    background: #FF8E8F;
}

.form-container form p {
    color: #FFFFFF;
    margin-top: 20px;
}

.form-container form p a {
    color: #7289DA;
    text-decoration: none;
}

.form-container form p a:hover {
    text-decoration: underline;
}

.form-container form .error-msg {
    margin: 10px 0;
    display: block;
    background: #FF5252;
    color: #FFFFFF; 
    border-radius: 5px;
    padding: 10px;
    font-size: 14px;
}
</style>
<?php

@include 'config.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$user_type = $_POST['user_type'];

$select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($mysqli, $select);

if(mysqli_num_rows($result) > 0){

    $error[]= 'user already exist';

}else{

    if($pass != $cpass){
        $error[] = 'password not matched';
    }else{
        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
        mysqli_query($mysqli, $insert);
        header('location:login_form.php');
    }
}

};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>register form</title>

        
    </head>
<body>
        <div class="form-container">

            <form action="" method="post">
                <h3>register now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
                
                ?>
                <input type="text" name="name" required placeholder="enter your name">
                <input type="email" name="email" required placeholder="enter your email">
                <input type="password" name="password" required placeholder="enter your password">
                <input type="password" name="cpassword" required placeholder="confirm your password">
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input type="submit" name="submit" value="register now" class="form-btn">
                 <p>already have an account?<a href="login_form.php">login now</a></p>
            </form>
        </div>
</body>