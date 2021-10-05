<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker | Programador a Bordo</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css"/>
</head>
<body>
<?php
$result = file_get_contents("http://node-container:9001/user");
$users = json_decode($result);
?>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Cellphone</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->cellphone; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>