<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        #desc img {
            width: 30px;
            height: 30px;
        }
      
        .imag1 {

            width: 130px;
            height: 130px;
            border-radius: 100px;
            
        }
        #container{
            width:681px;
            height:500px;
            border:2px solid red;
            padding:50px;   
        }
        #desc{
            width:300px;
            text-align:center;
        }
       
    </style>
</head>
<body>
    <form action="#" method="Get">
        <button name="submit"></button>
    </form>

<?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitmentsystem");
    if(isset($_GET['submit'])){
    $result=mysqli_query($conn,"select * from applicant");
    while($rows=mysqli_fetch_assoc($result))
    {
    $idc=$rows['customerId'];
    $namec=$rows['customerName'];
    $mail=$rows['email'];
    $phone=$rows['phoneNumber'];
    $street=$rows['street'];
    $city=$rows['city'];
    $Dob=$rows['DOB'];
    $age=$rows['age'];
    $username=$rows['username'];
    $password=$rows['password'];
    $nic=$rows['nic'];
    $detail=$rows['detailsId'];
    $result1=mysqli_query($conn,"select * from details where detailsId=$detail");
    while($rows1=mysqli_fetch_assoc($result1))
    {
        $project=$rows1['projects'];
        $educa=$rows1['education'];
        $expa=$rows1['experience'];
        $skil=$rows1['skills'];
    ?>

    <table border="5" id="<?php "$idc"?>">
        <tr>
            <td>
                <button>Send job request</button>
            <div id="desc">
                <h2><?php echo "$namec" ?></h2>
       <img src="insta.png" alt=""><br>
       <a href=""><?php echo "$street , $city" ?></a><br>
       <img src="phone.jpg" alt=""><br>
       <a href=""><?php echo " 0$phone" ?></a> <br>
       <img src="email.jpg" alt=""><br>
       <a href=""><?php echo  "$mail" ?></a><br>
                </div>
            </td>
        </tr>
    </table>
    <div id="container">
    <div class="">
        <img src="bob.png" alt="" class="imag1">
    </div>
    
        <h2>EDUCATION</h2>
        <p><?php echo "$educa" ?></p>

        <h2>TECHNICAL SKILLS AND SOFT SKILLS</h2>
        <p><?php echo "$skil" ?></p>
    
        <h2>PROJECTS</h2>
        <p><?php echo "$project" ?>
        </p>
   
        <h2>EXPERIENCE</h2>
        <p><?php echo "$expa" ?>
        </p>
</div>
<?php
    }
    }
}
?>
<script>
   function job()
   {

   }
   </script>
</body>
</html>