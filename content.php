<?php
    $host = "172.21.0.2";
    $dbUsername = "root";
    $dbPassword = "amankok";
    $db = "trucorp-db";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $db);

    if (!$conn) {
        die('Something went wrong. Cannot conect to MySQL');
    }

    $query = "SELECT * FROM users";
    $res = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
    </tr>
    <?php
        while($post= $res->fetch_object()){
            ?>
    <tr>
        <td><?=$post->Nama?></td>
        <td><?=$post->Alamat?></td>
        <td><?=$post->Jabatan?></td>
    </tr>
    <?php
        }

    ?>
    </table>
</body>
</html>
