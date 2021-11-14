<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="main_page.css">

</head>
<body>
    <header>Student Management System</header>
    <div id="open-btn" style="display:none">
        <button onclick="change0()">=></button>
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully Logged In!!!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="main-box">
        <div class="sidebar" id="side">
            <div class="btn-div">
                <button onclick="change()">Close</button>
            </div>     
            <div class="sidebar-div"><a href="add_student.php">Add Student</a></div>
            <div class="sidebar-div"><a href="view_student.php">View Student</a></div>
            <div class="sidebar-div"><a href="edit_student_detail.php">Edit Student</a></div>
            <div class="sidebar-div"><a href="add_teacher.php">Add Teacher</a></div>
            <div class="sidebar-div"><a href="view_teacher.php">View Teacher</a></div>
            <div class="sidebar-div"><a href="contact_us.php">Contact us</a></div>
            <div class="sidebar-div"><a href="index.php">Logout</a></div>
        </div>
        <div class="main-box-2">
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="about_us.php">About Us</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="gallery.php">Gallery</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="add_student.php">Add Student</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="view_student.php">View Student</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="add_teacher.php">Add Teacher</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="view_teacher.php">View Teacher</a></h1>
            </div>
            <div class="containerr">
                <div><img src="student.jpg" alt=""></div>
                <h1><a href="edit_teacher_detail.php">Contact Us</a></h1>
            </div>
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