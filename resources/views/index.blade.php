<table border="1">
    <tr>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
    </tr>
    @foreach($buku as $b)
    <tr>
        <td>{{$b->judul}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        <td>{{$b->pengarang}}</td>
        <td>
        <a href="/pegawai/edit/{{ $b->pegawai_id }}">Edit</a>
        
        <a href="/pegawai/hapus/{{ $b->pegawai_id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>