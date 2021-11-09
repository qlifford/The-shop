<?php
if (isset($_GET["subscriber_id"])){
    $receivedName = $_POST["subscriber_name"];
    $receivedEmail = $_POST["subscriber_email"];
    $receivedPassword = $_POST["subscriber_password"];
    $receivedId = $_POST["subscriber_id"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updating subscribers</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-center text-success">THE SHOP</h1>
<p class="text-center text-info">Edit subscribers here!</p>
<div class="col-4"></div>
<div class="col-4">
    <form method="post" action="update_handler.php">

            <input value="<?php echo $receivedId?>" type="hidden" name="id">
        <div class="form-group">
            <label for="name">Name:</label>
            <input value="<?php echo $receivedName?>"class="form-control" id="name" placeholder="Enter your name" name="name" required>
        </div>
        <div class="form-group">
            <label for="password">Email:</label>
            <input value="<?php echo $receivedEmail?>" type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input value="<?php echo $receivedPassword?>" type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
        </div>
        <button name="btn_update" type="submit" class="btn btn-block btn-outline-success">Update</button>
        <a href="subscribers.php" class="btn-block btn btn-danger">Back</a>
    </form>
</div>
<div class="col-4"></div>

</body>
</html>