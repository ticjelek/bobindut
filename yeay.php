<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usaha Bola Ubi Ungu - Profil Perusahaan</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body { 
            font-family: "Times New Roman", Georgia, Serif; 
            margin: 0; 
            padding: 0; 
            overflow-x: hidden; 
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display", serif;
            letter-spacing: 5px;
        }
        .w3-button {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .w3-button:hover {
            background-color: #8e44ad;
            color: white;
        }
        .w3-opacity-min {
            opacity: 0.8;
            transition: opacity 0.5s ease;
        }
        .w3-opacity-min:hover {
            opacity: 1;
        }
        .ball {
            width: 120px;
            height: 120px;
            background-color: #8e44ad;
            border-radius: 50%;
            margin: 0 auto;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
        header {
            position: relative;
            text-align: center;
            color: white;
        }
        header img {
            width: 100%;
            height: auto;
            filter: brightness(70%);
        }
        header .w3-display-bottomleft {
            bottom: 20px;
            left: 20px;
        }
        .w3-row .w3-padding-64 {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }
        .w3-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 10px;
            overflow: hidden;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.4);
            transform: scale(1.02);
        }
        .card img {
            width: 100%;
        }
        footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        form input, form button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="#home" class="w3-bar-item w3-button">Usaha Bola Ubi Ungu</a>
        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">Tentang</a>
            <a href="#vision" class="w3-bar-item w3-button">Visi & Misi</a>
            <a href="#contact" class="w3-bar-item w3-button">Kontak</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="bondut.jpg" alt="Bola Ubi Ungu">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
        <h1 class="w3-xxlarge">Usaha Bola Ubi Ungu</h1>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <div class="card">
                <img src="kemasan_bobindut.jpg" alt="Bola Ubi Ungu">
            </div>
        </div>
        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">Tentang Kami</h1><br>
            <h5 class="w3-center">Inovasi dalam Setiap Gigitan</h5>
            <p class="w3-large">Usaha Bola Ubi Ungu adalah perusahaan inovatif yang memproduksi bola ubi ungu berkualitas tinggi. Kami berdedikasi untuk menghadirkan produk yang lezat dan bergizi dengan menggunakan bahan-bahan alami dan proses pembuatan yang ramah lingkungan.</p>
            <div class="ball"></div>
        </div>
    </div>

    <hr>

    <!-- Vision & Mission Section -->
    <div class="w3-row w3-padding-64" id="vision">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Visi & Misi</h1><br>
            <div class="w3-container">
                <h4>Visi</h4>
                <p class="w3-text-grey">Menjadi pemimpin pasar dalam industri makanan sehat dengan inovasi produk yang berkelanjutan.</p><br>
                <h4>Misi</h4>
                <ul class="w3-text-grey">
                    <li>Menawarkan produk bola ubi ungu berkualitas tinggi dan bergizi.</li>
                    <li>Mempraktikkan produksi yang ramah lingkungan.</li>
                    <li>Meningkatkan kesejahteraan masyarakat melalui produk kami.</li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-64" id="contact">
        <h1>Kontak Kami</h1><br>
        <p>Kami siap membantu Anda dengan informasi lebih lanjut tentang produk kami. Jangan ragu untuk menghubungi kami melalui telepon atau email, atau dengan mengisi formulir di bawah ini.</p>
        <p class="w3-text-blue-grey w3-large"><b>Jl. Everday No. 5, Bogor, Indonesia</b></p>
        <p>Email: <a href="mailto:info@bolaubiungu.com" class="w3-text-blue-grey">info@bolaubiungu.com</a></p>
        <p>Telepon: +62 123 4567 890</p>
        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Nama" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Pesan atau Kebutuhan Khusus" required name="Message"></p>
            <p><button class="w3-button w3-light-grey w3-section" type="submit">KIRIM PESAN</button></p>
        </form>
    </div>

</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>&copy; 2024 Usaha Bola Ubi Ungu. Semua hak cipta dilindungi.</p>
</footer>

</body>
</html>
