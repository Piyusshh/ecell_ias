<?php
if(isset($_POST['submit_row']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "iasdb";


 $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
 $name=$_POST['name'];
 $age=$_POST['age'];
 $job=$_POST['job'];
 $startidea = $_POST['startidea'];
 $startdesc = $_POST['startdesc'];
 $leaderid = $_POST['leaderid'];
 $leaderrollno = $_POST['leaderrollno'];
 for($i=0;$i<count($name);$i++)
 {
  if($name[$i]!="" && $age[$i]!="" && $job[$i]!="")
  {
   $sql = "INSERT INTO employee_table (name, age, job, startidea, startdesc, leaderid, leaderrollno) VALUES ('$name[$i]', '$age[$i]', '$job[$i]','$startidea', '$startdesc', '$leaderid', '$leaderrollno' )";   
   //mysql_query("insert into employee_table values('$name[$i]','$age[$i]','$job[$i]')");	
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  }
 }
 
}
?>