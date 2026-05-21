<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portofolio Ahmad Dani Aljibal</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Segoe UI',sans-serif;
            background: linear-gradient(135deg, #092c7e 0%, #1e293b 100%);
            min-height:100vh;
            color:white;
        }

        nav{
            background: rgba(255,255,255,0.1);
            padding:18px;
            text-align:center;
            backdrop-filter: blur(10px);
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:bold;
        }

        nav a:hover{
            color:#38bdf8;
        }

        .container{
            max-width:1100px;
            margin:40px auto;
            padding:20px;
        }

        .card{
            background: rgba(255,255,255,0.12);
            border-radius:25px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
            text-align:center;
            margin-bottom:35px;
        }

        .profile-img{
            width:220px;
            height:280px;
            object-fit:cover;
            border-radius:20px;
            border:4px solid #38bdf8;
            margin-bottom:20px;
        }

        h1{
            font-size:2.2rem;
            margin-bottom:10px;
        }

        p{
            line-height:1.8;
            margin-top:10px;
        }

        .about-card{
            background: rgba(255,255,255,0.12);
            border-radius:25px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .about-card h2{
            text-align:center;
            margin-bottom:25px;
            font-size:2rem;
        }

        .gallery{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:20px;
        }

        .gallery-item{
            background: rgba(255,255,255,0.08);
            padding:15px;
            border-radius:20px;
            transition:0.3s;
        }

        .gallery-item:hover{
            transform:translateY(-5px);
        }

        .gallery-item img{
            width:100%;
            height:220px;
            object-fit:cover;
            border-radius:15px;
            margin-bottom:15px;
            border:3px solid #38bdf8;
        }

        .gallery-item p{
            font-size:14px;
            color:white;
        }

        @media(max-width:768px){
            .gallery{
                grid-template-columns:1fr;
            }
        }
        footer{
            margin-top: 40px;
            padding: 20px;
            text-align: center;
            background: rgba(255,255,255,0.08);
            color: white;
            font-size: 14px;
            line-height: 1.8;
            border-top: 1px solid rgba(255,255,255,0.15);
        }

        footer p{
            margin: 5px 0;
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="profil.php">Profil</a>
    <a href="aktivitas.php">Aktivitas</a>
</nav>

<div class="container">

    <div class="card">
        <img src="foto.jpg.jpeg" alt="Foto Ahmad Dani" class="profile-img">
        <h1>Ahmad Dani Aljibal</h1>
        <p>Mahasiswa Teknik Informatika FASTIKOM | Web Developer Pemula | Pecinta Otomotif</p>
        <p>
            Selamat datang di website portofolio pribadi saya. Website ini berisi informasi tentang profil, pengalaman, dan perjalanan saya dalam dunia teknologi.
        </p>
    </div>

    <div class="about-card">
    <h2>Tentang Saya</h2>

    <p class="about-text">
        Saya adalah mahasiswa Teknik Informatika yang memiliki minat besar dalam bidang teknologi,
        khususnya pengembangan web. Berasal dari Bengkulu Utara dan tumbuh di lingkungan perkebunan
        kelapa sawit, saya memiliki semangat untuk terus belajar dan mencari pengalaman baru di dunia
        pendidikan maupun teknologi. Awalnya saya lebih tertarik pada dunia otomotif, namun sejak
        menempuh pendidikan di jurusan Rekayasa Perangkat Lunak (RPL), saya mulai mengenal dan
        mendalami dunia IT hingga menjadi bidang yang saya tekuni saat ini.
    </p>

    <p class="about-text">
        Selain aktif dalam perkuliahan, saya juga aktif berorganisasi di Himpunan Mahasiswa Teknik
        Informatika dan mulai bergabung sejak semester 2. Melalui organisasi, saya belajar banyak
        tentang kerja sama tim, komunikasi, kepemimpinan, serta memperluas relasi. Saya percaya bahwa
        pengalaman akademik dan organisasi dapat berjalan seimbang untuk membentuk kemampuan diri yang
        lebih baik di masa depan.
    </p>

    <div class="gallery">
        <div class="gallery-item">
            <img src="bpw.jpeg" alt="Foto 1">
        </div>

        <div class="gallery-item">
            <img src="himti.jpeg" alt="Foto 2">
        </div>

        <div class="gallery-item">
            <img src="3..jpeg" alt="Foto 3">
        </div>
    </div>
</div>

</div>

<footer>
    <p>© 2026 Ahmad Dani Aljibal | Portofolio Pribadi</p>
    <p>
        Instagram: @jabbalunnn | WhatsApp: 0822-2079-1627
    </p>
</footer>

</body>
</html>