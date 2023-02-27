<html>
    <head>
        <style>
#im1{
    float: left;
}
.desc{
    float: left;
    margin-left: 10px;

}
#web1{display: none;}
#taby1{
    display:none;
}
        </style>
    </head>
  
    <body>
     <form action="#" method="get">
    <button onclick="showy()" name="offer">offer job</button>
    </form>
    <table border=5 cellpadding=10px cellspacing=10px id="taby1">
    <form action="#" method="post">
        <tr>
            <td colspan=2>JOB OFFERING FORM</td>
        </tr>
        <tr>
       <td> Job ID: </td>
       <td><input type="number" name="idj"></td>
        </tr>
        <tr>
       <td> Job Title: </td>
       <td><input type="text" name="tit"></td>
        </tr>
        <tr>
       <td> salary: </td>
       <td><input type="number" name="salj"></td>
        </tr>
        <tr>
       <td> keywords: </td>
       <td><input type="text" name="keyj"></td>
        </tr>
        <tr>
       <td> designation: </td>
       <td><input type="text" name="desj"></td>
        </tr>
        <tr>
       <td> timing: </td>
       <td><input type="time" name="timj"></td>
        </tr>
        <tr>
       <td> location: </td>
       <td><input type="text" name="locj"></td>
        </tr>
        <tr>
       <td> Recruiter Id: </td>
       <td><input type="number" name="recj"></td>
        </tr>
        <tr>
       <td> category: </td>
       <td><select name="cat">
        <option value="11">Web developer</option>
        <option value="22">Database developer</option>
       </select></td>
        </tr>
<tr>
    <td>
        <button name="submit">Send Data</button>
    </td>
</tr>
    </form>
    </table>

    <?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitmentsystem");
    $result=mysqli_query($conn,"select * from jobposts");
    while($rows=mysqli_fetch_assoc($result))
    {
    $jid=$rows['jobId'];
    $title=$rows['jobTitle'];
    $category=$rows['categoryId'];
    $sal=$rows['salary'];
    $des=$rows['designation'];
    $key=$rows['keyword'];
    $tim=$rows['timings'];
    $loc=$rows['location'];
    $recid=$rows['RecruiterId'];
    ?>

        <table border="5" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                    <div id="im1">
                    <img src="bob.png" alt="" width="100px" height="100px">
                </div>
                <div class="desc">

                    <h2><?php echo "$title" ?></h2>
                     
                     <h3>Expenditure <?php echo "$sal" ?></h3>
                     <h3>Timing <?php echo "$tim" ?></h3>
                     <p> <?php echo "$loc" ?> </p>
                     <p>FULL TIME </p>
                    </div>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
            
    <?php
    if(isset($_POST['submit']))
    {
        $idj=$_POST['idj'];
        $tit=$_POST['tit'];
        $salj=$_POST['salj'];
        $keyj=$_POST['keyj'];
        $desj=$_POST['desj'];
        $timj=$_POST['timj'];
        $locj=$_POST['locj'];
        $recj=$_POST['recj'];
        $catj=$_POST['cat'];
        $query1=mysqli_query($conn,"insert into jobposts(jobId,jobTitle,categoryId,salary,keyword,designation,timings,location,RecruiterId) values('$idj','$tit','$catj','$salj','$keyj','$desj','$timj','$locj','$recj')");
    }
    ?>
       <script>
        let count1=0;
        function showy()
        {
                let fora=document.getElementById("taby1");
                if(count1==0)
                {
                fora.style.display="block";
                count1++;
                }
                else{
                    fora.style.display="none";
                    count1=0;
                }
        }
       </script>
    </body>
   
</html>