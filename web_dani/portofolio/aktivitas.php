<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aktivitas</title>
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
            max-width:1000px;
            margin:40px auto;
            padding:20px;
        }

        .card{
            background: rgba(255,255,255,0.12);
            border-radius:25px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .foto-profil{
            text-align:center;
            margin-bottom:25px;
        }

        .foto-profil img{
            width:220px;
            height:280px;
            object-fit:cover;
            border-radius:20px;
            border:4px solid #38bdf8;
        }

        h1{
            text-align:center;
            margin-bottom:25px;
            font-size:2.2rem;
        }

        .section{
            background: rgba(255,255,255,0.08);
            padding:20px;
            border-radius:18px;
            margin-bottom:20px;
        }

        .section h2{
            margin-bottom:15px;
            color:#38bdf8;
        }

        .section p, .section li{
            line-height:1.9;
            text-align:justify;
        }

        ul{
            padding-left:20px;
        }

        .gallery{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-top:20px;
        }

        .gallery-item{
            overflow:hidden;
            border-radius:18px;
            box-shadow:0 8px 20px rgba(0,0,0,0.3);
        }

        .gallery-item img{
            width:100%;
            height:220px;
            object-fit:cover;
            transition:0.5s;
        }

        .gallery-item:hover img{
            transform:scale(1.08);
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

        <div class="foto-profil">
            <img src="dl.jpg" alt="Foto Ahmad Dani">
        </div>


        <div class="section">
            <h2>Hobi</h2>
            <ul>
                <li>Hiling / Traveling</li>
                <li>Otomotif</li>
                <li>Mengeksplorasi</li>
            </ul>
        </div>

        <div class="section">
            <h2>Latar Belakang</h2>
            <p>
                Saya berasal dari Bengkulu Utara dan sejak kecil tumbuh di lingkungan
                perkebunan kelapa sawit. Saat ini saya merantau ke Pulau Jawa untuk
                menempuh pendidikan serta menambah pengalaman, khususnya di bidang
                teknologi informasi.
            </p>
        </div>

        <div class="section">
            <h2>Pengalaman</h2>
            <p>
                Saya pernah membuat proyek website pelayanan kesehatan saat masih
                menempuh pendidikan di SMK jurusan Rekayasa Perangkat Lunak (RPL).
                Selain itu, saya juga aktif dalam organisasi Himpunan Mahasiswa Teknik
                Informatika sejak semester 2, yang membantu saya mengembangkan
                kemampuan komunikasi, kerja tim, dan kepemimpinan.
            </p>
        </div>

        <div class="section">
            <h2>Dokumentasi Aktivitas</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="hiling.jpg" alt="Aktivitas 1">
                </div>

                <div class="gallery-item">
                    <img src="ot.jpeg" alt="Aktivitas 2">
                </div>

                <div class="gallery-item">
                    <img src="ew.jpeg" alt="Aktivitas 3">
                </div>
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