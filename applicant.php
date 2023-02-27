APPLICANT:

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #main {
        height: 1300px;
        width: 65%;
        border: 2px solid black;
        margin: auto;
        background: whitesmoke;
        font-weight: bold;
    }

    #main h2 {
        margin-left: 35px;
        font-weight: bold;
    }

    #main span {
        margin-left: 35px;
        font-weight: bold;
        margin-top: -10px;
        font-size: 15px;
    }

    #main p {
        margin-left: 35px;
        font-weight: bold;
        margin-top: -10px;
        font-size: 15px;
    }

    #pic {
        width: 140px;
        height: 130px;
        border: 2px solid black;
        /* float: right;
        margin-right: 30px;
        margin-top: -190px; */
        background-size: cover;
        /* background-repeat: no-repeat; */
        background-position: center;
    }

    #forma {
       /* border: 1px solid black; */
        width: 90%;
        height: 1100px;
        margin: 50px;
        margin-top: -8px;
    }

    #div1 {
        width: 30%;
        height: 410px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 22px;
        margin-left: 9px;
    }

    #div2 {
        width: 65%;
        height: 410px;
        /* border:2px solid firebrick; */
        margin-top: -410px;

        margin-left: 250px;
        background-color: antiquewhite;
    }

    #pinfo {
        background-color: black;
        color: white;
        font-weight: bold;
        height: 34px;
        word-spacing: 4px;
        letter-spacing: 2px;
        text-align: center;
        margin-top: -20px;
        /* padding: 4px; */
    }

    input {
        width: 390px;
        margin: 5px;
    }

    table th {
        padding: 7px;

    }

    table {
        text-align: left;
    }

    #rad {
        width: 300px;
        height: 25px;

        display: flex;
        margin-left: 8px;
    }
    #div3{
        width: 30%;
        height: 210px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 20px;
        margin-left: 9px;

    }
    #div4{
        width: 65%;
        height: 210px;
        /* border:2px solid firebrick; */
        margin-top: -210px;

        margin-left: 250px;
        background-color: antiquewhite;
    }

    #div5{
        width: 30%;
        height: 250px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 20px;
        margin-left: 9px;

    }
    #div6{
        width: 65%;
        height: 250px;
        /* border:2px solid firebrick; */
        margin-top: -250px;
        background-color: antiquewhite;
        margin-left: 250px;
    }
    input[type='submit']
    {
        background-color: rgb(79, 83, 77);
        width:130px;
        height: 30px;
        font-weight: bold;
        margin-left: 300px;
        color: white;
        font-size: 17px;
        text-transform: uppercase;

    }
    #ui{
        margin-top:-89px;
    }
   
</style>

