<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket Konser</title>
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

        .featured-concerts {
            text-align: center;
            margin-top: 20px;
        }

        .featured-concerts h2 {
            margin-bottom: 20px;
        }

        .concerts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .concert {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .concert img {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        .concert h3 {
            margin-bottom: 10px;
        }

        .concert p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
        </nav>
        
        
    </header>
    <section class="featured-concerts">
        <h2>Konser Terkini</h2>
        <div class="concerts-grid">
            <div class="concert">
                <img src="/img/1.jpg" alt="Konser 1">
                <h3>Peterpan</h3>
                <p>Harga Tiket: 90k</p>
                <p>Lokasi: Jakarta</p>
                <p>Tanggal Konser: 27 Juli 2023</p>
            </div>
            <div class="concert">
                <img src="/img/2.jpg" alt="Konser 2">
                <h3>Last Child</h3>
                <p>Harga Tiket: 50k</p>
                <p>Lokasi: Pekanbaru</p>
                <p>Tanggal Konser: 09 Agustus 2023</p>
            </div>
            <div class="concert">
                <img src="/img/3.jpg" alt="Konser 3">
                <h3>Sheila On 7</h3>
                <p>Harga Tiket: 100k</p>
                <p>Lokasi: Medan</p>
                <p>Tanggal Konser: 06 Juni 2023</p>
            </div>
        </div>
    </section>
</body>
</html>
