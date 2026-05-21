<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo Portofolio</title>
  <style>
    body{font-family:Segoe UI,sans-serif;margin:0;background:linear-gradient(135deg,#092c7e,#1e293b);color:#fff}
    nav{padding:16px;text-align:center;background:rgba(255,255,255,.1)}
    nav a{color:#fff;text-decoration:none;margin:0 14px;font-weight:bold}
    .wrap{max-width:1000px;margin:40px auto;padding:20px}
    .card{background:rgba(255,255,255,.12);padding:30px;border-radius:20px;margin-bottom:25px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px}
    .box{background:rgba(255,255,255,.08);padding:20px;border-radius:16px}
    h1,h2{text-align:center}
  </style>
</head>
<body>
  <nav>
    <a href="#">Home</a>
    <a href="#">Profil</a>
    <a href="#">Aktivitas</a>
  </nav>
  <div class="wrap">
    <div class="card">
      <h1>Portofolio Ahmad Dani Aljibal</h1>
      <p style="text-align:center">Demo tampilan dari website portofolio 3 halaman yang sudah kamu buat: Home, Profil, dan Aktivitas.</p>
    </div>
    <div class="grid">
      <div class="box"><h2>Home</h2><p>Menampilkan halaman utama, foto, deskripsi, dan galeri tentang saya.</p></div>
      <div class="box"><h2>Profil</h2><p>Menampilkan biodata, pendidikan, kontak, dan keahlian.</p></div>
      <div class="box"><h2>Aktivitas</h2><p>Menampilkan hobi, pengalaman, latar belakang, serta dokumentasi foto.</p></div>
    </div>
  </div>
</body>
</html>