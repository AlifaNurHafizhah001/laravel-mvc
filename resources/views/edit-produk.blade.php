<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Produk — Ocean Luxury</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom, #a8e6a1, #e9f8e7);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .container {
    background-color: #f5fff4;
    border-radius: 20px;
    box-shadow: 0 6px 20px rgba(0, 80, 30, 0.15);
    padding: 35px 40px;
    width: 340px;
    text-align: center;
    position: relative;
    transition: 0.3s;
  }

  .container:hover {
    transform: scale(1.02);
  }

  .leaf-deco {
    position: absolute;
    width: 60px;
    opacity: 0.2;
  }

  .leaf-top {
    top: -25px;
    left: -25px;
    transform: rotate(-20deg);
  }

  .leaf-bottom {
    bottom: -25px;
    right: -25px;
    transform: rotate(20deg);
  }

  h2 {
    color: #1b5e20;
    margin-bottom: 25px;
    font-size: 1.6em;
    font-weight: 700;
  }

  label {
    color: #2e7d32;
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
    text-align: left;
  }

  input, select {
    width: 100%;
    padding: 10px 12px;
    border: 2px solid #b9e4b3;
    border-radius: 12px;
    font-size: 14px;
    margin-bottom: 15px;
    outline: none;
    transition: 0.3s;
    background-color: #ffffff;
    color: #1b5e20;
    box-shadow: 0 2px 5px rgba(0, 100, 50, 0.08);
  }

  input:focus, select:focus {
    border-color: #66bb6a;
    box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
  }

  button {
    background: linear-gradient(90deg, #2e7d32, #4caf50);
    border: none;
    color: white;
    padding: 12px 24px;
    font-size: 15px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 600;
    width: 100%;
    box-shadow: 0 4px 10px rgba(46, 125, 50, 0.25);
  }

  button:hover {
    background: linear-gradient(90deg, #388e3c, #43a047);
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(46, 125, 50, 0.35);
  }

  .cute-icon {
    font-size: 30px;
    margin-bottom: 10px;
    animation: bounce 1.5s infinite;
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
  }
</style>
</head>
<body>

<div class="container">
  <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Monstera_leaf_icon.svg" class="leaf-deco leaf-top" alt="leaf">
  <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Monstera_leaf_icon.svg" class="leaf-deco leaf-bottom" alt="leaf">

  <div class="cute-icon">🌿</div>
  <h2>Edit Data Produk</h2>

  <form action="/produk/update" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Produk:</label>
    <input type="text" name="nama" value="Tanaman Monstera" required>

    <label>Harga Produk:</label>
    <input type="number" name="harga" value="150000" required>

    <label>Kategori:</label>
    <select name="kategori">
      <option value="Tanaman Hias" selected>Tanaman Hias</option>
      <option value="Peralatan">Peralatan</option>
      <option value="Pupuk">Pupuk</option>
    </select>

    <button type="submit">Perbarui Data</button>
  </form>
</div>

</body>
</html>
