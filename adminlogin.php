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
<div class="admin-log-panel">
    <div class="container">
    <div class="row">       
     <div class="admin-login col-12 col-xl-12 col-sm-12 col-md-12">
            <form action="connection/admin-log.php" Method="post">
                <input class="inp-e" type="text" placeholder="Email" name="email"><br>
                <input  class="inp-p" type="password" placeholder="Password" name="password"><br>
                <input type="submit" name="admin-submit" class="btn btn-success">
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>