<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    
    <form action="idCard.php" method = "post" id="form" enctype ="multipart/form-data">
    <h2 style="text-align:center;">Fill up the from and Genaret Id card</h2>
    <div class="row">
        <div class="col-6">
        <label for="">Full Name:</label><br>
        <input class="inputBox" type="text" name="fullName" id="" placeholder="Enter Full Name...">
        <label for="">date of birth:</label><br>
        <input class="inputBox" type="Date" name="DOB" id="" >
        <label for="">Phone Number:</label><br>
        <input class="inputBox" type="text" name="phone" id="" placeholder="Enter Phone Number..">
        <label for="">Blod Group</label>
        <select name="blodGroup" id="">
            
            <option  selected disabled >Select Option</option>

            <option selected disabled >Select</option>
            <option value="o+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            
         </select>
        
        </div>
        <div class="col-6">
        <label for="">Email Address:</label><br>
         <input class="inputBox" type="email" name="email" id="" placeholder="Email here..(example@gmail.com)">
        <label for="">Course:</label><br>
         <select name="course" id="">
            
            <option  selected disabled >Select Option</option>
            <option value="Web Development">Web Development</option>
            <option value="Graphic Design">Graphic Desing</option>
            <option value="Digital Marketion">Digital Marketing</option>
         </select>
         <label for="">Chose Your picture</label>
         <input class="inputBox file" type="file" name="photo" id="">
        </div>
    </div>

    <input class="btn" type="submit" name="submitAll" value="Genaret Card">

    </form>
   
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>