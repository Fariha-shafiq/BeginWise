<?php 
include('header.php'); 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #EF923E;
        }
     
        .st-section-heading-title span {
            color: black;
        }
        .st-section-heading-subtitle {
            margin-top: 10px;
            font-size: 1rem;
        }
        .section-padding {
            padding: 60px 0;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #EF923E;
        }
        .form-control {
            background-color: white;
        }
        .btn-custom {
            background-color: #EF923E;
            color: white;
        }
        .btn-custom:hover {
            background-color: #d87e1e;
            color: white;
        }
        .error {
            color: red;
            font-size: 0.875rem;
        }
        .icon {
            font-size: 1.25rem;
            color: #EF923E;
            margin-right: 10px;
        }
        .form-label {
            font-weight: bold;
        }
        .input-group-text {
            background-color: #EF923E;
            color: white;
        }
    
    </style>
    <title>Sign Up</title>
</head>
<body>

    <section id="signup" class="st-shape-wrap st-white-bg section-padding mt-5" >
        <div class="container ">
            <div class="st-section-heading st-style1 text-center">
                <h2 class="st-section-heading-title">Sign Up</h2>
                <p class="st-section-heading-subtitle">Join us and get access to the best educational resources and personalized recommendations for your academic journey.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form method="POST" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div id="st-alert1"></div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fas fa-user icon"></i>Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username" required onblur="validateuname()">
                            <div id="nameError" class="error"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><i class="fas fa-lock icon"></i>Password</label>
                            <input type="password" class="form-control" name="pswd" id="password" placeholder="Enter Password" required onblur="validatepass()">
                            <div id="passwordError" class="error"></div>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label"><i class="fas fa-phone icon"></i>Contact</label>
                            <input type="text" class="form-control" name="con" id="contact" placeholder="Enter Contact No" required onblur="validatephone()">
                            <div id="contactError" class="error"></div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><i class="fas fa-image icon"></i>Image</label>
                            <input type="file" class="form-control" name="imng" id="image" required>
                            <div id="imageError" class="error"></div>
                        </div>
                        <button class="btn btn-custom w-100" type="submit" name="btn">Sign Up</button>
                    </form>

                    <script>
                        function validateuname() {
                            var name = document.getElementById('name').value;
                            var nameError = document.getElementById('nameError');
                            nameError.innerHTML = "";
                            var usernameRegex = /^[a-zA-Z0-9_\s\.]{3,20}$/;
                            if (!usernameRegex.test(name)) {
                                nameError.innerHTML = "Please enter a valid username (3-20 characters, alphanumeric only).";
                                return false;
                            }
                            return true;
                        }

                        function validatepass() {
                            var password = document.getElementById('password').value;
                            var passwordError = document.getElementById('passwordError');
                            passwordError.innerHTML = "";
                            var strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                            if (!strongPasswordRegex.test(password)) {
                                passwordError.innerHTML = "Please enter a strong password (minimum 8 characters, with at least one uppercase letter, one lowercase letter, one digit, and one special character).";
                                return false;
                            }
                            return true;
                        }

                        function validatephone() {
                            var contact = document.getElementById('contact').value;
                            var contactError = document.getElementById('contactError');
                            contactError.innerHTML = "";
                            var pakistaniPhoneNumberRegex = /^(?:\+92|0)?\d{10}$/;
                            if (!pakistaniPhoneNumberRegex.test(contact)) {
                                contactError.innerHTML = "Please enter a valid Pakistani phone number (e.g., +923001234567 OR 03001234567).";
                                return false;
                            }
                            return true;
                        }

                        function validateForm() {
                            var nameValid = validateuname();
                            var passwordValid = validatepass();
                            var contactValid = validatephone();
                            var imageValid = document.getElementById('image').value !== "";

                            if (!imageValid) {
                                document.getElementById('imageError').innerHTML = "Please select an image.";
                            }

                            return nameValid && passwordValid && contactValid && imageValid;
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
    include('footer.php');
    if (isset($_POST['btn'])) {
        $user_name = $_POST['name'];
        $user_password = password_hash($_POST['pswd'], PASSWORD_DEFAULT);
        $user_contact = $_POST['con'];
        $user_img_name = $_FILES['imng']['name'];
        $user_img_tname = $_FILES['imng']['tmp_name'];
        $user_img_size = $_FILES['imng']['size'];
        $user_img_type = $_FILES['imng']['type'];
        $folder = 'mypictures/users/';
        $path = $folder . $user_img_name;
        move_uploaded_file($user_img_tname, $path);

        if ($user_img_type == 'image/png' || $user_img_type == 'image/jpg' || $user_img_type == 'image/jpeg') {
            if ($user_img_size <= 10000000) {
                $q = "INSERT INTO `users`(`ROLE_ID_FK`, `USERNAME`, `PASSWORD`, `CONTACT`, `USER_IMAGE`) VALUES (2, '$user_name', '$user_password', '$user_contact', '$path')";
                $res = mysqli_query($con, $q);
                if ($res) {
                    echo "<script>alert('Registered Successfully'); window.location.href='login.php';</script>";
                } else {
                    echo mysqli_error($con);
                }
            } else {
                echo "<script>alert('size error'); window.location.href='signup.php';</script>";
            }
        } else {
            echo "<script>alert('format error'); window.location.href='signup.php';</script>";
        }
    }
    ?>
</body>
</html>
