<?php
    $link = 'https://ggio.link/apprendre-php';
    header('Location: ' . $link);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprendre PHP</title>
</head>
<body>
    <a href="<?php echo $link ?>">Cliquer pour être redirigé sur <?php echo $link ?></a>
</body>
</html>
