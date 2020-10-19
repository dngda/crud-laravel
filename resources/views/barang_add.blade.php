<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <b><h2>Tambah Barang</h2></b>
          </div>
          <form action="/barang/action-add" method="post">
            @csrf
            <table>
              <tr>
                <td>Nama Barang</td>
                <td> <input type="text" name="nama" class="form-control" required="required"></td>
              </tr>
              <tr>
                <td>Jumlah Barang</td>
                <td><input type="text" name="jumlah" class="form-control" required="required"></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" class="form-control" required="required"></td>
              </tr>
              <tr>
                <td><input type="submit" class="btn btn-info mt-3" class="form-control" value="Simpan Data"></td>
                <td><a href="/barang" class="btn btn-danger mt-3" role="button">Kembali</a></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>