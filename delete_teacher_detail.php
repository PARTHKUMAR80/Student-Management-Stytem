<?php
    include 'dbconnection.php';
    if (isset($_GET['delete_teacher'])){
        $delete = $_GET['delete_teacher'];
        $sql = "delete from teacher_detail where sno = '$delete' ";
        $run = mysqli_query($conn,$sql);

        $query = "select * from teacher_detail where sno = '$delete' ";
        $img_del = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($img_del)){
            $image = $row['photo'];
        }
        unlink('fold_image1/' .$image);

        if ($run){
            echo "<script>window.open('view_teacher.php?deleted_successfully','_self')</script>";
        }
        else {
            echo "<script>window.open('view_teacher.php?'please_try_again','_self')</script>";
        }
    }
?>