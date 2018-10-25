<?php
    session_start();
    ob_start();
?>
<?php
   if(isset($_POST["register"]))
   {
       include "dbh.php";

       $name = mysqli_real_escape_string($connection , $_POST["user_name"]);
       $pw = mysqli_real_escape_string($connection , $_POST["password"]);

       if(empty($name) || empty($pw))
       {
            header("Location: admin.php");
            exit();
            ob_flush();
       }
   }  
   elseif(isset($_POST["btn_admin"]))
   {
       include "dbh.php";
        $admin = mysqli_real_escape_string($connection , $_POST["admin_pw"]);
        $apw = "3Dp@oTa";
        if($admin == $apw)
        {
            header("Location: register.php?admin=succes");
            exit();
            ob_flush();
        }
        elseif($admin != $apw)
        {
            header("Location: admin.php?admin=fail");
            exit();
            ob_flush();
        }
   }
   elseif(isset($_POST["login"]))
   {
       include "dbh.php";
       $name = mysqli_real_escape_string($connection , $_POST["user_name"]);
       $pw = mysqli_real_escape_string($connection , $_POST["password"]);

       if(empty($name) || empty($pw))
       {
           header("Location: index.php?login=empty");
           exit();
           ob_flush();
       }
       else
       {
            $sql = "SELECT * from login where `user_name`='$name';";
            $query = mysqli_query($connection , $sql);
            $row = mysqli_fetch_array($query);

            $pw_verify = password_verify($pw , $row['password']);

            if($row["user_name"] == $name && $pw_verify == true)
            {
                $_SESSION['uid'] = $name;
                header("Location: form.php?login=succes");
                exit();
                ob_flush();
            }
            else
            {
                header("Location: index.php?login=failed");
                exit();
                ob_flush();
            }


       }
   }
   else
   {
       header("location: index.php?error");
       exit();
       ob_flush();
   }
?>