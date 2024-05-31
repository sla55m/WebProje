<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="webcit.css">

</head>
<body>

    <?php
    if (isset($_GET['username'])) {
        $username = htmlspecialchars($_GET['username']);
        echo "<h1>Hoşgeldiniz Selim Altın $username</h1>";
    } else {
        header("Location: login.html");
        exit();
    }
    ?>
</body>
</html>