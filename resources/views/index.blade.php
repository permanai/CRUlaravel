<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Produk</title>
</head>
<body>    
    <h4 style="text-align: center; margin-top: 2%;">TOKO DARING</h4>
    <h1 style="text-align: center;">SEMOLOWARU 45</h1>
    <div class="container">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <p style="margin-left: 800px; max-width: 150px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Tambah Produk</p>

           {{-- tombol untuk tambah produk (menuju ke proses adminAdd di halaman tambah) --}}
            <a href="/adminAdd" class="btn btn-primary"style="margin-left: 5px;">+</a>
          </div>
        </div>

        {{-- form untuk menampilkan halaman home --}}
        <div class="row" style="margin-left:10%">

            {{-- menggunakan fungsi foreach untuk menerima inputan dari tambah produk --}}
            @foreach($allData as $produk)
                <div class="col-md-2 border" style="margin-top: 20px;">
                    <img src="{{ asset('storage/images/' . $produk->foto) }}" alt="Gambar" style="width: 100%; height: 40%;margin-top:7%;">
                    <p>{{ $produk->nama_produk }}</p>
                    <p>{{ $produk->harga_produk }}</p>
                    <form action="/adminEdit/{{ $produk->id }}" method="POST">
                      @csrf
                      @method('GET')

                      {{-- tombol untuk menuju proses edit di halaman edit --}}
                      <button type="submit" class="btn btn-outline-success" style="margin-left:35%;font-size:70%;">Ubah Produk</button>
                  </form>
                </div>
            @endforeach

            {{-- untuk mengecek data kosong --}}
            @if($allData->isEmpty() && request()->is('adminAdd'))
                <div class="col-md-2 border" style="margin-top: 20px;">
                    <img src="" alt="Gambar" style="width: 70%; height: 30%;">
                    <p></p>
                    <p></p>
                    <button type="button" class="btn btn-outline-success"  style="margin-left:35%;font-size:70%;"></button>
                </div>
            @endif
          </div>

          {{-- untuk pagination --}}
          <div style="margin-left: 43%; margin-top:3%;">
              {{$allData->links()}}
          </div>
      </div>

      {{-- tampilan footer --}}
      <footer style="background-color: aqua; height: 130px; margin-top: auto;">
          <div class="container">
              <h5 style="text-align: center; color: black; margin-top: 8%;">
                  Permana Iswahyudi 
              </h5>
              <h6 style="text-align: center; color: black;">
                  Hubungi Kami
              </h6>
              <div style="text-align: center;">
                  <img src="css1/wa1.png" alt="apotek" style="width: 2.7%; height: 2.7%; display: inline-block; margin-right: 10px;">
                  <img src="css1/ig1.png" alt="apotek" style="width: 3%; height: 3%; display: inline-block; margin-right: 10px;">
                  <img src="css1/telp1.png" alt="apotek" style="width: 2.5%; height: 2.5%; display: inline-block; margin-right: 10px;">
              </div>
          </div>
      </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  @include('sweetalert::alert')
</body>
</html>
