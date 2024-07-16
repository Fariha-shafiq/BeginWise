<?php include('header.php');
include('connection.php');
?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/index.css">
 <div class="st-hero st-style1" style="background:url(assets/img/banner.svg); background-size:cover ">
            <div class="container textcont">
                <div class="st-hero-text">
                    <div class="st-height-b40 st-height-lg-b40"></div>
                    <h4 class="st-hero-title cd-headline slide" style="font-weight: bold;">
                        <span style="color: #EF923E; font-weight: bold;">YOUR</span> FIRST STEP <br> TOWARDS <br><span style="color: #EF923E;"> BRILLIANCE</span>
                    </h4>
                    <div class="st-hero-btn">
                        <button class="st-btn st-style1 st-color1" style="background-color: #EF923E ;color:white;"><a href="schoolfinder.php" style="color:white;">Find Schools</a></button>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- End Hero Section -->

    <div class="container" >
        <div class="st-section-heading st-style1">
            <h1 class="st-section-heading-title"><span style="color: #EF923E; font-weight: bold;">Our</span> Services</h1>
        </div>
    <section id="services">
        <!-- Flip Card -->
        <div class="flip-card-container">
            <div class="flip-card-wrapper">
                <div class="flip-card">
                    <h2>School Recommendations</h2>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/recommendation.png" alt="Front 1">
                        </div>
                        <div class="flip-card-back">
                            <p>Discover the perfect school effortlessly with BeginWise's School Recommendation System. Personalized recommendations tailored to your preferences make the decision-making process simple and stress-free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card-wrapper">
                <div class="flip-card">
                    <h2>Admission Test Preparation</h2>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/examprep.png" alt="Front 2">
                        </div>
                        <div class="flip-card-back">
                            <p>Ace admission exams with BeginWise's tailored study materials and practice exams. Equip your child with the tools they need for success and confidence on test day.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card-wrapper">
                <div class="flip-card">
                    <h2>Parental Interview Support</h2>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/interviewprep.png" alt="Front 3">
                        </div>
                        <div class="flip-card-back">
                            <p>Prepare yourself for school interviews with BeginWise's expert guidance and resources. Boost confidence and increase chances of admission with tailored support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- FAQ Section -->
<section class="st-faq-wrap st-shape-wrap" id="faq">
   
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="st-vertical-middle">
                    <div class="st-vertical-middle-in">
                        <div class="st-faq-img">
                            <img src="assets/img/faq.jpg" alt="Faq Image" width=100% style="z-index:-15">
                        </div>
                    </div>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>
            </div>
            <div class="col-lg-6">
                <h2 class="st-accordian-heading">Frequently Asked Questions</h2>
                <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1. Can you tell us about your child's strengths and weaknesses?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>ANSWER:</strong>  My child demonstrates strengths in [specific areas such as problem-solving, creativity, communication, etc.]. However, like any individual, they also have areas where they may need additional support or improvement, such as [mention specific weaknesses].
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. What do you think sets your child apart from others?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>ANSWER:</strong> What sets my child apart is their [unique qualities, talents, or interests]. They excel in [mention specific activities or subjects], and their passion and dedication make them stand out among their peers.

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. How does your child handle challenges or setbacks?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>ANSWER:</strong>  My child approaches challenges and setbacks with resilience and determination. They view obstacles as opportunities for growth, and they're not afraid to seek help or try different strategies until they find a solution.
            </div>
          </div>
        </div>
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
</section>
<!-- End FAQ Section -->

<?php include('footer.php') ?>
