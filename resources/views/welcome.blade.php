<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konser Musik</title>
    <style>
        /* Reset CSS */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

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

        /* Hero Section */
        .hero {
            background-image: url('hero-background.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            text-align: center;
        }

        .hero h1 {
            font-size: 36px;
            color: #fff;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: rgb(25, 10, 10);
            margin-bottom: 20px;
        }

        .btn {
            background-color: #ff4500;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        /* Featured Concerts Section */
        .featured-concerts {
            padding: 40px;
            text-align: center;
        }

        .featured-concerts h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .concerts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .concert {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .concert img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .concert h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .concert p {
            font-size: 14px;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/konser">Konser</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
        
        
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di Konser Musik</h1>
            <p>Temukan konser musik terkini dan pesan tiket sekarang!</p>
            <a href="/login" class="btn">Pesan Tiket</a>

        </div>
    </section>

    <section class="featured-concerts">
        <h2>Konser Terkini</h2>
        <div class="concerts-grid">
            <div class="concert">
                <img src="/img/1.jpg" alt="Konser 1">
                <h3>Peterpan</h3>
                <p>Harga Tiket : 90k </p>
                <p>Lokasi : Jakarta </p>
                <p>Tanggal Konser : 27 Juli 2023 </p>
            </div>
            <div class="concert">
                <img src="/img/2.jpg" alt="Konser 2">
                <h3>Last Child</h3>
                <p>Harga Tiket : 50k </p>
                <p>Lokasi : Pekanbaru </p>
                <p>Tanggal Konser : 09 Agustus 2023 </p>
            </div>
            <div class="concert">
                <img src="/img/3.jpg" alt="Konser 3">
                <h3>Sheila On 7</h3>
                <p>Harga Tiket : 100k </p>
                <p>Lokasi : Medan </p>
                <p>Tanggal Konser : 06 Juni 2023 </p>
            </div>
        </div>
    </section>
    

    <footer>
        <p>&copy; Panji Prasetyo 2023.</p>
    </footer>
</body>
</html>
