<?php 
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body class="index_body">

    <?php
    if(isset($_SESSION["uid"]))
    {

        echo "    <div align='right' class='logout'>
                <form action='login.php' method='POST'>
                    <button type = 'submit' name = 'submit' class='logout'>Log out</button>
                </form>
            </div>";

            echo "   <div align = 'center'>
            <form method = 'POST' action = 'add_stuff_to_db.php' class='form'>
        
                <h1>EDP REGISTRATIE FORMULIER</h1>
                <br>
        
                <ul>
                    <li><a href='show_db.php'>Show Database.</a></li>
                </ul>
        
                <br>
        
                <p>Datum: <?php echo date('Y-m-d'); ?>
        
                <br><br>
        
                <div class='first_form_half'>";

 

            //technician
            $technician = $_SESSION['uid']; 
            echo '<input type="text" name = "technician" placeholder = "Technician" value = "'.$technician.'" class="gen_input"> <br><br>';
            

            //office_department
            if(isset($_GET["office_department"]))
            {
                $office_department = $_GET["office_department"];

                if($office_department == "ODB")
                {
                    echo 'Office<br>
                    <input type="radio" name="office_department" value="ODB" checked = "true"> ODB</input>
                    <input type="radio" name="office_department" value="IDB"> IDB</input>
                    <input type="radio" name="office_department" value="ACCIJNS"> ACCIJNS</input>
                    <input type="radio" name="office_department" value="VOORLICHTING"> VOORLICHTING</input> <br><br>';
                }
                elseif($office_department == "IDB")
                {
                    echo 'Office<br>
                    <input type="radio" name="office_department" value="ODB"> ODB</input>
                    <input type="radio" name="office_department" value="IDB" checked = "true"> IDB</input>
                    <input type="radio" name="office_department" value="ACCIJNS"> ACCIJNS</input>
                    <input type="radio" name="office_department" value="VOORLICHTING"> VOORLICHTING</input> <br><br>';
                }
                elseif($office_department == "ACCIJNS")
                {
                    echo 'Office<br>
                    <input type="radio" name="office_department" value="ODB"> ODB</input>
                    <input type="radio" name="office_department" value="IDB"> IDB</input>
                    <input type="radio" name="office_department" value="ACCIJNS" checked = "true"> ACCIJNS</input>
                    <input type="radio" name="office_department" value="VOORLICHTING"> VOORLICHTING</input> <br><br>';
                }
                elseif($office_department == "VOORLICHTING")
                {
                    echo 'Office<br>
                    <input type="radio" name="office_department" value="ODB" checked = "true"> ODB</input>
                    <input type="radio" name="office_department" value="IDB"> IDB</input>
                    <input type="radio" name="office_department" value="ACCIJNS"> ACCIJNS</input>
                    <input type="radio" name="office_department" value="VOORLICHTING" checked = "true"> VOORLICHTING</input> <br><br>';
                }
                elseif($office_department != "IDB" || $office_department != "ODB")
                {
                    echo 'Office<br>
                    <input type="radio" name="office_department" value="ODB"> ODB</input>
                    <input type="radio" name="office_department" value="IDB"> IDB</input>
                    <input type="radio" name="office_department" value="ACCIJNS"> ACCIJNS</input>
                    <input type="radio" name="office_department" value="VOORLICHTING"> VOORLICHTING</input> <br><br>';
                }
            }
            else
            {
                echo 'Office<br>
                <input type="radio" name="office_department" value="ODB"> ODB</input>
                <input type="radio" name="office_department" value="IDB"> IDB</input>
                <input type="radio" name="office_department" value="ACCIJNS"> ACCIJNS</input>
                <input type="radio" name="office_department" value="VOORLICHTING"> VOORLICHTING</input> <br><br>';
            }

            //department
            if(isset($_GET["department"]))
            {
                $department = $_GET["department"];
                echo '<input type="text" name = "department" placeholder = "Department" value = "'.$department.'" class="gen_input"><br><br>';
            }
            else
            {
                echo '<input type="text" name = "department" placeholder = "Department" class="gen_input"><br><br>';
            }


            //user
            if(isset($_GET["user"]))
            {
                $user = $_GET["user"];
                echo '<input type="text" name = "user" placeholder = "User" value = "'.$user.'" class="gen_input"><br><br>';
            }
            else
            {
                echo '<input type="text" name = "user" placeholder = "User" class="gen_input"> <br><br>';
            }

            //user_login
            if(isset($_GET["user_login"]))
            {
                $user_login = $_GET["user_login"];
                echo '<input type="text" name = "user_login" placeholder = "User/Log in name" value = "'.$user_login.'" class="gen_input"><br><br>';
            }
            else
            {
                echo '<input type="text" name = "user_login" placeholder = "User/Log in name" class="gen_input"> <br><br>';
            }

            //device
            if(isset($_GET["device"]))
            {
                $device = $_GET["device"];
                
                if($device == "NONE")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE" selected = "true">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
          
                elseif($device == "COPY MACHINE")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE" selected = "true">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "COUNTER (MONEY)")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)" selected = "true">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "DESKTOP")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP" selected = "true">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "LAPTOP")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP" selected = "true">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "MONITOR")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR" selected = "true">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "NETWERK PRINTER")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER" selected = "true">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "PATCH PANEL")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="CLONE" selected = "true">CLONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL" selected = "true">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "PRINTER")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER" selected = "true">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "ROUTER")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER" selected = "true">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "SERVER")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER" selected = "true">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "SWITCH")
                {
                    echo 'Device:<br>
                        <select name = "device">
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH" selected = "true">SWITCH</option>
                            <option value="UPS">UPS</option>
                        </select> <br><br>';
                }
                elseif($device == "UPS")
                {
                    echo 'Device:<br>
                            <option value="NONE">NONE</option>
                            <option value="COPY MACHINE">COPY MACHINE</option>
                            <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                            <option value="DESKTOP">DESKTOP</option>
                            <option value="LAPTOP">LAPTOP</option>
                            <option value="MONITOR">MONITOR</option>
                            <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                            <option value="PATCH PANEL">PATCH PANEL</option>
                            <option value="PRINTER">PRINTER</option>
                            <option value="ROUTER">ROUTER</option>
                            <option value="SERVER">SERVER</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="UPS" selected = "true">UPS</option>
                        </select> <br><br>';
                }
            }
            else
            {
                echo 'Device:<br>
                    <select name = "device">
                        <option value="NONE">NONE</option>
                        <option value="COPY MACHINE">COPY MACHINE</option>
                        <option value="COUNTER (MONEY)">COUNTER (MONEY)</option>
                        <option value="DESKTOP">DESKTOP</option>
                        <option value="LAPTOP">LAPTOP</option>
                        <option value="MONITOR">MONITOR</option>
                        <option value="NETWERK PRINTER">NETWERK PRINTER</option>
                        <option value="PATCH PANEL">PATCH PANEL</option>
                        <option value="PRINTER">PRINTER</option>
                        <option value="ROUTER">ROUTER</option>
                        <option value="SERVER">SERVER</option>
                        <option value="SWITCH">SWITCH</option>
                        <option value="UPS">UPS</option>
                    </select>
                    <br><br>';
            }
            
            //make
            if(isset($_GET["make"]))
            {
                $make = $_GET["make"];

                if($make == "CLONE")
                {
                    echo 'Make:<br>
                    <select name = "make">
                        <option value="CLONE" selected = "true">CLONE</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="IBM">IBM</option>
                        <option value="DELL">DELL</option>
                    </select>
                    <br><br>';
                }
                elseif($make == "HP")
                {
                    echo 'Make:<br>
                    <select name = "make">
                        <option value="CLONE">CLONE</option>
                        <option value="HP" selected = "true">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="IBM">IBM</option>
                        <option value="DELL">DELL</option>
                    </select>
                    <br><br>';
                }
                elseif($make == "LENOVO")
                {
                    echo 'Make:<br>
                    <select name = "make">
                        <option value="CLONE">CLONE</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO" selected = "true">LENOVO</option>
                        <option value="IBM">IBM</option>
                        <option value="DELL">DELL</option>
                    </select>
                    <br><br>';
                }
                
                elseif($make == "IBM")
                {
                    echo 'Make:<br>
                    <select name = "make">
                        <option value="CLONE">CLONE</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="IBM" selected = "true">IBM</option>
                        <option value="DELL">DELL</option>
                    </select>
                    <br><br>';
                }
                elseif($make == "DELL")
                {
                    echo 'Make:<br>
                    <select name = "make">
                        <option value="CLONE">CLONE</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="IBM">IBM</option>
                        <option value="DELL" selected = "true">DELL</option>
                    </select>
                    <br><br>';
                }
                
        
            }
            else
            {
                echo 'Make:<br>
                <select name = "make">
                    <option value="CLONE">CLONE</option>
                    <option value="HP">HP</option>
                    <option value="LENOVO">LENOVO</option>
                    <option value="IBM">IBM</option>
                    <option value="DELL">DELL</option>
                </select>
                <br><br>';
            }

            //model
            if(isset($_GET["model"]))
            {
                $model = $_GET["model"];
                echo '<input type="text" name = "model" placeholder = "Model" value = "'.$model.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "model" placeholder = "Model" class="gen_input"> <br><br>';
            }

            //serial_no
            if(isset($_GET["serial_no"]))
            {
                $serial_no = $_GET["serial_no"];
                echo '<input type="text" name = "serial_no" placeholder = "Serial_No" value = "'.$serial_no.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "serial_so" placeholder = "Serial_No" class="gen_input"> <br><br>';
            }

            //hostname
            if(isset($_GET["hostname"]))
            {
                $hostname = $_GET["hostname"];
                echo '<input type="text" name = "hostname" placeholder = "hostname" value = "'.$hostname.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "hostname" placeholder = "hostname" class="gen_input"> <br><br>';
            }

            //new_hostname
            if(isset($_GET["new_hostname"]))
            {
                $new_hostname = $_GET["new_hostname"];
                echo '<input type="text" name = "new_hostname" placeholder = "new_hostname" value = "'.$new_hostname.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "new_hostname" placeholder = "new_hostname" class="gen_input"> <br><br>';
            }

            //primary_ip
            if(isset($_GET["primary_ip"]))
            {
                $primary_ip = $_GET["primary_ip"];
                echo '<input type="text" name = "primary_ip" placeholder = "primary_ip" value = "'.$primary_ip.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "primary_ip" placeholder = "primary_ip" class="gen_input"> <br><br>';
            }

            //mac_address
            if(isset($_GET["mac_address"]))
            {
                $mac_address = $_GET["mac_address"];
                echo '<input type="text" name = "mac_address" placeholder = "mac_address" value = "'.$mac_address.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "mac_address" placeholder = "mac_address" class="gen_input"> <br><br>';
            }
            
        echo "</div>";
        echo "<div class='second_form_half'>";

            //OS
            echo "OS <br>";
            //windows_edition
            if(isset($_GET["windows_edition"]))
            {
                $windows_edition = $_GET["windows_edition"];

                if($windows_edition == "ENT")
                {
                    echo 'Windows Edition: <br>
                        <input type="radio" name="windows_edition" value="ENT" checked = "true"> ENT</input>
                        <input type="radio" name="windows_edition" value="PRO"> PRO</input>
                        <input type="radio" name="windows_edition" value="HOME"> HOME</input> <br><br>';
                }
                elseif($windows_edition == "PRO")
                {
                    echo 'Windows Edition: <br>
                    <input type="radio" name="windows_edition" value="ENT"> ENT</input>
                    <input type="radio" name="windows_edition" value="PRO" checked = "true"> PRO</input>
                    <input type="radio" name="windows_edition" value="HOME"> HOME</input> <br><br>';
                }
                elseif($windows_edition == "HOME")
                {
                    echo 'Windows Edition: <br>
                    <input type="radio" name="windows_edition" value="ENT"> ENT</input>
                    <input type="radio" name="windows_edition" value="PRO"> PRO</input>
                    <input type="radio" name="windows_edition" value="HOME" checked = "true"> HOME</input> <br><br>';
                }
                elseif($windows_edition != "ENT" || $windows_edition != "PRO" || $windows_edition != "HOME")
                {
                    echo 'Windows Edition: <br>
                    <input type="radio" name="windows_edition" value="ENT"> ENT</input>
                    <input type="radio" name="windows_edition" value="PRO"> PRO</input>
                    <input type="radio" name="windows_edition" value="HOME"> HOME</input> <br><br>';
                }
            }
            else
            {
                echo 'Windows Edition: <br>
                <input type="radio" name="windows_edition" value="ENT"> ENT</input>
                <input type="radio" name="windows_edition" value="PRO"> PRO</input>
                <input type="radio" name="windows_edition" value="HOME"> HOME</input> <br><br>';
            }

            //windows_version
            if(isset($_GET["windows_version"]))
            {
                $windows_version = $_GET["windows_version"];

                if($windows_version == "XP")
                {
                    echo 'Windows Version:<br>
                        <input type="radio" name="windows_version" value="XP" checked = "true"> XP</input>
                        <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                        <input type="radio" name="windows_version" value="7"> 7</input>
                        <input type="radio" name="windows_version" value="8"> 8</input>
                        <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                        <input type="radio" name="windows_version" value="10"> 10</input><br><br>';
                }
                elseif($windows_version == "VISTA")
                {
                    echo 'Windows Version:<br>
                    <input type="radio" name="windows_version" value="XP"> XP</input>
                    <input type="radio" name="windows_version" value="VISTA" checked = "true"> VISTA</input>
                    <input type="radio" name="windows_version" value="7"> 7</input>
                    <input type="radio" name="windows_version" value="8"> 8</input>
                    <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                    <input type="radio" name="windows_version" value="10"> 10</input><br><br>';
                }
                elseif($windows_version == "7")
                {
                    echo 'Windows Version:<br>
                    <input type="radio" name="windows_version" value="XP"> XP</input>
                    <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                    <input type="radio" name="windows_version" value="7" checked = "true"> 7</input>
                    <input type="radio" name="windows_version" value="8"> 8</input>
                    <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                    <input type="radio" name="windows_version" value="10"> 10</input> <br><br>';
                }
                elseif($windows_version == "8")
                {
                    echo 'Windows Version:<br>
                        <input type="radio" name="windows_version" value="XP"> XP</input>
                        <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                        <input type="radio" name="windows_version" value="7"> 7</input>
                        <input type="radio" name="windows_version" value="8" checked = "true"> 8</input>
                        <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                        <input type="radio" name="windows_version" value="10"> 10</input><br> <br>';
                }
                elseif($windows_version == "8.1")
                {
                    echo 'Windows Version:<br>
                        <input type="radio" name="windows_version" value="XP"> XP</input>
                        <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                        <input type="radio" name="windows_version" value="7"> 7</input>
                        <input type="radio" name="windows_version" value="8"> 8</input>
                        <input type="radio" name="windows_version" value="8.1" checked = "true"> 8.1</input>
                        <input type="radio" name="windows_version" value="10"> 10</input><br> <br>';
                }
                elseif($windows_version == "10")
                {
                    echo 'Windows Version:<br>
                        <input type="radio" name="windows_version" value="XP"> XP</input>
                        <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                        <input type="radio" name="windows_version" value="7"> 7</input>
                        <input type="radio" name="windows_version" value="8"> 8</input>
                        <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                        <input type="radio" name="windows_version" value="10" checked = "true"> 10</input><br> <br>';
                }
                elseif($windows_version != "XP" || $windows_version != "VISTA" || $windows_version != "7" || $windows_version != "8"
                       || $windows_version != "8.1" || $windows_version != "10")
                {
                    echo 'Windows Version:<br>
                    <input type="radio" name="windows_version" value="XP"> XP</input>
                    <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                    <input type="radio" name="windows_version" value="7"> 7</input>
                    <input type="radio" name="windows_version" value="8"> 8</input>
                    <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                    <input type="radio" name="windows_version" value="10"> 10</input> <br><br>';
                }
            }
            else
            {
                echo 'Windows Version:<br>
                <input type="radio" name="windows_version" value="XP"> XP</input>
                <input type="radio" name="windows_version" value="VISTA"> VISTA</input>
                <input type="radio" name="windows_version" value="7"> 7</input>
                <input type="radio" name="windows_version" value="8"> 8</input>
                <input type="radio" name="windows_version" value="8.1"> 8.1</input>
                <input type="radio" name="windows_version" value="10"> 10</input> <br><br>';
            }

            //antivirus
            if(isset($_GET["antivirus"]))
            {
                $antivirus = $_GET["antivirus"];
                echo '<input type="text" name = "antivirus" placeholder = "antivirus" value = "'.$antivirus.'" class="gen_input"><br> <br>';
            }
            else
            {
                echo '<input type="text" name = "antivirus" placeholder = "antivirus" class="gen_input"> <br><br>';
            }

            //ms_office_edition
            if(isset($_GET["ms_office"]))
            {
                $ms_office_edition = $_GET["ms_office"];

                if($ms_office_edition == "ENT")
                {
                    echo 'MS Office Edition:<br>
                        <input type="radio" name="ms_office" value="ENT" checked = "true"> ENT</input>
                        <input type="radio" name="ms_office" value="PRO"> PRO</input> <br><br>';
                }
                elseif($ms_office_edition == "PRO")
                {
                    echo 'MS Office Edition:<br>
                    <input type="radio" name="ms_office" value="ENT"> ENT</input>
                    <input type="radio" name="ms_office" value="PRO" checked = "true"> PRO</input> <br><br>';
                }
                elseif($ms_office_edition != "ENT" || $ms_office_edition != "PRO")
                {
                    echo 'MS Office Edition:<br>
                    <input type="radio" name="ms_office" value="ENT"> ENT</input>
                    <input type="radio" name="ms_office" value="PRO"> PRO</input> <br><br>';
                }
            }
            else
            {
                echo 'MS Office Edition:<br>
                <input type="radio" name="ms_office" value="ENT"> ENT</input>
                <input type="radio" name="ms_office" value="PRO"> PRO</input><br> <br>';
            }

            //ms_office_version
            if(isset($_GET["ms_office_version"]))
            {
                $ms_office_version = $_GET["ms_office_version"];

                if($ms_office_version == "2007")
                {
                    echo 'MS Office Version:<br>
                        <input type="radio" name="ms_office_version" value="2007" checked = "true"> 2007</input>
                        <input type="radio" name="ms_office_version" value="2013"> 2013</input>
                        <input type="radio" name="ms_office_version" value="2016"> 2016</input><br> <br>';
                }
                elseif($ms_office_version == "2013")
                {
                    echo 'MS Office Version:<br>
                    <input type="radio" name="ms_office_version" value="2007"> 2007</input>
                    <input type="radio" name="ms_office_version" value="2013" checked = "true"> 2013</input>
                    <input type="radio" name="ms_office_version" value="2016"> 2016</input><br> <br>';
                }
                elseif($ms_office_version == "2016")
                {
                    echo 'MS Office Version:<br>
                    <input type="radio" name="ms_office_version" value="2007"> 2007</input>
                    <input type="radio" name="ms_office_version" value="2013"> 2013</input>
                    <input type="radio" name="ms_office_version" value="2016" checked = "true"> 2016</input><br> <br>';
                }
                elseif($ms_office_version != "2007" || $ms_office_version != "2013" || $ms_office_version != "2016")
                {
                    echo 'MS Office Version:<br>
                    <input type="radio" name="ms_office_version" value="2007"> 2007</input>
                    <input type="radio" name="ms_office_version" value="2013"> 2013</input>
                    <input type="radio" name="ms_office_version" value="2016"> 2016</input> <br><br>';
                }
            }
            else
            {
                echo 'MS Office Version:<br>
                <input type="radio" name="ms_office_version" value="2007"> 2007</input>
                <input type="radio" name="ms_office_version" value="2013"> 2013</input>
                <input type="radio" name="ms_office_version" value="2016"> 2016</input> <br><br>';
            }

            //netwerk acces point
            if(isset($_GET["net_AP"]))
            {
                $net_ap = $_GET["net_AP"];
                echo '<input type="text" name = "net_AP" placeholder = "Netwerk acces point" value = "'.$net_ap.'" class="gen_input"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "net_AP" placeholder = "Netwerk acces point" class="gen_input"> <br><br>';
            }

              //status
              if(isset($_GET["status"]))
              {
                  $status = $_GET["status"];
  
                  if($status == "defect")
                  {
                      echo 'Status:<br>
                          <input type="radio" name="status" value="defect" checked = "true"> Defect</input>
                          <input type="radio" name="status" value="operationeel"> Operationeel</input>';
                  }elseif($status == "operationeel")
                  {
                    echo 'Status:<br>
                    <input type="radio" name="status" value="defect"> Defect</input>
                    <input type="radio" name="status" value="operationeel" checked = "true"> Operationeel</input>';
                  }
                }
                else{
                    echo 'Status:<br>
                    <input type="radio" name="status" value="defect"> Defect</input>
                    <input type="radio" name="status" value="operationeel"> Operationeel</input>';
                }
            echo "<br><br>";
            //notes
            if(isset($_GET["notes"]))
            {
                $notes = $_GET["notes"];
                echo '<input type="text" name = "notes" placeholder = "notes" value = "'.$notes.'"class="notes"> <br><br>';
            }
            else
            {
                echo '<input type="text" name = "notes" placeholder = "notes" class="notes"> <br><br>';
            }
 
     echo '   </div>

     <button type = "submit" name = "submit" class="register">REGISTER!</button>

     <p class="cpr">Created by: Shaniel Samadhan</p>
 </form>

 </div>';
        }
        else{
            header("Location: index.php");
            ob_flush();
        }
    ?>
    <?php

      if(!isset($_GET["form"]))
      {
        exit();
      }
      else
      {
        $formCheck = $_GET["form"];

        if($formCheck == "empty")
        {
            //javascript pop up
            echo "<script> alert('Form is empty! Please fill in all fields!'); </script>";
            exit();
        }
      }
    ?>

</body>
</html>