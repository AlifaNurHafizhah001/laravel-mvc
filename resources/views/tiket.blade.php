<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tiket Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body{
      min-height:100vh;
      background: linear-gradient(135deg,#004e92,#000428);
      display:flex;align-items:center;justify-content:center;
      font-family:"Poppins",sans-serif;color:#fff;overflow:hidden;
    }
    .wave{
      position:fixed;bottom:0;left:0;width:100%;z-index:-1;
      opacity:.25;
    }
    .glass-box{
      background:rgba(255,255,255,0.15);
      border:1px solid rgba(255,255,255,0.25);
      box-shadow:0 8px 32px rgba(0,0,0,0.25);
      backdrop-filter: blur(16px);
      border-radius:20px;
      padding:40px 55px;
      text-align:center;
    }
    .btn-ocean{
      width:280px;font-weight:500;
      background:rgba(255,255,255,0.2);
      border:1px solid rgba(255,255,255,0.3);
      color:#fff;
      backdrop-filter: blur(12px);
    }
    .btn-ocean:hover{
      background:rgba(255,255,255,0.35);
      color:#002f46;
    }
    .footer{margin-top:25px;font-size:12px;opacity:.8}
  </style>
</head>
<body>

<img class="wave" src="https://raw.githubusercontent.com/naaficodes/cdn-static/main/svg/wave-1.svg">

<div class="glass-box">
  <h3 class="mb-2">🌊 Sistem Tiket Wisata</h3>
  <p class="mb-4">Pilih destinasi untuk melihat harga tiket</p>
  
  <div class="d-flex flex-column gap-3">
    <a href="#" class="btn btn-ocean">🏝️ Papuma — Rp 20.000</a>
    <a href="#" class="btn btn-ocean">🪨 Watu Ulo — Rp 15.000</a>
    <a href="#" class="btn btn-ocean">🌊 Pancer Puger — Rp 10.000</a>
  </div>

  <div class="footer">© 2025 Sistem Tiket Wisata — Laravel Route Demo</div>
</div>

</body>
</html>
