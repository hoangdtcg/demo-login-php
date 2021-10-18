
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h3>Hello <?php echo $_SESSION["user"]; ?></h3>
<a href="index.php?page=logout">Log out</a>
<a href="index.php?page=customer-create">Tạo mới Customer</a>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>customerNumber</th>
                <th>customerName</th>
                <th>contactLastName</th>
                <th>contactFirstName</th>
                <th>phone</th>
                <th>addressLine1</th>;
                <th>city</th>
                <th>country</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($customers as $customer):?>
        <tr>
            <td><?php echo $customer["customerNumber"]?></td>
            <td><?php echo $customer["customerName"]?></td>
            <td><?php echo $customer["contactLastName"]?></td>
            <td><?php echo $customer["contactFirstName"]?></td>
            <td><?php echo $customer["phone"]?></td>
            <td><?php echo $customer["addressLine1"]?></td>
            <td><?php echo $customer["city"]?></td>
            <td><?php echo $customer["country"]?></td>
            <td><a href="index.php?page=detail&id=<?php echo $customer["customerNumber"]?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
