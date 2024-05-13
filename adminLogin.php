<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>
</head>
<body>
    <main>
        <form action="scripts/adminAuth.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button type="submit">Log In</button>
        </form>
    </main>
</body>
</html>