<?php
    include "dbh.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body class="db_body">

    <br>

    <ul>
        <li><a href="form.php">Home.</a></li>
    </ul>

    <br>

    <div align="center" class="filter">
        <form method="POST" action="show_db.php">
            <p> Filter:</P>
            <select name="filter">
                <option value="device">Device</option>
                <option value="serial_no">Serial No.</option>
                <option value="hostname">Hostname</option>
                <option value="primary_ip">Primary IP</option>
                <option value="windows_version">Windows Version</option>
                <option value="ms_office_version">MS Office Version</option>
            </select>
            <button type="submit" name="btn_filter" class="btn_filter">FILTER</button>
            <br>
        </form>

        <form action="show_db.php" method="POST">
            <input type="text" name = "search" placeholder="e.g Serial">
            <button type = "submit" name="btn_search" class="btn_search">Search</button>
        </form>
    </div>
    
    <?php
    if(isset($_POST["btn_filter"]))
    {

        $filter = mysqli_real_escape_string($connection , $_POST["filter"]);

        if($filter == "device")
        {
            $result = mysqli_query($connection,"SELECT * FROM info ORDER BY device ASC");
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
    elseif(isset($_POST["btn_search"]))
    {
        $search = $_POST['search'];
        $result = mysqli_query($connection,"SELECT * FROM info WHERE CONCAT(nummer,'',technician,'',datum,'',office,'',department,'',user,'',user_login,'',device,'',make,'',model,'',serial_no,'',hostname,'',new_hostname,'',primary_ip,'',mac_address,'',windows_edition,'',windows_version,'',antivirus,'',ms_office_edition,'',ms_office_version,'',netwerk_acces_point,'',status,'',notes) LIKE '%$search%'");
    }
    else
    {
        $result = mysqli_query($connection,"SELECT * FROM info ORDER BY datum ASC");
    }
   
 
    

    echo "<table border='1' class = 'db_table'>
    <tr>
    <th>Nummer</th>
    <th>Technician</th>
    <th>Datum</th>
    <th>Office</th>
    <th>Department</th>
    <th>User</th>
    <th>User/Log in naam</th>
    <th>Device</th>
    <th>Make</th>
    <th>Model</th>
    <th>Serial No.</th>
    <th>Hostname</th>
    <th>New Hostname</th>
    <th>Primary IP</th>
    <th>MAC Address</th>
    <th>Windows Edition</th>
    <th>Windows Version</th>
    <th>Antivirus</th>
    <th>MS Office Edition</th>
    <th>MS Office Version</th>
    <th>Netwerk Acces Point</th>
    <th>Status</th>
    <th>Notes</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td class='db_td'>" . $row['nummer'] . "</td>";
    echo "<td class='db_td'>" . $row['technician'] . "</td>";
    echo "<td class='db_td'>" . $row['datum'] . "</td>";
    echo "<td class='db_td'>" . $row['office'] . "</td>";
    echo "<td class='db_td'>" . $row['department'] . "</td>";
    echo "<td class='db_td'>" . $row['user'] . "</td>";
    echo "<td class='db_td'>" . $row['user_login'] . "</td>";
    echo "<td class='db_td'>" . $row['device'] . "</td>";
    echo "<td class='db_td'>" . $row['make'] . "</td>";
    echo "<td class='db_td'>" . $row['model'] . "</td>";
    echo "<td class='db_td'>" . $row['serial_no'] . "</td>";
    echo "<td class='db_td'>" . $row['hostname'] . "</td>";
    echo "<td class='db_td'>" . $row['new_hostname'] . "</td>";
    echo "<td class='db_td'>" . $row['primary_ip'] . "</td>";
    echo "<td class='db_td'>" . $row['mac_address'] . "</td>";
    echo "<td class='db_td'>" . $row['windows_edition'] . "</td>";
    echo "<td class='db_td'>" . $row['windows_version'] . "</td>";
    echo "<td class='db_td'>" . $row['antivirus'] . "</td>";
    echo "<td class='db_td'>" . $row['ms_office_edition'] . "</td>";
    echo "<td class='db_td'>" . $row['ms_office_version'] . "</td>";
    echo "<td class='db_td'>" . $row['netwerk_acces_point'] . "</td>";
    echo "<td class='db_td'>" . $row['status'] . "</td>";
    echo "<td class='db_notes'>" . $row['notes'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>