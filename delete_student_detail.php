<?php
    include 'dbconnection.php';
    if (isset($_GET['delete_student'])){
        $delete = $_GET['delete_student'];
        $sql = "delete from student_datail where st_id = '$delete' ";
        $run = mysqli_query($conn,$sql);

        $query = "select * from student_datail where st_id = '$delete' ";
        $img_del = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($img_del)){
            $image = $row['photo'];
        }
        unlink('fold_image/' .$image);

        if ($run){
            echo "<script>window.open('view_student.php?deleted_successfully','_self')</script>";
        }
        else {
            echo "<script>window.open('view_student.php?'please_try_again','_self')</script>";
        }
    }
?>