<body>
    <div id="main">
        <h2>ZARIYA</h2>
        <p>A place from where you get your desired job </p>
        <span>Phone: +92-33404230123</span>
        <span id="eml">email:zariya@gmail.com</span>
       
        <h2>APPLICANT REGISTRATION FORM</h2>
        <br>

        <div id="forma">
            <div id="pinfo">
                <h3>PERSONAL INFORMATION</h3>
            </div>

            <form method="POST" action="addapp.php">
                <div id="div1">
                    <table>                    
                        <tr >
                            <th>First Name</th>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                        </tr>
                        <tr colspan="2">
                            <th>Gender</th>
                        </tr>
                        <tr>
                            <th>Date Of Birth</th>
                        </tr>
                        <tr>
                            <th>Age</th>
                        </tr>
                        <tr>
                            <th>Province</th>
                        </tr>

                        <tr>
                            <th>City</th>
                        </tr>
                        <tr>
                            <th>CNIC</th>
                        </tr>
                     
                        <tr>
                            <th>Email Id</th>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                        </tr>
                        
                        <tr>
                            <th>Username</th>
                        </tr>
                        <tr>
                            <th>Password</th>
                        </tr>
                     
                    </table>
                </div>
                <div id="div2">
                    <table>
                        <tr>
                            <td ><input type="text" name="fname"style="margin-top:-19px;" ></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="lname"></td>
                        </tr>
                        <tr colspan="2">
                            <td>
                                <div id="rad"><input type="radio" name="gen" value="Male">Male
                                    <input type="radio" name="gen" value="Female">Female
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dob"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="ag"></td>
                        </tr>
                        <tr >
                            <td >
                            <label for="prov" style="margin-left:6px; ">Choose Province:</label>

                            <select id="prov" name="prov" style="margin-left:10px;">
                                <option value="Sindh" name="prov">Sindh</option>
                                <option value="Punjab" name="prov">Punjab</option>
                                <option value="Baluchistan" name="prov">Baluchistan</option>
                                <option value="Kpk" name="prov">KPK</option> 
                            </select>
                            </td>
                            </tr>
                           
                        <tr >
                            <td >
                            <label for="cit" style="margin-left:6px; ">Choose City:</label>

                            <select id="cit" name="cit" style="margin-left:27px;margin-top:12px;">
                            <option value="Karachi" name="cit" >Karachi</option>
                                <option value="Peshawar" name="cit">Peshawar</option>
                                <option value="Multan" name="cit">Multan</option>
                                <option value="Lahore" name="cit">Lahore</option>
                                <option value="Gawadar" name="cit">Gawadar</option>
                                <option value="Hyderabad" name="cit">Hyderabad</option>
                           
                            </select>
                        </td>
                        </tr>
                        <br>
                        <tr>
                            <td><input type="text"  name="nic"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="eml"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="con"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="uname"></td>
                        </tr>                    
                        <tr>
                            <td><input type="password" name="psw"></td>
                        </tr>
                       
                    </table>
                </div>
                <br>
                <div id="pinfo">
                    <h3>EDUCATIONAL BACKGROUND</h3>
                    </div>
                    <div id="div3">
                        <table >
                            <tr>
                                <th>Last Qualification</th>
                            </tr>
                            <tr>
                                <th>Last CGPA</th>
                            </tr>
                            <tr>
                                <th>University/Institution Name</th>
                            </tr>
                            <tr>
                                <th>Your domain/field</th>
                            </tr>
                            <tr>
                                <th>Upload degree </th>
                            </tr>
                            <tr>
                                <th>Upload resume</th>
                            </tr>
                            
                        </table>
                    </div>
                    <div id="div4">
                        <table cellpadding="4.6px" cellspacing="2.8px">
                            <tr >
                                <td >
                                <label for="qual">Choose Qualification:</label>
    
                                <select id="qual" name="qual">
                                    <option value="Phd" name="qual">Phd</option>
                                    <option value="Mpill" name="qual">Mphil</option>
                                    <option value="Masters" name="qual">Masters</option>
                                    <option value="Graduate" name="qual" selected>Graduate</option>                              
                                </select>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="gp">
                                </td>
                            </tr>
                            <tr >
                                <td >
                                <label for="uni" >Choose University:</label>
    
                                <select id="uni" name="uni">
                                    <option value="NED" name="uni" selected>NED</option>
                                    <option value="NUST" name="uni">NUST</option>
                                    <option value="Mehran" name="uni">Mehran</option>
                                    <option value="GIK" name="uni" >GIK</option>
                                   
                                </select>
                            </td>
                            </tr>

                            <tr >
                                <td >
                                <label for="dom">Choose Domain:</label>
    
                                <select id="dom" name="dom"  name="dom">
                                    <option value="Software" name="dom" selected>Software</option>
                                    <option value="Mechanical" name="dom">Mechanical</option>
                                    <option value="Electrical" name="dom">Electrical</option>
                                    <option value="Chemical" name="dom" >Chemical</option>
                                   
                                </select>
                            </td>
                            </tr>
                            <tr>
                                <td><input type="file" name="deg" id="deg"></td>
                            </tr>

                            <tr>
                                <td><input type="file" name="res" id="res"></td>
                            </tr>
                            
                        </table>
                    </div>
                    <br>
                    <div id="pinfo">
                        <h3>JOB RELATED INFORMATION</h3>
                        </div>
                        <div id="div5">
                            <table>
                                <tr colspan="2">
                                    <th>Past working experience</th>
                                </tr>
                                <tr>
                                    <th>Major Skills</th>
                                </tr>
                                <tr>
                                   <th> Position Sought</th>
                                </tr>
                                <tr>
                                    <th>Desired pay range</th>
                                 </tr>
                                 <tr>
                                    <th></th>
                                 </tr>

                            </table>
                        </div>

                        <div id="div6">
                            <table cellpadding="2px" cellspacing="2px">
                            <tr colspan="2">
                            <td>
                                <div id="rad"><input type="radio" name="past" value="Yes">Yes
                                    <input type="radio" name="past" value="No">No
                                </div>
                            </td>
                        </tr>
                               
                                <tr>
                                    <td><input type="text" name="skl"></td>
                                </tr>
                                <tr colspan="2">
                                    <td>
                                        <div id="rad"><input type="checkbox" name="post">Manager&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="Assistant">Assistant&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="Trainee">Trainee&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="MD">MD&nbsp;&nbsp;&nbsp;

                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="pay"></td>
                                </tr>
                                <tr>
                                <td><textarea placeholder="Describe yourself briefly: " rows="6" cols="50" name="desc"></textarea></td>
                                </tr>



                            </table>
                        </div>
                        <input type="submit"  name="submit" value="submit">
        </form>
    </div>

