<?php include "lib/header.php";?>








<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}
?>

<?php include "lib/footer.php";?>