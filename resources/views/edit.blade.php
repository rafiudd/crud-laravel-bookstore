<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
 
	<h3>Edit Buku</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($buku as $p)
	<form action="/books/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="judul" value="{{ $p->judul }}"> <br/>
		Jabatan <input type="text" required="required" name="penerbit" value="{{ $p->penerbit }}"> <br/>
		Umur <input type="text" required="required" name="tahun_terbit" value="{{ $p->tahun_terbit }}"> <br/>
		Umur <input type="text" required="required" name="pengarang" value="{{ $p->pengarang }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>