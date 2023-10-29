<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./CSS/home.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <nav >
            <div class="logo">
                <a href="">Vi-Book</a>
            </div>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button>Aktifitas</button>
                        <div class="dropdown-options">
                            <a href="galeri.php">Gallery</a>
                            <a href="berita.php">Berita</a>
                            <a href="notif.php">Pemberitahuan</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button>Kategori</button>
                        <div class="dropdown-options">
                            <a href="pelajaran.php">Pelajaran</a>
                            <a href="fiksi.php">Fiksi</a>
                            <a href="bio.php">Biografi</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                    <button>Menu</button>
                        <div class="dropdown-options">
                            <a href="struktur.php">Struktur Organisasi</a>
                            <a href="guide.php">Panduan</a>
                            <a href="tatib.php">Tata Tertib</a>
                            <a href="faq.php">FAQ</a>
                        </div>
                    </div>
                </li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>
    </div>

    <div class="home-container">
        <h2 class="title">Welcome To Vi-Book</h2>
        <p class="subtitle">( Selamat datang untuk memesan)</p>
    </div>
</body>
</html>