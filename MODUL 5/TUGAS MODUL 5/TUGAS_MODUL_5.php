<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buku Tamu Digital STITEK Bontang</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: linear-gradient(135deg, #00c3ff, #ffff1c);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    .container {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      margin-top: 60px;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      max-width: 600px;
      width: 90%;
      animation: slideDown 0.8s ease;
    }

    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #222;
      text-shadow: 1px 1px 2px #fff;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      padding: 12px;
      margin-bottom: 20px;
      border: 2px solid #00c3ff;
      border-radius: 6px;
      font-size: 1em;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
      border-color: #ffff1c;
      outline: none;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      background: linear-gradient(45deg, #00c3ff, #ffff1c);
      border: none;
      color: #222;
      padding: 12px;
      border-radius: 50px;
      cursor: pointer;
      font-weight: bold;
      font-size: 1.1em;
      letter-spacing: 0.5px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    input[type="submit"]:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    }

    .result, .error {
      margin-top: 30px;
      padding: 20px;
      border-radius: 8px;
      animation: fadeIn 0.5s ease;
    }

    .result {
      background: rgba(40, 167, 69, 0.9);
      color: #fff;
      border-left: 5px solid #28a745;
    }

    .error {
      background: rgba(220, 53, 69, 0.9);
      color: #fff;
      border-left: 5px solid #dc3545;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    ::placeholder {
      color: #777;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>Buku Tamu Digital STITEK Bontang</h1>

    <form method="post" action="">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap">

      <label for="email">Alamat Email:</label>
      <input type="email" name="email" id="email" placeholder="nama@email.com">

      <label for="pesan">Pesan/Komentar:</label>
      <textarea name="pesan" id="pesan" rows="5" placeholder="Tulis pesan atau komentar Anda..."></textarea>

      <input type="submit" value="Kirim Pesan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = trim($_POST['nama']);
      $email = trim($_POST['email']);
      $pesan = trim($_POST['pesan']);

      if (empty($nama) || empty($email) || empty($pesan)) {
        echo "<div class='error'>Semua kolom harus diisi! Mohon lengkapi formulir terlebih dahulu.</div>";
      } else {
        $nama = htmlspecialchars($nama);
        $email = htmlspecialchars($email);
        $pesan = htmlspecialchars($pesan);

        echo "<div class='result'>";
        echo "<h3>Pesan Anda Terkirim!</h3>";
        echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Pesan:</strong><br>" . nl2br($pesan) . "</p>";
        echo "</div>";
      }
    }
    ?>
  </div>
</body>
</html>
