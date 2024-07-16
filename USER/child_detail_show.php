<?php
include ('header.php');
include('connection.php');
$ID= $_SESSION['USER_ID'];
$query="SELECT * FROM `child_details` WHERE  `PARENT_ID_FK` = '$ID'";
$res=mysqli_query($con,$query);?>
<div class="st-content">
    <!-- Start Doctors Profile -->
    <section class="st-shape-wrap">
      
      <div class="st-height-b120 st-height-lg-b80"></div>
      <?php while($data=mysqli_fetch_assoc($res)) { ?>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-3">
            <div class="st-doctors-info-left">
              <div class="st-member st-style1 st-zoom">
                <div class="st-member-img">
                  <img src="<?php echo $data['CHILD_PICTURE'] ?>" alt="" class="st-zoom-in">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9">
            <div class="st-height-b25 st-height-lg-b25"></div>
            <div class="st-doctors-info-right">
              <div class="st-height-b20 st-height-lg-b20"></div>
              <ul class="st-doctors-special st-mp0">
                <li><b style="color: #EF923E ;">Child Name :</b><span><?php echo $data['CHILD_NAME'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
              <li><b style="color: #EF923E ;">Date of Birth :</b><span><?php echo $data['D_O_B'] ?></span></li>
             </ul>
             <ul class="st-doctors-special st-mp0">
             <li><b style="color: #EF923E ;">Gender :</b><span><?php echo $data['GENDER'] ?></span></li>
      </ul>
      <ul class="st-doctors-special st-mp0">
      <li><b style="color: #EF923E ;">Grade level :</b><span><?php echo $data['GRADE_LEVEL'] ?></span></li>
      
    </ul>
    <a href="admission_test.php" class="btn" style="background-color:#EF923E ; color:#fff">Open</a>
    

    
              <div class="st-height-b30 st-height-lg-b30"></div>
              <!-- .st-tabs -->
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
</div>
<?php include ('footer.php')?>

                
                
                
                