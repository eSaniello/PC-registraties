<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body class='index_body'>
    <div align="center" class='admin_div'>
    <form method="POST" action="login.php" class='form_admin'>
        <h1>Admin verification.</h1>
        <p>Only administrators can add new user.</P><br>
        <span>Enter admin password</span><br><br>
        <input type="password" name="admin_pw" placeholder="password" class='admin_pw'><br><br>
        <button type="submit" name="btn_admin" class="ok">OK</button>
    </form>
</div>
</body>
</html>