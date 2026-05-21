<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Ahmad Dani Aljibal</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #f4f4f4;
            color:#333;
            line-height:1.6;
        }

        header{
            background: #0d6efd;
            color:white;
            text-align:center;
            padding:40px 20px;
        }

        header h1{
            font-size:40px;
            margin-bottom:10px;
        }

        .container{
            width:90%;
            max-width:1000px;
            margin:30px auto;
        }

        .card{
            background:white;
            padding:25px;
            margin-bottom:20px;
            border-radius:10px;
            box-shadow:0 4px 8px rgba(0,0,0,0.1);
        }

        h2{
            color:#0d6efd;
            margin-bottom:15px;
        }

        ul{
            margin-left:20px;
        }

        footer{
            text-align:center;
            background:#0d6efd;
            color:white;
            padding:15px;
            margin-top:30px;
        }
    </style>
</head>
<body>

    <?php
        $nama = "Ahmad Dani Aljibal";
        $ttl = "Bengkulu, 03 Februari 2006";
        $alamat = "PT Musirawas Citra Harpindo Div U, Desa Asam Baru, Kec. Danau Seluluk, Kab. Seruyan";

        $deskripsi = "Saya Ahmad Dani Aljibal kelahiran tahun 2006 asal Bengkulu Utara. 
        Saya yang dari kecil hidup di perkebunan kelapa sawit mencoba mencari pengalaman di Pulau Jawa 
        yang sering disebut juga pulau terpadat di Indonesia. Awalnya saya lebih ingin mendalami dunia otomotif, 
        tetapi sekarang terjebak di dunia IT sehingga mau tidak mau saya harus mengikuti perkembangan dunia IT. 
        Semenjak kecil saya tidak mempunyai ketertarikan ke dunia IT, tetapi semenjak menduduki bangku SMK 
        di jurusan RPL saya jadi memiliki ketertarikan tersendiri ke dunia IT terutama di bidang web.";

        $hobi = ["Hiling", "Otomotif"];

        $pengalaman = "Pernah membuat projek website pelayanan kesehatan saat masih di SMK.";
    ?>

    <header>
        <h1><?php echo $nama; ?></h1>
        <p>Web Developer Pemula | Pelajar RPL</p>
    </header>

    <div class="container">

        <div class="card">
            <h2>Data Diri</h2>
            <p><strong>Nama :</strong> <?php echo $nama; ?></p>
            <p><strong>Tempat, Tanggal Lahir :</strong> <?php echo $ttl; ?></p>
            <p><strong>Alamat :</strong> <?php echo $alamat; ?></p>
        </div>

        <div class="card">
            <h2>Tentang Saya</h2>
            <p><?php echo $deskripsi; ?></p>
        </div>

        <div class="card">
            <h2>Hobi</h2>
            <ul>
                <?php
                    foreach($hobi as $hb){
                        echo "<li>$hb</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="card">
            <h2>Pengalaman</h2>
            <p><?php echo $pengalaman; ?></p>
        </div>

    </div>

    <footer>
        <p>&copy; 2026 Portofolio Ahmad Dani Aljibal</p>
    </footer>

</body>
</html>