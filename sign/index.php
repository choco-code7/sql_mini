<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
    <header>
        <h1>Sign Up Now</h1>
    </header>

    <div class="container">
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name" >
            <input type="text" name="last" placeholder="Last Name" >
            <input type="text" name="email" placeholder="Email" >
            <input type="text" name="uid" placeholder="Username" >
            <input type="password" name="pwd" placeholder="Password" >
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>

</body>
</html>
