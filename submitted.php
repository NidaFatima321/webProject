<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
          background-color:	lightgrey;  
          margin-left:170px;
          margin-top:60px;
          border-radius:10px;
          font-weight:bold;
          text-align:center;
          align-items:center;
          justify-content:center;

    } 
    span{
      
        margin-left:180px;
        margin-top:20px;
   
     
    }
    </style>
<body>
<br>
<h2 style="color:black; font-size:24px; text-align:center">SUBMITTED  QUERIES:</h2>
<br>   

<?php
   include("webadmin.php");
   ?>
   <table border="2px" cellspacing="8px" cellpadding="10px">
   <tr><th colspan=7><h2>Queries Details!</h2></h2></th></tr>
    <tr colspan=3>
    <th>Query id</th>
    <th>Applicant Id</th>
    <th>Query</th>
    <th>Response status</th>
    <th>Response Time</th>
    <th>Posted Time</th>
    <th>Update Response</th>

</tr>
<?php
$result=mysqli_query($conn,"select * from queries");
{
        while($rows=mysqli_fetch_assoc($result))
        {    
            echo "
 <tr> 
 <td>". $rows['queryId'] ."</td> 
 <td>". $rows['applicantId'] ."</td>
 <td>".$rows['postDescription'] ."</td>
<td>". $rows['response'] ."</td> 
 <td>". $rows['responseTime'] ."</td>
 <td>". $rows['postingTime'] ."</td>
 <td><a href='edit.php? qr=$rows[queryId] & rp=$rows[response] & 
 rt=$rows[responseTime]'>Edit</td> </tr>
 "; 
} 
} 
?>

</table>
<br>
<br>
<br>
<h2 style="color:black; font-size:24px; text-align:center">QUERY RESPONSE STATUS</h2>
<br>

<?php
    $result=mysqli_query($conn,"select * from queries");
    while($rows=mysqli_fetch_assoc($result))
    {
?>
<?php
if($rows['response']=="" ) 
{   
  echo '<span style="color:red; font-size:22px; font-weight:bold; margin-left:200px; ">'.$rows['postDescription'].'</span>'.'<br>'.'<br>';
}
else{
echo '<span style="color:green; font-size:22px; font-weight:bold; margin-left:200px; ">'.'<b>'.'<i>'.$rows['postDescription'].'</i>'.'</b>'.'</span>'.'<br>'.'<br>';
}
?>
<?php
}
?> 
</body>
</html>
