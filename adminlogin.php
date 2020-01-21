<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin LOgin</title>
    <?php include_once 'includes/css-links.php'?>
</head>

<body>

    <div class="container">
        <div class="admin-login">
            <form action="connection/admin-log.php" Method="post">
                <input type="text" placeholder="Email" name="email"><br>
                <input type="password" placeholder="Password" name="password"><br>
                <input type="submit" name="submit" class="btn btn-success">
            </form>
        </div>
    </div>

</body>

</html>