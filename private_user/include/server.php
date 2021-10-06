<?php 

    $servername = "localhost";
    $username = "boyinfos_filemanagement";
    $password = "Miku0859735734";
    $dbname = "boyinfos_filemanagement";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } else{
        echo "Test";
    }

?>