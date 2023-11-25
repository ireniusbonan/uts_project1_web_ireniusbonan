<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .logo img {
            width: 100px; /* Sesuaikan lebar logo dengan kebutuhan */
            height: auto;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        form h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #444;
        }
        p {
            text-align: center;
            margin-top: 15px;
        }
        p a {
            color: #1e90ff;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Honda_Logo.svg" alt="PT.HONDA Logo">
            <span>Perusahaan PT.HONDA</span>
        </div>
    </header>

    <form action="index.php" method="post">
        <h1>Selamat Datang di PT Honda</h1>
        <p>Silakan login untuk mengakses menu utama.</p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </form>

    <footer>
        <p>© Copyright by 21552011347_IRENIUS BONAN_TIFRP221PB</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
