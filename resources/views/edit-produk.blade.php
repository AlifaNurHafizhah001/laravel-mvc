<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Produk — Ocean Luxury</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap');

  body{
    margin:0;
    font-family:'Montserrat',sans-serif;
    background:linear-gradient(180deg,#001f2e,#003a52,#005771);
    display:flex;justify-content:center;align-items:center;
    min-height:100vh;color:#fff;
  }
  .card{
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(14px);
    border:1px solid rgba(255,255,255,.15);
    padding:32px 36px;
    width:360px;
    border-radius:18px;
    box-shadow:0 10px 40px rgba(0,0,0,.35);
    animation:fadeUp .7s ease;
  }
  @keyframes fadeUp{
    from{opacity:0;transform:translateY(20px);}
    to{opacity:1;transform:translateY(0);}
  }
  h2{margin-top:0;font-weight:600;letter-spacing:.5px;text-align:center;}
  label{font-size:.85rem;opacity:.95;}
  input,select,button{
    width:100%;padding:10px 12px;margin-top:4px;margin-bottom:18px;
    border:none;border-radius:8px;font-size:.9rem;font-family:inherit;
  }
  input,select{
    background:rgba(255,255,255,.15);
    color:#fff;
  }
  option{color:#000;}
  button{
    background:linear-gradient(135deg,#17a2b8,#0077a8,#005b84);
    color:white;font-weight:600;cursor:pointer;
    transition:.25s;
  }
  button:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(0,0,0,.4);}
</style>
</head>
<body>

<div class="card">
  <h2>Edit Data Produk</h2>
  <form action="/produk/update" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Produk:</label>
    <input type="text" name="nama" value="Laptop Lama" required>

    <label>Harga Produk:</label>
    <input type="number" name="harga" value="5000000" required>

    <label>Kategori:</label>
    <select name="kategori">
      <option value="Elektronik" selected>Elektronik</option>
      <option value="Makanan">Makanan</option>
      <option value="Minuman">Minuman</option>
    </select>

    <button type="submit">Perbarui Data</button>
  </form>
</div>

</body>
</html>
