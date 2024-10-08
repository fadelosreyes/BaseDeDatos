<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=datos', 'datos', '1234');
    $stmt = $pdo->query('SELECT * FROM departamentos ORDER BY codigo');
    ?>
    <table border="1">
        <thead>
            <th>Codigo</th>
            <th>Denominacon</th>
        </thead>    
        <tbody>
            <?php foreach ($stmt as $fila): ?>
                <tr>
                    <td><?= $fila['codigo'] ?></td>
                    <td><?= $fila['denominacion'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- // foreach ($stmt as $fila) {
    //     var_dump($fila);
    // }

    // $fila = $stmt->fetch()
    // foreach ($filas as $fila) {
    //     var_dump($fila);
    // }

    // while ($fila = $stmt->fetch()) {
    //    var_dump($fila);
    // } -->
</body>
</html>