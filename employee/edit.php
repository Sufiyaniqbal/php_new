<Html>  
<head>   
<title>  
Upadate Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>  
<form method="post"> 
  
<label>   
Department
</label>   
<select name="dept" value="dept">  
<option value="Sales">Sales</option>  
<option value="Accountant">Accountant</option>  
<option value="purachasing">purachasing</option>    
</select>  
  
<br> <br>

Age  
<input type="text" id="age" name="age"/> <br>    
<br> <br>
  
Salary 
<input type="text" id="salary" name="salary"> <br>   
<br> <br>  
<input type="submit" value="update" name="edit" id="submit"/>

</form>  
</body>  
</html>  


<?php
$id=$_GET["id"];

if(isset($_POST['edit']))
{
$department=$_POST['dept'];
$age=$_POST['age'];
$salary=$_POST['salary'];

$user='root';
$pass="";
$db='php_new';
$conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");


$query="UPDATE employee set department='$department',age='$age',salary='$salary' where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    ?>
           <script>
           alert("updated succcessfully");
           window.location.href="display.php";
           </script>
           <?php
 
}
else{
    echo "not update";
}
}
?>