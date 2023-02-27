<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitmentsystem");
$results=mysqli_query($conn,"select * from jobposts,applicantapplied where jobposts.jobId=applicantapplied.jobId and aplicantId=1;")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
        #ap{
            display:flex;
            width:50%;
            margin:auto;
            border:2px solid salmon;
            margin-top:20px;
        }
        #ap div{
            margin-left:200px;
        }
    </style>
</head>

<body>
    <H1>JOBS APPLIED FOR</H1>
    <?php
    $i=1;
    while($rows=mysqli_fetch_assoc($results)){?>
    <div id="ap">
        <div>
            <h1><?php echo $i ?>
            </h1>
        </div>
        <div>
            <table>
                <tr>
                    <td>JOB TITLE</td>
                    <td><?php echo $rows['jobTitle']?></td>
                </tr>
                <tr>
                    <td>CATEGORY</td>
                    <td><?php echo $rows['category']?></td>
                </tr>
                <tr>
                    <td>SALARY</td>
                    <td><?php echo $rows['salary']?></td>
                </tr>
                <tr>
                    <td>JOB TIMINGS</td>
                    <td><?php echo $rows['timings']?></td>
                </tr>
                <tr>
                    <td>DESIGNATION</td>
                    <td><?php echo $rows['designation']?></td>
                </tr>
                <tr>
                    <td>LOCATION</td>
                    <td><?php echo $rows['location']?></td>
                </tr>
                <tr>
                    <td>STATUS</td>
                    <td><?php echo $rows['status']?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php
        $i++;
    }
    ?>
</body>

</html>