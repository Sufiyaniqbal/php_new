<Html>  
<head>   
<title>  
Display Page  
</title>  
</head>  
<body bgcolor="Lightskyblue"> 
<form method="post">
<table border=1>
<tr>
<th>id</th>
<th>Name</th>
<th>Departent</th>
<th>Age</th>
<th>salary</th>
</tr>


<?php

$user='root';
$pass="";
$db='php_new';
$conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$query="select * from employee";
$result=mysqli_query($conn,$query);
foreach($result as $row)
{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['department'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['salary'];?></td>
<?php $id=$row['id'];?>
<td><a href="edit.php?id=<?php echo $id; ?>">edit</a>
<a href="delete.php?id=<?php echo $id; ?>">delete</a></td>
</tr>
<?php }?>
</table>
</form>
</body>
</html>