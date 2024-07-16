<?php include('header.php');
include('connection.php');
?>
    <title>BeginWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/index.css">
<style>
   .accordion-item { --bs-accordion-active-color: #EF923E;
   --bs-accordion-btn-focus-border-color:#EF923E ;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem;
    color:black;
  }
    .accordion-button:not(.collapsed) {
        background-color:#EF923E!important; /* Active color */
        border-color: #EF923E !important;
        
        

    }
    .accordion-button.collapsed{
       
        color:#EF923E !important;
        
        

    }
    .accordion-button:focus {
    z-index: 3;
    border-color: #EF923E var(--bs-accordion-btn-focus-border-color);
    outline: 0;
    box-shadow:white var(--bs-accordion-btn-focus-box-shadow);
  }
    .accordion-button:not(.collapsed) {
    color: black var(--bs-accordion-active-color);
    background-color:#EF923E var(--bs-accordion-active-bg);
    box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
 img {
    margin: 0%;
    
 }
.center-heading {
    
            text-align: center;
        }
.Banner{
    padding: 0%;
}

</style>
<body>
    

    
<img src="assets/img/Preps Banner.png" alt="Description of the image" width="100%" class="img-fluid">
                <h1 class="center-heading">Interview Questions</h1>
   

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
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. What are your expectations from our institution for your child's education and development?
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>ANSWER:</strong>  Outside of school, I plan to support my child's learning by [mention specific activities or resources, such as visiting museums, enrolling in extracurricular classes, encouraging reading, etc.].
            </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    5. Can you share any specific instances where you've seen your child demonstrate leadership or teamwork skills?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>ANSWER:</strong>   I've seen my child demonstrate leadership and teamwork skills during [mention specific instances, such as group projects, sports teams, community service activities, etc.]. They have a natural ability to [describe leadership qualities or teamwork behaviors].

                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        6. How do you plan to support your child's learning outside of school?
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>ANSWER:</strong>  I've seen my child demonstrate leadership and teamwork skills during [mention specific instances, such as group projects, sports teams, community service activities, etc.]. They have a natural ability to [describe leadership qualities or teamwork behaviors].
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. How do you envision your child contributing to our school community?
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>ANSWER:</strong>   I envision my child contributing to the school community by [mention specific ways, such as participating in clubs or organizations, volunteering, mentoring younger students, etc.]. They are eager to make a positive impact and actively engage with their peers and teachers.

                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                               8. What values and principles are important to your family, and how do you instill them in your child?
                            </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>ANSWER:</strong>   In our family, values such as [mention specific values, such as honesty, kindness, perseverance, etc.] are important. We instill these values in our child through [describe how you model and teach these values in everyday life].

                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                   9. How do you handle discipline and behavior management at home?
                                  </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                   <strong>ANSWER:</strong>   We believe in using positive reinforcement, clear communication, and consistent consequences to manage behavior at home. We also encourage open dialogue and problem-solving to address any issues that may arise.

                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        10. Are there any particular extracurricular activities or interests your child is passionate about?
                                    </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>ANSWER:</strong>  My child is passionate about [mention specific extracurricular activities or interests, such as sports, music, art, etc.]. These activities allow them to explore their talents and develop new skills outside of academics.

                                      </div>
                                    </div>

        </div>
      </div>
      </body>
      <?php include('footer.php') ?>
