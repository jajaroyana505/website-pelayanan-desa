<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <table>
        <form action="<?= base_url('auth'); ?>" method="POST">
            <label for="username">username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">password:</label>
            <input type="text" id="password" name="password"><br><br>
            <input type="submit" value="Submit" name="masuk">
        </form>
    </table>
</body>

</html>