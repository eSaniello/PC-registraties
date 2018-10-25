<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body class= "index_body">
  
    <div align="center">

    <form method="POST" action="login.php" class="form">
        <h1>Log in</h1>
        <br>    
        <?php
        if(isset($_GET["user_name"]))
        {
            $user = $_GET["user_name"];
            echo '<input type="text" placeholder="User name" name="user_name" value="'.$user.'" class="gen_input"><br>';
        }
        else
        {
            echo '<input type="text" placeholder="User name" name="user_name" class="gen_input"><br>';
        }
        ?>
        <br>
        <input type="password" placeholder="Password" name="password" class="gen_input"><br><br>
        <button type="submit" name="login" class='login'>Log in</button><br><br>
        <button type="submit" name="register" class='new'>New user?</button><br><br>
    </form>
    <?php

        if(!isset($_GET["login"]))
        {
          exit();
        }
        else
        {
             $formCheck = $_GET["login"];

            if($formCheck == "empty")
            {
                //javascript pop up
                echo "<script> alert('Form is empty! Please fill in all fields!'); </script>";
                exit();
            }
            elseif($formCheck == "succes")
            {
                header("Location: index.php?login=succes");
                exit();
            }
        }
        ob_flush();
    ?>
</div>
</body>
</html>