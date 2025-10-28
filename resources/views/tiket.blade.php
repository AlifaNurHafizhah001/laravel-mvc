<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem Tiket Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
      min-height:100vh;margin:0;
      display:flex;align-items:center;justify-content:center;
      font-family:"Poppins",sans-serif;color:#00334a;
      background:linear-gradient(135deg,#d7f1ff,#7fcde8);
    }
    .glass{
      background:rgba(255,255,255,.4);
      border:1px solid rgba(255,255,255,.5);
      backdrop-filter:blur(14px);
      border-radius:28px;
      padding:40px 55px;
      text-align:center;
      box-shadow:0 10px 35px rgba(0,0,0,.15);
      width:340px;
    }
    .btn-pill{
      border-radius:999px;
      background:#005c7a;
      color:#fff;
      padding:10px 20px;
      font-weight:500;
    }
    .btn-pill:hover{background:#00445b;color:#fff}
  </style>
</head>
<body>

<div class="glass" id="page-list">
  <h3 class="mb-3">🌊 Sistem Tiket Wisata</h3>
  <p class="mb-4">Pilih destinasi wisata</p>
  <div class="d-flex flex-column gap-3">
    <button class="btn btn-pill" onclick="showDetail('Papuma',20000,'🏝️')">🏝️ Papuma</button>
    <button class="btn btn-pill" onclick="showDetail('Watu Ulo',15000,'🪨')">🪨 Watu Ulo</button>
    <button class="btn btn-pill" onclick="showDetail('Pancer Puger',10000,'🌊')">🌊 Pancer Puger</button>
  </div>
</div>

<div class="glass d-none" id="page-detail">
  <h3 class="mb-3" id="detail-title"></h3>
  <p class="mb-4 fs-5">Harga Tiket: <strong id="detail-price"></strong></p>
  <button class="btn btn-pill" onclick="back()">Kembali</button>
</div>

<script>
  function rupiah(x){return 'Rp '+x.toLocaleString('id-ID')}
  function showDetail(nama,harga,icon){
    document.getElementById('detail-title').innerText = icon+' Detail Tiket '+nama
    document.getElementById('detail-price').innerText = rupiah(harga)
    document.getElementById('page-list').classList.add('d-none')
    document.getElementById('page-detail').classList.remove('d-none')
  }
  function back(){
    document.getElementById('page-detail').classList.add('d-none')
    document.getElementById('page-list').classList.remove('d-none')
  }
</script>

</body>
</html>
