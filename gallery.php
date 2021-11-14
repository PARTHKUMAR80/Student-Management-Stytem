<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="galleryy.css">

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
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img3.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </div>
    <div class="images-div">
        <h1>Cultral Event</h1>
        <div>
            <img src="https://www.dpsranchi.com/erp/web_assets/pho_gallery/1631685573162058659.jpg" alt="">
            <img src="https://www.dpsranchi.com/erp/web_assets/pho_gallery/1631685573371849726.jpg" alt="">
            <img src="https://www.dpsranchi.com/erp/web_assets/pho_gallery/16316855731291930553.jpg" alt="">
            <img src="https://www.dpsranchi.com/erp/web_assets/pho_gallery/1631685573632163228.jpg" alt="">
        </div>
        <h1>Annual Sports Day</h1>
        <div>
            <img src="https://www.thegaudium.com/wp-content/uploads/2020/01/The_Gaudium_international_School_Hyderabad_Annual_Sports_Day_Senior_2020-5.jpg" alt="">
            <img src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2019/12/16/Pictures/_12cfa742-1ffb-11ea-8c10-7db3e225203f.jpg" alt="">
            <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/12463/2019/8/26/Kendriya%20Vidyalaya-Sports-1.jpg" alt="">
            <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/12463/2019/8/26/Kendriya%20Vidyalaya-Sports-2.jpg" alt="">
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