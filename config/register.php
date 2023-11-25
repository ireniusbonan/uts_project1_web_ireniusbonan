<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #333;
            color: #fff;
            width: 100%;
            padding: 15px 0;
        }
        .logo img {
            width: 100px;
            height: auto;
            margin-right: 10px;
        }
        .logo span {
            font-size: 20px;
            font-weight: bold;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-top: 20px;
        }
        form h1 {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        button {
            padding: 8px 20px;
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        p {
            margin-top: 10px;
        }
        p a {
            color: #007bff;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
        footer {
            width: 100%;
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            margin-top: auto;
        }
        footer p {
            margin: 0;
        }
    </style>
    <title>Registrasi</title>
</head>
<body>
    <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Honda_Logo.svg" alt="PT.HONDA Logo">
        <span>Perusahaan PT.HONDA</span>
    </div>
    <form action="login.php" method="post">
        <h1>Daftar Akun</h1>
        <p>Isi formulir di bawah untuk membuat akun baru.</p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Daftar</button>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </form>

    <footer>
        <p>© Copyright by 21552011347_IRENIUS BONAN_TIFRP221PB</p>
    </footer>
</body>
</html>
