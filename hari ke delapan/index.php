<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>
<body>
    <h1> Mengirim data dengan method GET</h1>
    <a href="link1.php?halaman=link1&nama=Andi">Link 1</a>
    <hr>
    <h1>Mengirim data dengan method POST</h1>
    <form action="link2.php"method="post">
    <label for="nama">Nama</label>
      <input type="text"name="nama"id="nama">
      <label for="kelas">kelas</label>
      <input type="text"kelas="kelas"id="nama">
      <select name="kelas" id="kelas">
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="X RPL 1">X RPL 1</option>
        <option value="X RPL 2">X RPL 2</option>
      </select>
</div>
<div class="mb-3">
    <label for="jk" class="form-label">jenis Kelamin</label>
    <select name="jk"id="jk" class="form-control">
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-Laki">Laki-Laki</option>
</select>
</div>
      <button type="submit">kirim</button>
</form>
</body>
</html>
