<?php
include('connection.php');
if(isset($_POST['btn'])){
$parent_id=$_POST['parent_id'];
$dob=$_POST['d_o_b'];
$child_name=$_POST['c_name'];
$Grade_level=$_POST['g_level'];
$gender=$_POST['gender'];

 
$child_img_name=$_FILES['c_image']['name'];
$child_img_tname=$_FILES['c_image']['tmp_name'];
$child_img_size=$_FILES['c_image']['size'];
$child_img_type=$_FILES['c_image']['type'];
$folder='mypictures/childs/';
$path=$folder.$child_img_name;
move_uploaded_file($child_img_tname,$path);

if($child_img_type=='image/png' || $child_img_type=='image/jpg' || $child_img_type=='image/jpeg')
{
    if($child_img_size<=10000000){
        $q="INSERT INTO `child_details`(`PARENT_ID_FK`, `D_O_B`, `CHILD_NAME`, `GRADE_LEVEL`, `GENDER`, `CHILD_PICTURE`) VALUES  ('$parent_id','$dob','$child_name','$Grade_level','$gender','$path')";
        $res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Child Registered');window.location.href='child_detail_show.php'</script>";
    echo "<script>alert('Inserted');;window.location.href='child_detail_show.php</script>";
}
else{
    echo mysqli_error($con);
}
    }

    else{
        echo "<script>alert('size error');</script>";
    }
}
else{
    echo "<script>alert('format error');</script>";
}

}
?>