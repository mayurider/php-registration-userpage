<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        header{
            display: flex;
            justify-content: flex-end;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php"><i class="fa fa-plus-circle" style="font-size:20px;" id="add"></i></a>ADD USER
    </header>
    <section>
    <?php 
    $con = mysqli_connect("localhost","root","","blue_test") or die("connection failed");
    $query = "select * from blue_users join social_detail where blue_users.id = social_detail.blue_test_id";
    $result = mysqli_query($con, $query) or die("query failed");
    if(mysqli_num_rows($result) > 0){
    ?>
        <table border="1">
            <th>Name</th>
            <th>Email</th>
            <th>Hobby</th>
            <th>COUNT SOCIAL DETAIL</th>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                
        ?>
            <tr>
                <td><?php echo $row['f_name']." ".$row['l_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['hobby']; ?></td>
                <td><?php $str = $row['social_name']; $csta = explode(' ',$str,-1); $counts = count($csta);echo  $counts+1; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php }else{echo "<h2>no record found</h2>";} mysqli_close($con);?>
    </section>
    
</body>
</html>