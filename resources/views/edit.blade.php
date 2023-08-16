<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ubah Data Produk</title>
  </head>
  <body>
    <div class="container">
      <h1>Ubah Data Produk</h1>
      <form action="/Edit/{{$allData->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- form untuk mengedit nama produk, harga produk, dan foto produk --}}
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{$allData->nama_produk}}">
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga_produk" name="harga_produk" value="{{$allData->harga_produk}}">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" id="foto" name="foto" accept="image/*" value="{{$allData->foto}}">
        </div>

        {{-- tombol untuk mengsubmit edit --}}
        <button type="submit" class="btn btn-outline-primary" >Edit Produk</button>

        {{-- tombol untuk batal submit (kembali ke home) --}}
        <a href="/adminIndex" class="btn btn-outline-danger" style="margin-left: 5px;">Batal</a>
      </form>
    </div>

    {{-- untuk tampilan footer --}}
    <footer style="background-color: aqua; height: 130px;margin-top:2%;">
        <h5 style="text-align: center;color:black;margin-top:8%;">
          Permana Iswahyudi
        </h5>
        <h6 style="text-align: center;color:black;">
          Hubungi Kami
        </h6>
        <div style="text-align: center;">
          <img src={{asset("css1/wa1.png")}} alt="apotek" style="width: 2.7%; height: 2.7%; display: inline-block; margin-left: auto; margin-right: auto;">
          <img src={{asset("css1/ig1.png")}} alt="apotek" style="width: 3%; height: 3%; display: inline-block; margin-left: auto; margin-right: auto;">
          <img src={{asset("css1/telp1.png")}} alt="apotek" style="width: 2.5%; height: 2.5%; display: inline-block; margin-left: auto; margin-right: auto;">
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
