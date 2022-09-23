 <div class="container pt-5">
    <div class="row">
      <div class="col ">
        <header class="header text-center">
          <h1>APLIKASI PENGADUAN MASYARAKAT</h1>
          <h3>SMK NEGERI 4 BANDAR LAMPUNG</h3>
          <p>Jl. Hos Cokroaminoto No 204</p>
        </header>
        <div>
          <h5>Data Laporam</h5>
            <table class="mt-">
              <tr>
                <td><span class="bold">NIK</span></td>
                <td>:</td>
                <td><?= $data['nik'] ?></td>
              </tr>
              <tr>
                <td><span class="bold">Nama</span></td>
                <td>:</td>
                <td><?= $data['nama'] ?></td>
              </tr>
              <tr>
                <td><span class="bold">Tanggal</span></td>
                <td>:</td>
                <td><?= $data['tgl_pengaduan'] ?></td>
              </tr>
              <tr>
                <td><span class="bold">Melaporkan</span></td>
                <td>:</td>
                <td>
                  <span>
                  <?= $data['isi_laporan'] ?>
                  </span>
                </td>
              </tr>
            </table>
            <p class="bold">Bukti : <p>
            <center>
            <img src="../gambar/pengaduan/<?= $data['foto'] ?>" width="300">
            </center>

            <h5 class="mt-5">Tanggapan</h5>
            <table>
              <tr>
                <td><?= $data['tanggapan'] ?></td>
              </tr>
              <tr>
                <td><span class="bold">Status Laporan :</span></td>
              </tr>
              <tr>
                <td><h1 class="btn btn-success btn-md mt-2"><?= $data['status']?></h1></td>
              </tr>
            </table>

            <div class="mt-4" style="float: right; margin-top:  130px !important;">
              <span class="bold">Bandar Lampung , <?= $data['tgl_tanggapan'] ?></span>  
              <p class="bold"><?= $data['nama_petugas'] ?></p>            
            </div>
          
        </div>
      </div>
    </div>
  </div>

      

  <script type="text/javascript">
      window.print();
  </script>