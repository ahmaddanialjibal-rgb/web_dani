<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Segoe UI',sans-serif;
            background: linear-gradient(135deg, #092c7e, #1e293b);
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
        }

        .top-section{
            display:flex;
            align-items:flex-start;
            gap:30px;
        }

        .photo img{
            width:220px;
            height:280px;
            object-fit:cover;
            border-radius:20px;
            border:4px solid #38bdf8;
        }

        .bio{
            flex:1;
        }

        h1{
            font-size:2.2rem;
            margin-bottom:15px;
            color:white;
        }

        p{
            line-height:1.8;
            margin-bottom:20px;
        }

        .details{
            margin-top:30px;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .item{
            background:white;
            color:#1e293b;
            padding:20px;
            border-radius:15px;
            transition:0.3s;
        }

        .item:hover{
            transform:translateY(-5px);
        }

        .item strong{
            display:block;
            margin-bottom:10px;
        }

        .item span{
            display:block;
            line-height:1.7;
        }

        @media(max-width:768px){
            .top-section{
                flex-direction:column;
            }

            .details{
                grid-template-columns:1fr;
            }

            .photo img{
                width:100%;
                height:auto;
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

        <div class="top-section">
            <div class="photo">
                <img src="ft.jpg" alt="Foto Ahmad Dani">
            </div>

            <div class="bio">
                <h1>Ahmad Dani Aljibal</h1>
                <p>
                   Saya adalah mahasiswa Teknik Informatika yang sedang belajar dan mendalami dunia teknologi, khususnya pengembangan web. Saya berasal dari Bengkulu Utara dan sejak kecil tumbuh di lingkungan perkebunan kelapa sawit. Awalnya saya lebih tertarik pada dunia otomotif, tetapi sejak masuk jurusan RPL di SMK, saya mulai mengenal dan menyukai dunia IT. Saat ini saya terus mengembangkan kemampuan di bidang web dan pernah membuat proyek website pelayanan kesehatan saat masih di SMK. Saya memiliki semangat untuk terus belajar hal baru dan menambah pengalaman di dunia teknologi. Dengan bekal pendidikan dan pengalaman yang saya miliki, saya ingin terus berkembang menjadi pribadi yang bermanfaat di bidang IT.

                </p>
            </div>
        </div>

        <div class="details">
            <div class="item">
                <strong>Tempat, Tanggal Lahir</strong>
                <span>Bengkulu, 03 Februari 2006</span>
            </div>

            <div class="item">
                <strong>Alamat</strong>
                <span>PT Musirawas Citra Harpindo Div U, Desa Asam Baru, Kec Danau Seluluk, Kab Seruyan</span>
            </div>

            <div class="item">
                <strong>Status</strong>
                <span>Mahasiswa Teknik Informatika FASTIKOM</span>
            </div>

            <div class="item">
                <strong>Pendidikan</strong>
                <span>SD Wijaya Kusuma</span>
                <span>SMP Wijaya Kusuma</span>
                <span>SMK Pelita Al Quran</span>
            </div>

            <div class="item">
                <strong>Kontak</strong>
                <span>Email: ahmaddanialjibal@gmail.com</span>
                <span>WA: 0822-2079-1627</span>
                <span>IG: @jabbalunnn</span>
            </div>

            <div class="item">
                <strong>Keahlian</strong>
                <span>HTML, CSS, Dan PHP</span>
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