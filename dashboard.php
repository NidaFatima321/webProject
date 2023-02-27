
<!DOCTYPE html>
<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitmentsystem");
$result=mysqli_query($conn,"select * from recruiter;");
$rid=$_REQUEST['rid'];
echo $rid;
$n=mysqli_query($conn,"select recruiterName from recruiter where recruiterId='$rid';");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(238, 238, 238);
        }

        * {
            margin: 0px;
        }

        #leftpane {
            border: 2px solid salmon;
            width: 200px;
            height: 100vh;
            float: left;
            border-radius: 10px;
            background-color: rgb(121, 121, 212);

        }

        #toppane {

            width: 84%;
            float: left;
            background-color: white;

        }

        #midpane {
            border: 2px solid grey;
            width: 1100px;
            height: 500px;
            float: left;
            margin-left: 20px;
            margin-top: 25px;
            border-radius: 8px;
            background-color: white;
            overflow-y:scroll;

        }

        #logo {
            text-align: center;

            margin-top: 10px;
        }

        #logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        a {
            text-decoration: none;
            color: black;
        }

        #options {

            margin-top: 50px;
            text-align: center;

        }

        #options div {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        #options img {

            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .class1 {
            display: flex;
            align-items: center;
        }

        #toppane img {
            height: 20px;
            width: 20px;
            margin-left: 5px;
        }

        #toppane input {
            border: none;
            background-color: rgb(250, 242, 242);
            width: 400px;
            margin-left: 5px;
            border-radius: 10px;
        }

        #topleft {
            float: left;
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 30px;
            background-color: rgb(250, 242, 242);
            width: 400px;
            height: 30px;
            border-radius: 10px;
        }

        input:enabled {
            outline: none;
        }

        #topright {
            margin-right: 30px;
            margin-top: 10px;
            float: right;
        }

        #topright img {
            border-radius: 100px;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            box-shadow: 3px 3px 2px gray;

        }

        #midheader {
            font-size: 20px;
            height: 40px;
            margin-top: 9px;
            border-bottom: 2px solid gray;
            display: none;

        }

        #midheader a {
            padding-left: 50px;
            color: gray;
        }

       .Opty {
            border: 2px solid rgb(212, 210, 223);
            height: 90px;
            width: 183px;
            margin-left: 42px;
            text-align: center;
            font-size: 20px;
            padding-top: 10px;
           display: inline-block;
           display: none;
           box-shadow: 3px 3px 2px slateblue;

        }
        #softoptions{
            width: 183px;

        }
        #mechoptions{
            width: 183px;
            position: sticky;
            left: 500px;
          
            
        }
      
        #Chemoptions{
            width: 220px;
            position:sticky;
            left: 1000px;
            
        }
        #Eleoptions{
            width: 183px;
            position:sticky;
            left: 750px;

        }
        #im1{
                float: right;
                border-radius: 50%;
            }
            input{
                display: block;
            }
            input:enabled{
                
                outline: none;
            }
            #a1{
                float: right;
            }
            #but1{
                margin-left: 300px;
                border-radius: 20px;
                color: lightcoral;
                width: 100px;
                height: 20px;
            }
            #div1{
                display: inline-block;
                width: 30%;

            }
            #div2{
                display: inline-block;
                width: 70%;

            }
            #hi1{
                text-align:center;
            }
            #formdiv{
                padding:50px;
                padding-left:200px;
                display:none;
             
                background-color:white;
            }
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

<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitmentsystem");
  
    ?>


