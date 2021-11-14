<?php
    include 'dbconnection.php';

    if (isset($_POST['update'])){
        $edit_st_id=$_GET['edit_student'];
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
        $image_query="select * from student_datail where st_id='$edit_st_id' ";
        $run=mysqli_query($conn,$image_query);
        while ($row = mysqli_fetch_assoc($run)){
            $img=$row['photo'];
        }
        unlink('fold_image/' . $img);
    
            if (!$image_type == 'image/jpg' or !$image_type == 'image/png'){
                $size_er="Invaid Type...";
            }
            else if ($image_size<=2000){
                $type_error="Image size should be less than 2mb...";
                echo'<script>alert("Oops! Entered email already exists...")</script>';
            }
            else {
                move_uploaded_file($image_tmp,"fold_image/$image");
                $sql="update student_datail set fname='$fname' , lname='$lname' , dob='$birthdate' , father_name='$fathername' , email='$email' , mobile='$mobile_number' , nationality='$nationality' , pincode='$pincode' , district='$district' , state='$state' , photo='$image' where st_id='$edit_st_id'";
    
                $run=mysqli_query($conn,$sql);
                if ($run){
                    echo "<script>window.open('view_student.php?update_detail_successfully','_self')</script>";
                }
                else {
                    echo "<script>window.open('view_student.php?please_try_again','_self')</script>";
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

    <link rel="stylesheet" href="edit_student_detail.css">

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
            <h1>Edit Student Details</h1>

            <?php
            if (isset($_GET['edit_student'])){

                $edit_st_id=$_GET['edit_student'];
                $query="select * from student_datail where st_id = '$edit_st_id'";
                $run=mysqli_query($conn,$query);

                while ($row = mysqli_fetch_assoc($run)){

            ?>



            <form method="POST" action="" enctype="multipart/form-data">
                <div>
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="Enter the first name..." value="<?php echo $row['fname'] ?>">
                </div>
                <div>
                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter the last name..." value="<?php echo $row['lname'] ?>">
                </div>
                <div>
                    <label for="">Date Of Birst</label>
                    <input type="date" name="birthdate" placeholder="Enter the date of birth..." value="<?php echo $row['dob'] ?>">
                </div>
                <div>
                    <label for="">Father's Name</label>
                    <input type="text" name="fathername" placeholder="Enter the father's name..." value="<?php echo $row['father_name'] ?>">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter the email..." value="<?php echo $row['email'] ?>">
                </div>
                <div>
                    <label for="">Mobile Number</label>
                    <input type="number" name="mobile_number" placeholder="Enter the mobile number..." value="<?php echo $row['mobile'] ?>">
                </div>
                <div>
                    <label for="">Nationality</label>
                    <input type="text" name="nationality" placeholder="Enter the nationality..." value="<?php echo $row['nationality'] ?>">
                </div>
                <div>
                    <label for="">Pin Code</label>
                    <input type="number" name="pincode" placeholder="Enter the pin code..." value="<?php echo $row['pincode'] ?>">
                </div>
                <div>
                    <label for="">District</label>
                    <input type="text" name="district" placeholder="Enter the district..." value="<?php echo $row['district'] ?>">
                </div>
                <div>
                    <label for="">State</label>
                    <input type="text" name="state" placeholder="Enter the state..."
                    value="<?php echo $row['state'] ?>">
                </div>
                <div class="input-group upload-div">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                        <label for="inputGroupFile01" class="custom-file-label">Choose File</label>
                    </div>
                </div>
                <?php }} ?>
                <input type="submit" name="update" value="Update Detail" class="btn btn-success">
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