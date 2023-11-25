<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* CSS styles */
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
        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .logo img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
        .logo span {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2rem;
        }
        .centered-heading {
            text-align: center;
            margin-top: 30px;
        }
        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        section h2 {
            font-size: 24px;
            margin-top: 20px;
        }
        section ul {
            list-style-type: none;
            padding: 0;
        }
        section ul li {
            margin-bottom: 10px;
        }
        .info-button {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .info-button:hover {
            background-color: #444;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
        footer p {
            margin: 0;
        }
    </style>
    <title>Menu Utama</title>
</head>
<body>
    <header>
        <div class="navigation">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Honda_Logo.svg" alt="PT.HONDA Logo">
                <span>Perusahaan PT.HONDA</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                </ul>
            </nav>
            <a href="logout.php" class="button-Logout">Logout</a>
        </div>
    </header>
    <h1 class="centered-heading">Selamat Datang di Menu Utama</h1>
    <p class="centered-heading">Silakan klik menu di bawah untuk melihat informasi tentang PT.HONDA.</p>
    <section>
        <h2>Menu Aplikasi</h2>
        <ul>
            <li><a href="informasi.php" class="info-button">Informasi PT.HONDA</a></li>
            <!-- Tambahkan tautan ke halaman-halaman lain sesuai kebutuhan -->
        </ul>
    </section>

    <footer>
        <p>© Copyright by 21552011347_IRENIUS BONAN_TIFRP221PB</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
