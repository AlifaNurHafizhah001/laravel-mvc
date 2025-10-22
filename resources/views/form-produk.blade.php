<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Produk</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #fce3ec, #dbeafe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 30px 40px;
      width: 320px;
      text-align: center;
      transition: 0.3s;
    }

    .container:hover {
      transform: scale(1.02);
    }

    h2 {
      color: #ff8fab;
      margin-bottom: 20px;
      font-size: 1.5em;
    }

    label {
      color: #555;
      font-weight: 500;
      display: block;
      margin-bottom: 6px;
      text-align: left;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 2px solid #ffd6e0;
      border-radius: 10px;
      font-size: 14px;
      margin-bottom: 15px;
      outline: none;
      transition: 0.3s;
    }

    input:focus, select:focus {
      border-color: #ffb3c6;
      box-shadow: 0 0 8px #ffd6e0;
    }

    button {
      background-color: #ffb3c6;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 15px;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #ff8fab;
      transform: translateY(-2px);
      box-shadow: 0 3px 10px rgba(255, 143, 171, 0.4);
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
    <div class="cute-icon">🍓</div>
    <h2>Form Input Produk</h2>
    <form action="/kirim-produk" method="POST">
      @csrf
      <label>Nama Produk:</label>
      <input type="text" name="nama" placeholder="Contoh: Gantungan Kunci Imut" required>

      <label>Harga Produk:</label>
      <input type="number" name="harga" placeholder="Contoh: 8000" required>

      <label>Kategori:</label>
      <select name="kategori">
        <option value="Makanan">Makanan 🍰</option>
        <option value="Minuman">Minuman 🧋</option>
        <option value="Elektronik">Elektronik 💡</option>
      </select>

      <button type="submit">💌 Kirim</button>
    </form>
  </div>
</body>
</html>