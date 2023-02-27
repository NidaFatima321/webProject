<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #Jobsoffered>div{
            display:flex;
            background-Color:salmon;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitmentsystem");




    $qs=mysqli_query($conn,"SELECT * FROM appplicantoffered where applicantId='$id'");
    while($rows=mysqli_fetch_assoc($qs)){
    ?>

<div id="Jobsoffered">
        <div id="num">
              <h3>Job Id: </h3><?php echo $rows['jobId']?>
            </div>
            <div id="details">
                <h3>Job Title: </h3><?php echo $rows['jobTitle']?>
                <?php
                $d=mysqli_query($conn,"SELECT categoryName from category where categoryNumber='$rows[category]'"); 
                $catname=mysqli_fetch_assoc($d)['categoryName'];
                ?>
                <h3>Category Name</h3><?php echo $catname?>
                <h3>Salary</h3><?php echo $rows['salary']?>
                <h3>Designation</h3><?php echo $rows['designation']?>
                <h3>Timings</h3><?php echo $rows['timings']?>
                <h3>Location</h3><?php echo $rows['location']?>
                <a href="#">Accept</a>
                <a href="#">Reject</a>
                </div>
    </div>
<?php
    }


?>
</body>
</html>
