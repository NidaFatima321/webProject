<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitmentsystem");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="POST">
        <table border="2px" cellspacing="10px" cellpadding="10px">
           
            <?php
          
          $result=mysqli_query($conn,"select * from applicant;");

          while($rows=mysqli_fetch_assoc($result)){
            if($rows['customerId']==$_POST['id']){
                $id=$_POST['id'];
                $res=mysqli_query($conn,"select * from applicant where customerId='$id';");
                while($r=mysqli_fetch_assoc($res)){?>
                    <tr>
                        <td>Id:</td>
                        <td><?php echo $r['customerId']?></td>
                    </tr>
                    <tr>
                        <td>Name: </td>
                        <td><?php echo $r['customerName']?></td>
                    </tr>
                    <tr>
                        <td>Contact: </td>
                        <td><?php echo $r['email']?></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><?php echo $r['street']?>,<?php echo $r['city']?></td>
                    </tr>
                    <tr>
                        <td>Name: </td>
                        <td><?php echo $r['customerName']?></td>
                    </tr>
                    <tr>
                        <td>CNIC: </td>
                        <td><?php echo $r['nic']?></td>
                    </tr>
                    <?php
                    $det=mysqli_query($conn,"select education,experience,skills,projects from applicant,details where applicant.detailsId=details.detailsId;")
                    ?>
                    <tr>
                        <td rowspan="5">Details: </td>
                        <?php
                        while($e=mysqli_fetch_assoc($det)){
                        ?>
                            <td><?php echo $e['education']?></td></tr>
                            <tr><td><?php echo $e['experience']?></td></tr>
                            <tr><td><?php echo $e['skills']?></td></tr>
                            <?php
                        }
                        ?>
                    </tr>
                    <?php
                }
            }
          }
        ?>
        </table>
    </form>
</body>

</html>