<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THE SHOP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body class=>
<h1 class="text-center text-success">Welcome to My shop</h1>
<p class="text-center text-info">Please register here.</p>
<div class="col-4"></div>
<div class="col-4">
    <form method="post" action="register_handler.php" class="was-validated">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="password" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me.</label>
        </div>
        <button name="btn_reg" type="submit" class="btn btn-block btn-outline-success">Register</button>
        <a href="subscribers.php" class="btn-block btn btn-danger">View subscribers</a>
        <button type="reset" class="btn btn-block btn-secondary">Clear</button>
    </form>
</div>
<div class="col-4"></div>


</body>
</html>