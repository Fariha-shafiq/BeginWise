<?php include ('header.php');
include('connection.php');
$q="select * from users where ROLE_ID_FK='2'";
$res=mysqli_query($con,$q);

?>
<!-- Start Contact Section -->
<section class="st-shape-wrap" id="contact">
      <!-- <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div> -->
      <!-- <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div> -->
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Child Details</h2>
        
          <div class="st-section-heading-subtitle">Insert Your Child Details by Filling the form</div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div id="st-alert"></div>
            <form action="child_detail_insert.php" class="row st-contact-form st-type1" method="post"  enctype="multipart/form-data">
            <div class="col-lg-6">
            <div class="st-form-field st-style1">
                  <label>Username</label>
                  <input type="hidden" name="parent_id" value="<?php echo $_SESSION['USER_ID'] ?>">
                  <input  name="" value="<?php echo $_SESSION['USER_NAME'] ?>" disable> 
                  
                  </div>
              </div>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Date Of Birth</label>
                  <input type="date" id="date" name="d_o_b" placeholder="Enter D-O-B" required>
                </div>
              </div><!-- .col --> 
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Child Name</label>
                  <input type="text" placeholder="Enter Child Name" required name="c_name">
                </div>
                </div><!-- .col --> 
                <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Grade Level</label>
                  <select placeholder="Enter Grade level" name="g_level">
                  <option></option>
                    <option value="playgroup">Playgroup</option>
                    <option value="nursery">Nursery</option>
                    <option value="Kindergarden">Kindergarden</option>
                    <option value="Grade-1">Grade-1</option>
                    
                  </select>
                </div>
                </div><!-- .col --> 
                <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Gender</label>
                  <select placeholder="Enter Gender" name="gender">
                  <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                </div><!-- .col --> 
               
                <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Child Picture</label>
                  <input type="file"  placeholder="Insert Child's Picture" onChange="readURL(this)" required name="c_image">
                  <img id="proimg"/>
                </div>
                </div><!-- .col --> 
          
              <div class="col-lg-12">
                <div class="text-center">
                  <div class="st-height-b10 st-height-lg-b10"></div>
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" name="btn" style="background-color: #EF923E ;color:white;"> Submit </button>
                </div>
              </div><!-- .col -->
            </form>
          </div><!-- .col -->
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    <!-- End Contact Section -->
  </div>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        $('#date').datepicker({ 
        minDate: today
        });
    </script>
<?php include ('footer.php') ?>