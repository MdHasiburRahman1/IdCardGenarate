<?php
if(isset($_POST['submitAll'])){
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $DOB =$_POST['DOB'];
    $course =$_POST["course"];
    $bloadGroup = $_POST["blodGroup"]; 

    // img or flle upload system 
    // print_r($_FILES['photo']);
    $img_name = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, 'img/'.$img_name);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <link rel="stylesheet" href="id.css">
    <style>
      
    </style>

</head>
<body>
<div class="id_card">
    <div class="line">
        <h4 class="institute">Kishoreganj Polytechnic Institute</h4>
        <p class="location">Kishoreganj, Dhaka, Bangladesh</p>

        <img class='profile_img' src="img/<?php if(isset($img_name)){
            echo $img_name;
        } ?>" alt="">

        <h4 class = "info" style="margin-top:20px;">Name: <span><?php if(isset ($name)){echo $name;} ?></span> </h4>
        <h4 class = "info">Email: <span class="emailfill"><?php if(isset ($email)){echo $email;} ?></span></h4>
        <h4 class = "info">Phone: <?php if(isset ($phone)){echo $phone;} ?></h4>
        <h4 class = "info">date of Birth: <?php if(isset ($DOB)){echo $DOB;} ?></h4>
        <h4 class = "info">Course: <?php if(isset ($course)){echo $course;} ?></h4>
        <h4 class = "info">Bload Group: <?php if(isset ($bloadGroup)){echo $bloadGroup;} ?></h4>
        <div class="singnature">
            <h5 class="sine">Hasib</h5>
        <h5>Othorized Signature</h5>
        </div>
    </div>
</div>


    
</body>
</html>