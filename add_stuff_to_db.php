<?php
    ob_start();
?>
<?php

    if(isset($_POST["submit"]))
    {
        include "dbh.php";

        $sql_current_date_format = date("Y-m-d");
    
        $technician = mysqli_real_escape_string($connection , $_POST["technician"]);
        $office_department = mysqli_real_escape_string($connection , $_POST["office_department"]);
        $department = mysqli_real_escape_string($connection , $_POST["department"]);
        $user = mysqli_real_escape_string($connection , $_POST["user"]);
        $user_login = mysqli_real_escape_string($connection , $_POST["user_login"]);
        $device = mysqli_real_escape_string($connection , $_POST["device"]);
        $make = mysqli_real_escape_string($connection , $_POST["make"]);
        $model = mysqli_real_escape_string($connection , $_POST["model"]);
        $serial_no = mysqli_real_escape_string($connection , $_POST["serial_no"]);
        $hostname = mysqli_real_escape_string($connection , $_POST["hostname"]);
        $new_hostname = mysqli_real_escape_string($connection , $_POST["new_hostname"]);
        $primary_ip = mysqli_real_escape_string($connection , $_POST["primary_ip"]);
        $mac = mysqli_real_escape_string($connection , $_POST["mac_address"]);
        $windows_edition = mysqli_real_escape_string($connection , $_POST["windows_edition"]);
        $windows_version = mysqli_real_escape_string($connection , $_POST["windows_version"]);
        $antivirus = mysqli_real_escape_string($connection , $_POST["antivirus"]);
        $ms_office = mysqli_real_escape_string($connection , $_POST["ms_office"]);
        $ms_office_version = mysqli_real_escape_string($connection , $_POST["ms_office_version"]);
        $net_AP = mysqli_real_escape_string($connection , $_POST["net_AP"]);
        $status = mysqli_real_escape_string($connection , $_POST["status"]);
        $notes = mysqli_real_escape_string($connection , $_POST["notes"]);


        if(empty($technician) || empty($office_department) || empty($department) || empty($user) || empty($device) || empty($make) ||
           empty($model) || empty($serial_no) || empty($hostname) || empty($mac) ||
           empty($windows_edition) || empty($windows_version) || empty($antivirus) || empty($ms_office) || empty($ms_office_version) || 
           empty($net_AP) || empty($status) || empty($notes))
           {
                header("Location: form.php?form=empty&technician=$technician&office_department=$office_department&user=$user&user_login=$user_login&device=$device&make=$make&model=$model&serial_no=$serial_no&hostname=$hostname&new_hostname=$new_hostname&primary_ip=$primary_ip&mac_address=$mac&windows_edition=$windows_edition&windows_version=$windows_version&antivirus=$antivirus&ms_office=$ms_office&ms_office_version=$ms_office_version&net_AP=$net_AP&status=$status&notes=$notes");
                exit();
                ob_flush();
                exit();
           }
        else
        {
            $sql = "INSERT INTO info(technician , datum , office, department , user , user_login , device , make , model , serial_no , hostname ,           
            new_hostname , primary_ip , mac_address , windows_edition , windows_version , antivirus , ms_office_edition , 
            ms_office_version , netwerk_acces_point , status , notes) 
            VALUES('$technician' , '$sql_current_date_format' , '$office_department' , '$department' , '$user' , '$user_login' , '$device' , '$make' , '$model' , '$serial_no' , 
            '$hostname' , '$new_hostname' , '$primary_ip' , '$mac' , '$windows_edition' , '$windows_version' , '$antivirus' , 
            '$ms_office' , '$ms_office_version' , '$net_AP' ,'$status' , '$notes');";

            $result = mysqli_query($connection , $sql); 

            header("Location: form.php?form=succes");
            exit();
            ob_flush();
        }
   

    }
    else
    {
        header("Location: form.php?form=error");
        exit();
        ob_flush();
    }

    