<body>
    <div id="leftpane">
        <div id="logo">
            <img src="bob.png" alt="">
        </div>
        <!--recruiter(personal info(open implementation),sent job req,received job req(accept/decline),check resumes(offer job))-->
        <div id="options">
            <div id="opt1">
                <img src="pinfo.jpg" alt="">
                  <form action="#" method="POST">
                <button onclick="showform()" name="subm">personal Information</button>
                </form>
            </div>
            <div id="opt2">
                <img src="search (1).png" alt="">
                <a href="#" onclick="show()">Browse candidates</a>
            </div>
            <div id="opt3">
                <img src="rece.png" alt="">
                <a href="">Received Job Requests</a>
            </div>
           <div id="opt4">
                <img src="sent.jpg" alt="">
                <a href="">sent job request</a>
            </div>
            <div id="opt5">
                <img src="offer.png" alt="">
                <a href="">Offer Jobs</a>
            </div>
        </div>
    </div>
    <div id="toppane">
        <div id="topleft" class="class1">
            <img src="magi.jpg" alt="">
            <input type="search" placeholder="search">
        </div>
        <div id="topright" class="class1">
            <?php 
            $ref=mysqli_query($conn,"SELECT * from recruiter where recruiterId='$rid';");
            while($ty=mysqli_fetch_assoc($ref)){
                $nam=$ty['recruiterName'];?>
                <p>
                    Hi, <?php echo $nam;?>
                </p>
                <?php
            } 
            ?>
            <img src="bob.png" alt="" width="60px">

        </div>

    </div>
    <div id="midpane">
        <div id="midheader">
            <a href="#" onclick="showsoft()">Software Engineering</a>
            <a href="#" onclick="showmech()">Mechanical Engineering</a>
            <a href="#" onclick="showelec()">Electrical Engineering</a>
            <a href="#" onclick="showchem()">Chemical Engineering</a>
            
        </div>
        <div id="everyopt">
        <div class="Opty" id="softoptions">
            <form action="#" method="get">
                <button name="submit">Database manager</button>
            </form>
            <br>
            <a href="#">Web Developer</a>
        </div>
        <div class="Opty" id="mechoptions">
            <a href="#">Machine Engineer</a>
            <br>
            <a href="#">Parts Engineer</a>
        </div>
        <div class="Opty" id="Eleoptions">
            <a href="#">Power engineer</a>
            <br>
            <a href="#">Circuit Engineer</a>
        </div>
        <div class="Opty" id="Chemoptions">
            <a href="#">Chemist</a>
            <br>
            <a href="#">Assistant</a>
        </div>
      </div>
     
        <?php 
        if(isset($_POST['subm'])){
            $red=mysqli_query($conn,"SELECT * from recruiter where recruiterId='$rid'");
            while($tyi=mysqli_fetch_assoc($red)){
            ?>
            <tr>
                <td>
                    <?php echo $tyi['recruiterId']?>
                </td>
                <td>
                    <?php echo $tyi['recruiterName']?>
                </td>
                <td>
                    <?php echo $tyi['username']?>
                </td>
            </tr>
            <?php
        }}
       if(isset($_POST['submit'])){
    $result2=mysqli_query($conn,"select * from applicant");
    while($rows1=mysqli_fetch_assoc($result2))
    {
    $idc=$rows1['customerId'];
    $namec=$rows1['customerName'];
    $mail=$rows1['email'];
    $phone=$rows1['phoneNumber'];
    $street=$rows1['street'];
    $city=$rows1['city'];
    $Dob=$rows1['DOB'];
    $age=$rows1['age'];
    $username2=$rows1['username'];
    $password2=$rows1['password'];
    $nic=$rows1['nic'];
    $detail=$rows1['detailsId'];
    $result1=mysqli_query($conn,"select * from details where detailsId=$detail");
    while($rows2=mysqli_fetch_assoc($result1))
    {
        $project=$rows2['projects'];
        $educa=$rows2['education'];
        $expa=$rows2['experience'];
        $skil=$rows2['skills'];
    ?>

        <table border="5">
        <tr>
            <td onclick="showresume()">
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
        
        
         
        </form>
        </div>
    </div>
        <?php 
        if(isset($_POST['submit']))
        {
            $recid=$_POST['recid'];
            $recn=$_POST['recn'];
            $recus=$_POST['recus'];
            $recp=$_POST['recp'];
            $recc=$_POST['recc'];
            $rece=$_POST['rece'];
            $reccri=$_POST['reccri'];
            $query2=mysqli_query($conn,"update recruiter set recruiterName='$recn',username='$recus',password='$recp',contactNumber='$recc',email='$rece' where recruiterId=$recid");
        }
        ?>
    <script>
        function show()
        {

            let fori=document.getElementById("formdiv");
            fori.style.display="none";
            let header=document.getElementById("midheader");
            header.style.display="block";
            
            let header1=document.getElementById("everyopt");
            header1.style.display="block";
            
        }
        let countmech=0;
        function showmech()
        {
            let dab=document.getElementById("mechoptions");
            if(countmech==0)
            {
            dab.style.display="inline-block";  
            countmech++;    } 
            else
            {
                dab.style.display="none";
                countmech=0;
            } 
        }
        let countsoft=0;
        function showsoft()
        {
            let dab=document.getElementById("softoptions");
            if(countsoft==0)
            {
            dab.style.display="inline-block";  
            countsoft++;    } 
            else
            {
                dab.style.display="none";
                countsoft=0;
            } 
        }
        let countele=0;
        function showelec()
        {
            let dab=document.getElementById("Eleoptions");
            if(countele==0)
            {
                dab.style.display="inline-block";
                countele++;    
        } 
            else
            {
                dab.style.display="none";
                countele=0;
            } 
        }
        let countchem=0;
        function showchem()
        {
            let dab=document.getElementById("Chemoptions");
            if(countchem==0)
            {
            dab.style.display="inline-block";  
            countchem++;    } 
            else
            {
                dab.style.display="none";
                countchem=0;
            } 
        }
        let countfo=0;
        function showform()
        {
            let bro=document.getElementById("midheader");
            let bro1=document.getElementById("everyopt");
         
            bro.style.display="none";
            bro1.style.display="none";
            let fo=document.getElementById("formdiv");
            if(countfo==0)
            {
                fo.style.display="block";
                countfo++;
            }
            else{
                fo.style.display="none";
                countfo=0;
            }
        }
      
     
    </script>
</body>

</html>