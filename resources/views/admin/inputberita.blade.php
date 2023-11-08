

    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <!-- membuat container dengan lebar colomn col-lg-10  -->
    <div class="container col-lg-10">
        <!-- membuat tulisan alert berwarna hijau dengan tulisan di tengah  -->
        <h3 class="alert alert-success text-center" role="alert">
            Tutorial Modal Edit Data Dinamis
        </h3>
        <br>
        <!-- membuat card untuk membungkus tabel bootstrap  -->
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <!-- set table header  -->
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Deskripsi Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Harga Barang</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // membuat koneksi ke database 
                            $koneksi = mysqli_connect("localhost", "root", "", "project_laravel");

                            //membuat variabel angka
                            $no = 1;

                            //mengambil data dari tabel barang
                            $select         = mysqli_query($koneksi, "select * from barang");

                            //melooping(perulangan) dengan menggunakan while
                            while($data= mysqli_fetch_array($select)){
                        ?>
                        <tr>

                            <!-- menampilkan data dengan menggunakan array  -->
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama_barang']; ?></td>
                            <td><?php echo $data['deskripsi_barang']; ?></td>
                            <td><?php echo $data['jenis_barang']; ?></td>
                            <td><?php echo $data['harga_barang']; ?></td>
                            <td>

                                <!-- tombol edit dan modal akan dibuat disini -->
                                
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>