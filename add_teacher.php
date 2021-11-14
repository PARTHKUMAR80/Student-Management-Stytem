<?php
    include 'dbconnection.php';
    if (isset($_POST['add'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $birthdate=mysqli_real_escape_string($conn,$_POST['birthdate']);
    $mobile_number=mysqli_real_escape_string($conn,$_POST['mobile']);
    $district=mysqli_real_escape_string($conn,$_POST['district']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $image=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];

        if (!$image_type == 'image/jpg' or !$image_type == 'image/png'){
            $size_er="Invaid Type...";
        }
        else if ($image_size<=2000){
            $type_error="Image size should be less than 2mb...";
            echo'<script>alert("Oops! Entered email already exists...")</script>';
        }
        else {
            move_uploaded_file($image_tmp,"fold_image1/$image");
            $sql="insert into teacher_detail (fname,lname,dob,mobile,district,state,degree,salary,photo) values ('$fname','$lname','$birthdate','$mobile_number','$district','$state','$degree','$salary','$image')";

            $run=mysqli_query($conn,$sql);
            if ($run){
                echo "<script>alert('Teahcher added successfully...')</script>";
                echo "<script>window.open('view_student.php','_self')</script>";
            }
            else {
                echo "<script>alert('Please try again later...')</script>";
                echo "<script>window.open('view_student.php','_self')</script>";
            }
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="add_teacher.css">

</head>
<body>
    <header>Student Management System</header>
    <div id="open-btn" style="display:none">
        <button onclick="change0()">=></button>
    </div>
    <div class="main-box">
        <div class="sidebar" id="side">
            <div class="btn-div">
                <button onclick="change()">Close</button>
            </div>     
            <div class="sidebar-div"><a href="about_us.php">About Us</a></div>
            <div class="sidebar-div"><a href="gallery.php">Gallery</a></div>
            <div class="sidebar-div"><a href="add_student.php">Add Student</a></div>
            <div class="sidebar-div"><a href="view_student.php">View Student</a></div>
            <div class="sidebar-div"><a href="add_teacher.php">Add Teacher</a></div>
            <div class="sidebar-div"><a href="view_teacher.php">View Teacher</a></div>
            <div class="sidebar-div"><a href="contact_us.php">Contact Us</a></div>
            <div class="sidebar-div"><a href="index.php">Logout</a></div>
        </div>
        <div class="main-box-2">
            <h1>Add Teacher</h1>
            <form method="POST" action="" enctype="multipart/form-data">
                <div>
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="Enter the first name...">
                </div>
                <div>
                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter the last name...">
                </div>
                <div>
                    <label for="">Date Of Birst</label>
                    <input type="date" name="birthdate" placeholder="Enter the date of birth...">
                </div>
                <div>
                    <label for="">Mobile Number</label>
                    <input type="number" name="mobile" placeholder="Enter the mobile number...">
                </div>
                <div>
                    <label for="">District</label>
                    <input type="text" name="district" placeholder="Enter the district...">
                </div>
                <div>
                    <label for="">State</label>
                    <input type="text" name="state" placeholder="Enter the state...">
                </div>
                <div>
                    <label for="">Degree</label>
                    <input type="text" name="degree" placeholder="Enter the degree...">
                </div>
                <div>
                    <label for="">Salary</label>
                    <input type="number" name="salary" placeholder="Enter the salary...">
                </div>
                <div class="input-group upload-div">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                        <label for="inputGroupFile01" class="custom-file-label">Choose File</label>
                    </div>
                </div>
                <input type="submit" name="add" value="Add Teacher" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

<script>
    function change(){
        document.getElementById('side').style.display="none";
        document.getElementById('open-btn').style.display="block";
    }
    function change0(){
        document.getElementById('side').style.display="block";
        document.getElementById('open-btn').style.display="none";
    }
</script>

</html>