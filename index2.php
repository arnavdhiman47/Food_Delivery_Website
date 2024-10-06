<html lang="en">
<?php
    include('config.php');
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodin.com</title>
  
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
    <a href="cart.php">ordered

    </a>
    <a href="about1.php">about us</a>
    <a href="logout.php" class="btn">logout </a>
    <?php
if(isset($_SESSION['username'])){

    echo"
    <div class='uname'>
     $_SESSION[username]
     </div>";
}
?>
</nav>
</header>
<section class="home" id="home">
<div class="content">
<h3>food made with love</h3>
                                <?php
                            $sql = "SELECT * FROM food WHERE active='Yes'";
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the foods are availalable or not
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        ?>
    <div class="box-container1">
<div class="box">
<div class=box1>  
<img src="images/<?php echo $image_name; ?>">
                    </div>
                        <h2><?php echo $title; ?></h2>
                        <p>Rs <?php echo $price; ?>/-</p>
                        <a href="order1.php?food_id=<?php echo $id; ?>"class="btn">order</a>
                    </div>
                    </div>
                        <?php
                    }
                }
                    ?>
                    </div>
                    </section>
<!-- header section ends -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
               
                <h4>online Food</h4>
                <ul>
                    <li><a href="#">Easy</a></li>
                    <li><a href="#">Fast</a></li>
                    <li><a href="#">order</a></li>
                    <li><a href="#">healthy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
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