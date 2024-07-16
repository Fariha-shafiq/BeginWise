<?php 
include('header.php');
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/prephub.css">
    <title>Document</title>
</head>
<body>

<main id="main">
    <div class="container">
        <?php if(isset($_SESSION['USER_IMAGE'])) { ?>
            <div class="row prep">
                <div class="col-lg-4 col-sm-12">
                    <img src="assets/img/interviewprep.png" alt="" class="img">
                </div>
                <div class="col-lg-8 col-sm-12 ">
                    <h2 style="margin-left: 1%;">Interview Preparation</h2> 
                    <p class="prep_para">BeginWise provides a streamlined interview preparation module for parents, offering essential resources such as communication tips, practice questions, and strategies to effectively showcase their child's strengths and interests during school admissions interviews. This module equips parents with the confidence and tools necessary to navigate these crucial interactions with school authorities, increasing their child's chances of securing admission to their preferred schools.</p>
                    <a href="interviewpreps.php" target="_blank" rel="noopener noreferrer"><button class="btn" style="background-color: #EF923E;color: #fff;margin-left: 1%;">Let's Start</button></a>
                </div>
            </div>
         
            <div class="row prep">
                <div class="col-lg-4 col-sm-12"><img src="assets/img/examprep.png" alt="" class="img"></div>
                <div class="col-lg-8 col-sm-12 ">
                    <h2 style="margin-left: 1%;">Admission Test Preparation</h2> 
                    <p class="prep_para">Prepare for your admission test with BeginWise's comprehensive resources. Access practice tests, interactive study materials, and personalized learning plans tailored to your needs. Manage exam stress with our mental wellness resources and connect with peers for support. Get ready to excel with BeginWise.</p>
                    <button class="btn" style="background-color: #EF923E;color: #fff;margin-left: 1%;">Let's Start</button>
                </div>
            </div>
        <?php } else { ?>
            <div class="st-section-heading st-style1">
            <div class="alert alert-warning" role="alert" style="display:flex; justify-content:center;">
                You need to login to view the content.
                <button class="btn btn-warning"><a href="login.php">Login</a></button>
            </div>
        </div>
        <?php } ?>
    </div>
</main>

</body>
<?php include('footer.php'); ?>  
</html>
