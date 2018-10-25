<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "pc_registration_info";

    $connection = mysqli_connect($dbServername , $dbUsername , $dbPassword , $dbName);

    // Check connection
    if (mysqli_connect_errno())
    {
         echo "<script> alert('Failed to connect to MySQL: ' . mysqli_connect_error()'); </script>";
    }

    /*
    CREATE TABLE info(
        nummer INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        technician VARCHAR(255) NOT NULL,
        datum DATE NOT NULL,
        office VARCHAR(255) NOT NULL,
        department varchar(255) NOT NULL,
        user VARCHAR(255) NOT NULL,
        user_login VARCHAR(255),
        device VARCHAR(255) NOT NULL,
        make VARCHAR(255) NOT NULL,
        model VARCHAR(255) NOT NULL,
        serial_no VARCHAR(255) NOT NULL,
        hostname VARCHAR(255) NOT NULL,
        new_hostname VARCHAR(255) ,
        primary_ip VARCHAR(255),
        mac_address VARCHAR(255) NOT NULL,
        windows_edition VARCHAR(255) NOT NULL,
        windows_version VARCHAR(255) NOT NULL,
        antivirus VARCHAR(255) NOT NULL,
        ms_office_edition VARCHAR(255) NOT NULL,
        ms_office_version VARCHAR(255) NOT NULL,
        netwerk_acces_point VARCHAR(255),
        status VARCHAR(255) NOT NULL,
        notes VARCHAR(4096) NOT NULL
    );
    */
