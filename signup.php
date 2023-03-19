<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
        <h1>Sign Up</h1>
        <form action="process-signup.php" method="post">
            <div>
                <label for="name">Username</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="password_confirmation">Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button>SignUp</button>
        </form>
</body>
</html>