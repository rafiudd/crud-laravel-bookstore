<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>

  <h3>Data Buku</h3>

  <a href="/pegawai"> Kembali</a>
  
  <br/>
  <br/>

  <form action="/books/create" method="post">
    {{ csrf_field() }}
    Judul Buku
    <input type="text" name="judul" required="required"> <br/>

    Penerbit
    <input type="text" name="penerbit" required="required"> <br/>

    Tahun Terbit 
    <input type="text" name="tahun_terbit" required="required"> <br/>

    Pengarang 
    <input type="text" name="pengarang" required="required"> <br/>
    <input type="submit" value="Simpan Data">
  </form>

</body>
</html>