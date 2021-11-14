<?php
    include 'dbconnection.php';
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

    <link rel="stylesheet" href="view_student.css">

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
            <div class="sidebar-div"><a href="contact.php">Contact Us</a></div>
            <div class="sidebar-div"><a href="index.php">Logout</a></div>
        </div>
        <div class="main-box-2">
            <h1>View Student Detail</h1>
            <table>
                <thead>
                    <tr>
                        <th>S No.</td>
                        <th>First Name</td>
                        <th>Last Name</td>
                        <th>D.O.B</td>
                        <th>Father Name</td>
                        <th>Email</td>
                        <th>Mobile</td>
                        <th>Nationality</td>
                        <th>Pincode</td>
                        <th>District</td>
                        <th>State</td>
                        <th>Photo</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <?php
                    $sql = "select * from student_datail";
                    $run = mysqli_query($conn,$sql);
                    $sno=1;
                    while ($row = mysqli_fetch_assoc($run)){

                ?>

                <tbody>
                    <tr>
                        <td><?php echo $sno++; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['father_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['nationality']; ?></td>
                        <td><?php echo $row['pincode']; ?></td>
                        <td><?php echo $row['district']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td>
                            <a href="fold_image/<?php echo $row['photo']; ?>">
                            <img src="fold_image/<?php echo $row['photo']; ?>" alt="" width="60" height="60"></a>
                        </td>
                        <td>
                            <a class="edit-name" href="edit_student_detail.php?edit_student=<?php echo $row['st_id'] ?>">Edit | </a>
                            <a class="edit-name" href="delete_student_detail.php?delete_student=<?php echo $row['st_id'] ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
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