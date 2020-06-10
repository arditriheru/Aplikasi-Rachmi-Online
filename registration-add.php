<?php include "views/header.php"; ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                <?php 
                  include 'controller/connection.php';
                  $id_catatan_medik   = $_POST['id_catatan_medik'];
                  $tgl_lahir          = $_POST['tgl_lahir'];
                  $a = mysqli_query($koneksi,
                      "SELECT COUNT(*) AS cekdata FROM mr_pasien WHERE id_catatan_medik='$id_catatan_medik' AND tgl_lahir='$tgl_lahir';");
                  while($b = mysqli_fetch_array($a)){
                   $cekdata = $b['cekdata'];
                  }
                  if($cekdata > 0){
                    $c = mysqli_query($koneksi,
                      "SELECT * FROM mr_pasien WHERE id_catatan_medik='$id_catatan_medik' AND tgl_lahir='$tgl_lahir';");
                  while($d = mysqli_fetch_array($c)){
                        $id_catatan_medik = $d['id_catatan_medik'];
                        $nama             = $d['nama'];
                        $alamat           = $d['alamat'];
                        $telp             = $d['telp'];
                     }
                  }else{
                    echo "<script>
                                    setTimeout(function() {
                                        swal({
                                            title: 'Gagal',
                                            text: 'Nomor RM / Tanggal Lahir Salah!',
                                            type: 'error'
                                        }, function() {
                                            window.location = 'registration';
                                        });
                                    }, 10);
                                </script>";
                  }
                ?>
                <form action="registration-add-process" method="post" class="">
                    <div class="form-group">
                        <label class="control-label mb-1"><?php echo $cekdata; ?>No.Rekam Medik</label>
                        <input class="form-control" type="text" name="id_catatan_medik"
                        value="<?php echo $id_catatan_medik; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Nama</label>
                        <input class="form-control" type="text" name="nama"
                        value="<?php echo $nama; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Alamat</label>
                        <input class="form-control" type="text" name="alamat"
                        value="<?php echo $alamat; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Kontak</label>
                        <input class="form-control" type="text" name="kontak"
                        value="<?php echo $telp; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Dokter</label>
                        <select class="form-control" type="text" name="id_dokter"
                        value="<?php echo $d['id_dokter']; ?>" required="">
                          <option disabled selected>Pilih</option>
                          <?php 
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi,
                              "SELECT * FROM dokter;");
                            while($d = mysqli_fetch_array($data)){
                            echo "<option value='".$d['id_dokter']."'>".$d['nama_dokter']."</option>";
                            }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Untuk Tanggal</label>
                        <input class="form-control" type="date" name="booking_tanggal"
                        value="<?php echo $d['booking_tanggal']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Sesi</label>
                        <select class="form-control" type="text" name="id_sesi"
                        value="<?php echo $d['id_sesi']; ?>" required="">
                          <option disabled selected>Pilih</option>
                          <?php 
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi,
                              "SELECT * FROM sesi;");
                            while($d = mysqli_fetch_array($data)){
                            echo "<option value='".$d['id_sesi']."'>".$d['nama_sesi']."</option>";
                            }
                          ?>
                        </select>
                    </div>
                      <button type="submit" name="add" class="btn btn-primary">Daftar</button>
                </form>
                </div>
                <!-- /# column -->
            </div>
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
<?php include "views/footer.php"; ?> 