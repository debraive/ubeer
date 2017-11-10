<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Document</title>
</head>
<body>
<div id="main">

    <form action="../app/edit.php" method="post">
        <input type="text" value="<?= $_POST['mail'] ?>" name="mail">
        <input type="hidden" value="<?= $_POST['id'] ?>" name="id">
        <input type="submit" value="save changes">
    </form>
</div>
</body>
</html>