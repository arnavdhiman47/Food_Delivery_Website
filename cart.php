<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodin</title>
  
    <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/    font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
        
<!-- header section starts  -->
<header> 
<a href="#"class="logo">
<img src="images/logo21.jpg" height="40px" width="40px">foodin   
</a>
<nav class="navbar">
    <a href="index2.php">home</a>
    <a href="order.php">popular</a>
    <a href="about1.php">about us</a>
    <a href="cart.php">ordered</a>
    <a href="logout.php" class="btn">logout </a>
    <?php
     include('config.php');
     session_start();
if(isset($_SESSION['username'])){

    echo"
    <div class='uname'>
     $_SESSION[username]
     </div>";
}
?>
</nav>
</header>
<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM cart");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="tab">
<h1>Order Details</h1>
<table>
  <tr>
    <th>Item Name</th>
    <th>Price</th>
    <th>No of items </th>
    <th>Total</th>
    <th>Extra</th>
    <th>Order Date</th>
    <th>Status</th>
    <th>name</th>
    <th>contact</th>
    <th>Address</th>
    <th>Message</th>
    <th>Delete</th>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>

  <td> <?php echo $row["food"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["qty"]; ?></td>
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["extra"]; ?></td>
    <td><?php echo $row["order_date"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["message"]; ?></td>
    <td><a href="del.php?name=<?php echo $row["name"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>

 <?php
}
else{
    echo "<div class='del'>No result found</div>";
}
?>
<script src="https://kit.fontawesome.com/e415cdcf10.js" crossorigin="anonymous"></script>
 </body>
</html>