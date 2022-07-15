<?php
if(isset($_POST['regbtn'])){
    $filename = $_FILES["uploadimg"]["name"];
    $tempname = $_FILES["uploadimg"]["tmp_name"];
    $folder = "./IMAGES/" .$filename; 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobbies'];
    $hob = implode(",",$hobby);
    $f = implode(" ",$_POST['field_name']);
    $f1 = implode(" ",$_POST['field_name1']);


    $con = mysqli_connect("localhost","root","","blue_test") or die("connection failed");
    $query = "insert into blue_users(f_name,l_name,email,profile_pic,hobby,gender) values ('{$fname}','{$lname}','{$email}','{$filename}','{$hob}','{$gender}')";
    $result = mysqli_query($con, $query) or die("query unsuccessful");


 

    $q2 = "insert into social_detail(blue_test_id,social_name,social_link) values(last_insert_id(),'{$f}','{$f1}')";
    mysqli_query($con, $q2);
        if(move_uploaded_file($tempname, $folder)){
            echo "image uploaded successfully"; 
            header("Location: users.php");
            mysqli_close($con);
        }
        else{
             echo "failed to upload image";
            }





}else{
    header('Location: index.php');
}
?>