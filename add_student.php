<?php
    include 'dbconnection.php';
    if (isset($_POST['add'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $birthdate=mysqli_real_escape_string($conn,$_POST['birthdate']);
    $fathername=mysqli_real_escape_string($conn,$_POST['fathername']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $mobile_number=mysqli_real_escape_string($conn,$_POST['mobile_number']);
    $nationality=mysqli_real_escape_string($conn,$_POST['nationality']);
    $pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
    $district=mysqli_real_escape_string($conn,$_POST['district']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
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
            move_uploaded_file($image_tmp,"fold_image/$image");
            $sql="insert into student_datail (fname,lname,dob,father_name,email,mobile,nationality,pincode,district,state,photo) values ('$fname','$lname','$birthdate','$fathername','$email','$mobile_number','$nationality','$pincode','$district','$state','$image')";

            $run=mysqli_query($conn,$sql);
            if ($run){
                $success="Student data submitted successfully...";
            }
            else {
                $error="Unable to sumit...";
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

    <link rel="stylesheet" href="add_student.css">

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
            <h1>Add Student</h1>
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
                    <label for="">Father's Name</label>
                    <input type="text" name="fathername" placeholder="Enter the father's name...">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter the email...">
                </div>
                <div>
                    <label for="">Mobile Number</label>
                    <input type="number" name="mobile_number" placeholder="Enter the mobile number...">
                </div>
                <div>
                    <label for="">Nationality</label>
                    <input type="text" name="nationality" placeholder="Enter the nationality...">
                </div>
                <div>
                    <label for="">Pin Code</label>
                    <input type="number" name="pincode" placeholder="Enter the pin code...">
                </div>
                <div>
                    <label for="">District</label>
                    <input type="text" name="district" placeholder="Enter the district...">
                </div>
                <div>
                    <label for="">State</label>
                    <input type="text" name="state" placeholder="Enter the state...">
                </div>
                <div class="input-group upload-div">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                        <label for="inputGroupFile01" class="custom-file-label">Choose File</label>
                    </div>
                </div>
                <input type="submit" name="add" value="Add Student" class="btn btn-success">
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