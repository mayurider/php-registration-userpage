<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mayuri der practice test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="loginfombox">
        <div class="heading">
            <h3>FILL THE FORM</h3>
        </div>
        <form action="insert.php" method="post" class="input_groups" enctype="multipart/form-data">
            <div class="addrfld"> 
             <p>First Name</p>
            <input type="text" placeholder="enter your first name" name="fname" class="input_field">
            </div> 
            <div class="addrfld">
            <p>Last Name</p>
            <input type="text" placeholder="enter your last name" name="lname" class="input_field">
            </div>
            <div class="addrfld">
            <p>Email</p>
            <input type="text" placeholder="enter your email" name="email" class="input_field">
            </div>
            <div class="addrfld">
            <p>Profile Picture</p>
            <input type="file" name="uploadimg" class="input_field">
            </div>
            <div class="addrfld">
            <p>Hobby</p>
            <select name="hobbies[]" multiple>
                <option value="Reading">Reading</option>
                <option value="Watching Tv">Watching TV</option>
                <option value="Playing">Playing</option>
                <option value="Swimming">Swimming</option>
                <option value="Walking">Walking</option>
                <option value="Driving">Driving</option>              
            </select>
            </div>
            <div class="addrfld">
            <p>Gender</p>
            <p><input type="radio" name="gender" value="Female">
            Female</p>
            <p><input type="radio" name="gender" value="Male">
            Male</p>
            </div>
            <div class="addrfld">
            <p>Social Details</p>
            <ul id="dynamic_field" style="list-style-type:none;">
            <li><input type="text" name="field_name[]" value="" placeholder="Give Social Name" class="input_field">
            <input type="text" name="field_name1[]" value="" placeholder="Give Social Link" class="input_field">
            <a href="javascript:void(0);" class="add_button" onclick="additemfn()" title="add field"><i class="fa fa-plus-circle" style="font-size:20px;" id="add"></i></a></li>
            </ul>
            </div>
            <button type="submit" name="regbtn">REGISTER</button>
        </form>

       
    </div>
<script src="JS/index.js"></script>

    
</body>
</html>