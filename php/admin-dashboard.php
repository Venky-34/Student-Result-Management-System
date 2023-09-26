<html>

<head>
    <title>ANITS - Admin Dashboard</title>
</head>

<body>

    <?php

    session_start();
    if ($_SESSION['username']) {
        echo '<script>alert("Hello ' . $_SESSION['username'] . '");</script>';
    ?>

        <script>
            window.open('C:/Users/Venky/OneDrive/Desktop/UML/Student-Result-Management-System-master-2/Student-Result-Management-System-master/service-pages/admin-exam-details-upload.html', '_self');
        </script>

    <?php

    } else {
        echo "error!!";
    }

    ?>

</body>

</html>