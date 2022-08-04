<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Master.css">
    <title>Daftar Username / Password</title>
</head>

<body>

    <header>Registration</header>
    <section>
        <article id="entry">
            <form action="HashRegister.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" maxlength="20" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" maxlength="10" required>
                <input type="submit" value="Register">
            </form>

        </article>
    </section>

</body>

</html>