</body>

</html>


ADDAPPLICANT.PHP:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        define('db_server', 'localhost');
        define('db_username', 'root');
        define('db_password', '');
        define('db_name', 'jobrecruitmentsystem');
        $conn = mysqli_connect(db_server, db_username, db_password, db_name);
        if($conn==false)
        {
            dir('error');
        }
        else{
            echo "Connected web server<br>";
        }
        $db=mysqli_select_db($conn,db_name);
        if($db==false)
        {
            dir('error');
        }
        else{
            echo "Connected Database";
        }
    ?>
    <?php
       if (isset($_POST['submit']))
       {
          $apfname=$_POST['fname'];
          $aplname=$_POST['lname'];
          $apgen=$_POST['gen'];
          $apdob=$_POST['dob'];
          $apage=$_POST['ag'];
          $approv=$_POST['prov'];
          $apcity=$_POST['cit'];
          $apnic=$_POST['nic'];
          $apemail=$_POST['eml'];
          $apcont=$_POST['con'];
          $apuname=$_POST['uname'];
          $appass=$_POST['psw'];

          $edu=$_POST['qual'];
          $cgp=$_POST['gp'];
          $univ=$_POST['uni'];
          $domain=$_POST['dom'];
          $degree=$_POST['deg'];
          $resume=$_POST['res'];
          $pwe=$_POST['past'];
          $skill=$_POST['skl'];
          $position=$_POST['post'];
          $payrang=$_POST['pay'];
        
          $query="insert into applicant(applicantfName,applicantlName,gender,dob,age,province,city,cnic,email,contact,username,password) 
                  values('$apfname','$aplname','$apgen','$apdob','$apage','$approv','$apcity','$apnic','$apemail','$apcont','$apuname','$appass')";
       
          $query1="insert into appdetails (qualification,lastCgp,lastUni,domain,degree,resume,pastExperience,skills,positionSought,desirePay) 
                   values ('$edu','$cgp','$univ','$domain','$degree','$resume','$pwe','$skill','$position','$payrang')"; 
                
                  if(mysqli_query($conn,$query) && mysqli_query($conn,$query1))
                  {
                          echo "<script>alert('your record has been inserted in our database')</script>";
                          echo "<script>window.open('applicant.php','_self')</script>";
                  }
                  else{
                    echo "Something went wrong";
                  }
       }
       ?>
</body>
</html>
