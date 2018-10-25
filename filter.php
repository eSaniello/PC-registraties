<?php
    ob_start();

<?php

if(isset($_POST["btn_filter"]))
{

    $filter = mysqli_real_escape_string($connection , $_POST["filter"]);

    if($filter == "device")
    {
        header("Location: show_db.php?filter=device");
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY device ASC");
        exit();
        ob_flush();
    }
    elseif($filter == "serial_no")
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY serial_no ASC");
    }
    elseif($filter == "hostname")
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY hostname ASC");
    }
    elseif($filter == "primary_ip")
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY primary_ip ASC");
    }
    elseif($filter == "windows_version")
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY windows_version ASC");
    }
    elseif($filter == "ms_office_version")
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY ms_office_version ASC");
    }    
}

