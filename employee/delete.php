<?php
$id=$_GET["id"];

$user='root';
$pass="";
$db='php_new';
$conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$query="DELETE from employee where id='$id'";
$data=mysqli_query($conn,$query);

if($data)
{
?>
<script>
alert("Entry Deleted from Database");
window.location.href="display.php";
</script>
<?php
}
?>