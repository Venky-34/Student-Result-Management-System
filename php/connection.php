<?php

mysqli_connect("localhost", "root", "", "admin_login");
if (mysqli_connect_error()) {
    echo "cannot connect";
}
else
{
    echo "Connected";
}

?>