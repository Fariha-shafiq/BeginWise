<?php 
include('header.php');
include('connection.php');

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/prephub.css">
    <title>Document</title>


<main id="main">
    <div class="container">
        <?php if(isset($_SESSION['USER_IMAGE'])) { ?>
            <div class="row prep">
                
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
