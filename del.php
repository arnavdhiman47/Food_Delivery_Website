<?php
include_once 'config.php';
$sql = "DELETE FROM cart WHERE name='" . $_GET["name"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Record Deleted Sucessfully');
    window.location.href='cart.php';
   </script>";
} else {
    echo "<script>
    alert('registration successfully');
    window.location.href='index1.php';
   </script>" . mysqli_error($conn);
}
mysqli_close($conn);
?>