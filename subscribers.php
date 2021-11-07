<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our subscribers</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-center text-info">THE SHOP Subsribers</h1>
<table class="table table-borderless text-success text-center text-center table-dark">
    <tr class="table table-bordered tab-content">
        <th class="text-info">NAME</th>
        <th class="text-info">EMAIL</th>
        <th class="text-danger">DELETE</th>
        <th class="text-success"> EDIT</th>
    </tr>
    <?php
    require "connection.php";
    $selectQuery = "SELECT `id`, `name`, `email`, `password` FROM `subscribers` WHERE 1";
    $subscribers = mysqli_query($connection, $selectQuery);
    while ($row = mysqli_fetch_assoc($subscribers)){
        extract($row);
        echo "<tr>
<td class='text-info text-center'>$name</td>
<td class='text-info text-center'>$email</td>
<td><a href='#' class='btn btn-danger btn-block'>Delete</a></td>
<td><a href='#' class='btn btn-block btn-info'>Edit</a></td>
</tr>";
    }
    ?>
</table>

</body>
</html>
