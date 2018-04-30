<?php 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $check = $_POST['check1'];
    
    mysqli_query($db, "UPDATE records SET check1='$check' WHERE id=$id");
    $_SESSION['message'] = "Case marked!"; 
    header('location: doctor.php');
}
 ?>