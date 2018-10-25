<?php
    ob_start();
?>
<?php
   if(isset($_POST["register"]))
   {
       include "dbh.php";

       $name = mysqli_real_escape_string($connection , $_POST["user_name"]);
       $pw = mysqli_real_escape_string($connection , $_POST["password"]);
       $pw01 = mysqli_real_escape_string($connection , $_POST["password01"]);

       if(empty($name) || empty($pw) || empty($pw01))
       {
           header("Location: register.php?register=empty&user_name=$name");
           exit();
           ob_flush();
       }
       else
       {
           if($pw != $pw01)
           {
                header("Location: register.php?register=verify&user_name=$name");
                exit();
                ob_flush();
           }
           elseif($pw == $pw01)
           {
               $pw_hash = password_hash($pw , PASSWORD_DEFAULT);
                $sql_query = "insert into login(user_name, password) values('$name' , '$pw_hash');";
                $result = mysqli_query($connection , $sql_query);
                header("Location: index.php?registration=succes");
                exit();
                ob_flush();
           }
       }

   }  
   else
   {
       header("location: register.php?error");
       exit();
       ob_flush();
   }