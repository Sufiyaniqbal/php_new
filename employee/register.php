<Html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>  
<form method="post"> 
  
<label> Name </label>         
<input type="text" name="name" size="15"/> <br> <br> 

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
<input type="submit" value="Submit" name="log" id="submit"/>

</form>  
</body>  
</html>  

<?php
if(isset($_POST['log']))
{
   
   $name=$_POST["name"];
   $department=$_POST["dept"];
   $age=$_POST["age"];
   $salary=$_POST["salary"];

   $user='root';
   $pass="";
   $db='php_new';
   $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

   $sql="INSERT INTO employee(name,department,age,salary) VALUES ('$name','$department','$age','$salary')";                
   if($result = mysqli_query($conn, $sql)){

        if(mysqli_affected_rows($conn)>0)
   {
       
           ?>
           <script>
           alert("inserted succcessfully");
           window.location.href="register.php";
           </script>
           <?php
           
   }
        return $result;
}
else{
        echo mysqli_error($conn);
}

}

?>
