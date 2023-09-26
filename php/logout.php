<?php

session_start();
if ($_SESSION['username']) {
    session_destroy();
    header("location: admin-dashboard.php")
    echo "<script>alert('You are successfully logged out');</script>";    
    echo "<script>window.open('C:/Users/Venky/OneDrive/Desktop/UML/Student-Result-Management-System-master-2/Student-Result-Management-System-master/index.html', '_self');</script>";
} else {
    echo "<script>alert('You are not logged in');</script>";
    echo "<script>window.open('C:/Users/Venky/OneDrive/Desktop/UML/Student-Result-Management-System-master-2/Student-Result-Management-System-master/index.html', '_self');</script>";
}
?>