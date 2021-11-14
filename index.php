<!-- Registration Form  -->
<?php
    include 'dbconnection.php';
    if (isset($_POST['submit'])){
        $full_name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['cpassword'];

        $pass = password_hash($password,PASSWORD_BCRYPT);
        $cpass = password_hash($confirm_password,PASSWORD_BCRYPT);

        $query = "select * from register where email = '$email' ";
        $run = mysqli_query($conn,$query);
        $row = mysqli_num_rows($run);
        if ($row>0){
            echo'<script>alert("Oops! Entered email already exists...")</script>';
        }
        else  if ($password!==$confirm_password){
            echo'<script>alert("Password and confirm password should be same...")</script>';
        }
        else {
            $sql = "insert into register (full_name,email,password,confirm_password) values ('$full_name','$email','$pass','$cpass')";
            $run = mysqli_query($conn,$sql);
            if ($run){
                echo'<script>alert("Student Registered Successfully!!!")</script>';
            }
            else {
                echo'<script>alert("Unable to register the student...")</script>';
            }
        }
    }
?>

<!-- Login Form -->
<?php
    if (isset($_POST['submit1'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from register where email = '$email'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);

        $password_fetch=$row['password'];
        $pass_verify=password_verify($password,$password_fetch);
        if ($pass_verify){
            echo "<script>window.open('main_page.php?success=LoggedInSUccessfully','_self')</script>";
        }
        else {
            echo "<script>window.open('index.php?error=Username or password is incorrect...','_self')</script>";
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Student Management System</header>
    <div class="main-div">
        <div class="main-div-1">
            <h1>Login Page</h1>
            <div>
                <button id="btn-1" onclick="change1()">Register</button>
                <button id="btn-2" onclick="change2()">Login</button>
            </div>
        </div>
        <div class="main-div-2">
            <div id="form-1">
                <form method="post" action="">
                    <div>
                        <label for="">Full Name</label>
                        <input class="input-field" type="text" name="name" placeholder="enter your name..." required="required">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input class="input-field" type="email" name="email"     placeholder="enter your email..." required="required">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input class="input-field" type="password" name="password"     placeholder="enter your password..." required="required">
                    </div>
                    <div>
                        <label for="">Confirm Password</label>
                        <input class="input-field" type="password" name="cpassword"     placeholder="confirm your password...">
                    </div>
                    <input type="submit" name="submit" value="Register" class="register-btn">
                </form>
            </div>
            <div id="form-2" style="display:none;">
                <form method="post" action="">
                    <div>
                        <label for="">Email</label>
                        <input class="input-field" type="email" name="email"     placeholder="enter your email" required="required">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input class="input-field" type="password" name="password"     placeholder="enter your password..." required="required">
                    </div>
                    <input type="submit" name="submit1" value="Login" class="login-btn">
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function change1(){
        document.getElementById('form-1').style.display="block";
        document.getElementById('form-2').style.display="none";
    }
    function change2(){
        document.getElementById('form-1').style.display="none";
        document.getElementById('form-2').style.display="block";
    }
</script>
</html>