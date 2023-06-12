<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
         /* Header */
         header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .container h2 {
        margin-bottom: 20px;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }

    .container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/konser">Konser</a></li>
            </ul>
        </nav>
        
        
    </header>
    <div class="container">
        <h2>Form Registrasi</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="submit" value="Daftar">
        </form>
        
    </div>
</body>
</html>
