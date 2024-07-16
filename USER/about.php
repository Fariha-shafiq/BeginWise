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
    <style>
        h2 {
            color: #EF923E;
        }
        .st-section-heading-title span {
            color: black;
        }
        .st-section-heading-subtitle {
            margin-top: 10px;
        }
        .section-padding {
            padding: 60px 0;
        }
        .section-bg {
            background-color: #f9f9f9;
        }
        .icon {
            font-size: 40px;
            color: #EF923E;
            margin-bottom: 20px;
        }
    </style>
    <title>About Us</title>

    <!-- Start About Section -->
    <section class="st-about-wrap section-padding mt-5" id="about">
        <div class="container">
            <div class="st-section-heading st-style1 text-center">
                <h2 class="st-section-heading-title">Our <span>Mission</span></h2>
                <div class="st-section-heading-subtitle">
                    At BeginWise, our mission is to revolutionize the way parents and students navigate the education landscape. We believe that every child deserves access to quality education tailored to their unique needs and aspirations. With this vision in mind, we have developed a comprehensive platform that empowers parents to make informed decisions about their child's education while providing students with the tools and resources they need to succeed academically.
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
    </section>

    <section class="section-padding section-bg" id="who-we-are">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="st-section-heading st-style1">
                        <h2 class="st-section-heading-title"><span>Who</span> We Are?</h2>
                        <div class="st-section-heading-subtitle">
                            BeginWise is a team of passionate educators, developers, and innovators dedicated to reshaping the future of education. With a deep understanding of the challenges faced by parents and students in today's educational environment, we are committed to leveraging technology and data-driven insights to create impactful solutions that make a difference in the lives of families across the globe.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/who-are-we.jpg" alt="Who We Are" class="img-fluid">
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
    </section>

    <section class="section-padding" id="our-approach">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="st-section-heading st-style1">
                        <h2 class="st-section-heading-title">Our <span>Approach</span></h2>
                        <div class="st-section-heading-subtitle">
                            At BeginWise, we believe in the power of personalized learning and informed decision-making. Our platform utilizes cutting-edge machine learning algorithms to provide tailored school recommendations based on user preferences and data analysis. Additionally, we offer a range of resources and tools, including exam preparation materials, educational games, and interview guidance, to support students at every stage of their academic journey.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 text-center">
                    <img src="assets/img/approach.png" alt="Our Approach" class="img-fluid">
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
    </section>

    <section class="section-padding section-bg" id="why-choose-us">
        <div class="container">
            <div class="st-section-heading st-style1 text-center">
                <h2 class="st-section-heading-title"><span>Why</span> Choose Us?</h2>
                <div class="st-section-heading-subtitle">
                    With BeginWise, parents can trust that they are making the best decisions for their child's education. Our platform offers transparency, reliability, and convenience, allowing parents to access comprehensive information about schools and educational resources in one centralized location. Moreover, our commitment to continuous improvement ensures that our platform evolves to meet the changing needs of families and educational institutions alike.
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <i class="fas fa-graduation-cap icon"></i>
                    <h4>Expert Guidance</h4>
                    <p>Access to experienced educators and tailored advice to navigate the educational landscape.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-chart-line icon"></i>
                    <h4>Data-Driven Insights</h4>
                    <p>Utilizing data to provide personalized recommendations and actionable insights.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-hand-holding-heart icon"></i>
                    <h4>Holistic Support</h4>
                    <p>Comprehensive resources to support academic and emotional well-being of students.</p>
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
    </section>
    <!-- End About Section -->

    <?php include('footer.php'); ?>
</body>
</html>
