<?php
require('config.php');
//CHeck whether food id is set or not
if(isset($_GET['food_id']))
{
    //Get the Food id and details of the selected food
    $food_id = $_GET['food_id'];

    $sql = "SELECT * FROM popular WHERE id=$food_id";
    //Execute the Query
    $res = mysqli_query($conn, $sql);
    //Count the rows
    $count = mysqli_num_rows($res);
    if($count==1)
    {
        //WE Have DAta
        //GEt the Data from Database
        $row = mysqli_fetch_assoc($res);

        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
    }

        ?>
        <?php
    //Get the DEtails of the SElected Food
    $sql = "SELECT * FROM food WHERE id=$food_id";
    //Execute the Query
    $res = mysqli_query($conn, $sql);
    //Count the rows
    $count = mysqli_num_rows($res);
    //CHeck whether the data is available or not
    if($count==1)
    {
        //WE Have DAta
        //GEt the Data from Database
        $row = mysqli_fetch_assoc($res);

        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
    }
}
        ?>
            
     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodin.com</title>
  
    <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/    font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
        
<!-- header section starts  -->
<header> 
<a href="#"class="logo">
<img src="images/logo21.jpg" height="70px" width="70px">foodin   
</a>
<nav class="navbar">
    <a href="index2.php">home</a>
    <a href="order.php">popular</a>
    <a href="cart.php">ordered</a>
    <a href="logout.php" class="btn">logout </a>
    <?php
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

<section class="order" id="order">
<h3 class="sub">Order Now </h3>
<h1 class="heading1">Free And Fast</h1>
<form action="" method="post">
<div class="rdata">
<img src="images/<?php echo $image_name;?>">
<h3><?php echo $title; ?></h3>
<input type="hidden" name="food" value="<?php echo $title; ?>">
<input type="hidden" name="price" value="<?php echo $price; ?>">
</div>
    <div class="inputbox">
    <div class="input">
    <p >Rs<?php echo $price; ?></p>
</div>
        <div class="input">
            <input type="text" placeholder="Enter your name" name="name" required>
        </div>
        <div class="input">
            <input type="text" placeholder="Number of items" name="qty" required>
        </div>
        <div class="input">
            <input type="text" placeholder="Add Some extra"name="extra" >
        </div>
        <div class="input">
            
            <input type="text" placeholder="Enter your number"name="contact" required>
        </div>
        <div class="input">
            
            <textarea name="address" placeholder="Enter your address" id="" cols="30" rows="10" required></textarea>
        </div>
        <div class="input">
            
            <input type="text" placeholder="Enter your messege"name="message">
        </div>
    </div>
    </div>

    <button type="submit" class="btn" name="submit" >order now</button>
</form>
</section>
<?php
if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; // total = price x qty 

                    $order_date = date("Y-m-d "); //Order DAte

                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                    $name = $_POST['name'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                     $extra =$_POST['extra'];
                     $message = $_POST['message'];

                    //Save the Order in Databaase
                    //Create SQL to save the data
                   $sql2 = "INSERT INTO `cart` (`food`, `price`, `qty`, `total`, `extra`, `order_date`, `status`, `name`, `contact`, `Address`, `message`) VALUES ( '$food', '$price', '$qty', '$total', '$extra', '$order_date', '$status', '$name', '$contact', '$address', '$message')";

                    //echo $sql2; die();

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and Order Saved
                        echo "<script>
                 alert('Food Ordered Successfully.');
                 window.location.href='index2.php';
                </script>";
                    
                    }
                    else
                    {
                        echo "<script>
                        alert('Failed to Order Food.');
                        window.location.href='index2.php';
                       </script>";
                        //Failed to Save Order
                     
                    
                    }

                }
            
            ?>


                }
            
            ?>












<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
               
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/e415cdcf10.js" crossorigin="anonymous"></script>
</body>
</html>

