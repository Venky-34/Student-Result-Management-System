<?php
session_start();
if (isset($_POST['admin_login'])) {
    $emailid = $_POST['email_id'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '', 'admin_login');
    if ($con == false) {
        echo "Error in connection";
    } else {
        $select = "SELECT * FROM `admin_login` WHERE `email_id`='$POST[email_id]'  AND `password`='$POST[password]'";
        $query = mysqli_query($con, $select);
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $data = mysqli_fetch_assoc($query);
            $_SESSION['adminid'] = $POST['email_id'];
            header("Location:../php/admin-dashboard.php");
        }
        else {
?>
            <script>
                alert('Wrong Emailid or Password!!Please Try Again');
                window.open('../service-pages/admin-login.html', '_self');
            </script>
<?php
        }
    }
}
?>