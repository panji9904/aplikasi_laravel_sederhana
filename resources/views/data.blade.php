<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Karyawan</title>
    <style>
          .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
            margin-right: 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .navbar a:hover {
            background-color: #555;
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
        .container input[type="email"] {
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
    <div class="navbar">
        <ul>
            <li><a href="/data">Input Data Karyawan</a></li>
            <li><a href="/karyawan">karyawan</a></li>
            <li><a href="/laporan">Laporan Penjualan</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>Form Data Karyawan</h2>
        <form action="submit_karyawan.php" method="POST">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="posisi" placeholder="Posisi" required>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
