<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to</title>
</head>
<body>
    <h1>Laço de repetição - FOR</h1>
    <?php
        for($v1=0; $v1<=10; $v1++){
            for($v2=0; $v2<=10; $v2++){
            echo $v1 . "*" . $v2 . "=" . $v1*$v2 . "<br>";
        }
    } echo "<br>"
    ?>
</body>
</html>