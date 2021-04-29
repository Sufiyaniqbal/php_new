
<?php
session_start();
if(isset($_SESSION['Name'])){
?>
<html><head>
<title>Welcome page</title>
</head>
<body bgcolor="Lightskyblue">
</body>
<h1>Hello,<?php echo $_SESSION['Name'];?></h1>
<a href="login.php">logout</a>
</html>
<?php
}
?>