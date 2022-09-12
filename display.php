
<?php

session_start();

if(isset($_SESSION['is_login'])){
    if ( $_SESSION['is_login'] == false ) {
     header('location:insert.php');
    }
}else
 header('location:insert.php');
?>


	<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

  </style>
</head>
<body>
<body>
<div class="sidebar">
  <a class="active" href="#home">User</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>



	<div class="container">
<div class="">
<h3 class="text-center">Display Table Data</h3>
<table class="table table-bordered">
    <thead>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>
<th>Update</th>
</tr>
</thead>
<?php 
include 'conn.php';
$sql="select * from details";
$query=mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query))
{
?>
<tbody>
<tr>
<td><?php echo $result['id'];?></td>
<td><?php echo $result['username'];?></td>
<td><?php echo $result['password'];?></td>
<td><button  name='done' type='submit'><a href="delete.php?id=<?php echo $result['id']; ?>" class=text-black>Delete</a></button></td>
<td><button > <a href="update.php?id=<?php echo $result['id']; ?>"class="text-black">Update</a></button></td>
</tr>
</tbody>
</
<?php
}

?>





	</table>

</div>
</div>


</body>
</html>
