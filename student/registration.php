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

<label> Dob </label>         
<input type="date" name="dob" size="15"/> <br> <br> 

<label>   
Course 
</label>   
<select id="course" name="course" value="course">  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
  
<br> <br>

Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
<input type="submit" value="Submit" name="log" id="submit"/>

</form>  
</body>  
</html>  

<?php
if(isset($_POST['log']))
{
   
   $Name=$_POST["name"];
   $Dob=$_POST["dob"];
   $Course=$_POST["course"];
   $Email=$_POST["email"];
   $Password=$_POST["pass"];

   $user='root';
   $pass="";
   $db='php_new';
   $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

   $sql="INSERT INTO student(Name,Dob,Course,Email,Password) VALUES ('$Name','$Dob','$Course','$Email','$Password')";                
   if($result = mysqli_query($conn, $sql)){

        if(mysqli_affected_rows($conn)>0)
   {
       
           ?>
           <script>
           alert("inserted succcessfully");
           window.location.href="registration.php";
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
