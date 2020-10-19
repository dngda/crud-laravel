<!DOCTYPE html>
<html>

<head>
  <title>Data Harga Barang Hidroponik</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container mt-3">
    <div class="card">
      <div class="card-body">
        <h3>Data Harga Barang Hidroponik</h3>
        <a class="btn btn-success mb-2" href="/barang/add" role="button"> + Tambah Barang Baru</a>
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Barang</th>
            <th>Opsi</th>
          </tr>
          @foreach($barang as $index=>$b)
          <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->jumlah_barang }}</td>
            <td>{{ $b->harga_barang }}</td>
            <td>
              <a class="btn btn-primary" href="/barang/edit/{{ $b->id }}" role="button">Edit</a>
              <a class="btn btn-danger" href="/barang/delete/{{ $b->id }}" role="button">Hapus</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>