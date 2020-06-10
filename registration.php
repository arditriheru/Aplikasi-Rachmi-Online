<?php include "views/header.php"; ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Info Antrian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cetak Ulang</a>
                        </li>
                    </ul>
                    <?php
                              if(isset($_POST['add'])){
                                include 'controller/connection.php';
                                // menangkap data yang di kirim dari form
                                $id_catatan_medik = $_POST['id_catatan_medik'];
                                $tgl_lahir        = $_POST['tgl_lahir'];

                                $error=array();
                                if (empty($id_catatan_medik)){
                                  $error['id_catatan_medik']='Nomor RM Harus Diisi!!!';
                                }if (empty($tgl_lahir)){
                                  $error['tgl_lahir']='Tanggal Lahir Harus Diisi!!!';
                                }if(empty($error)){
                                  $id_catatan_medik = $_POST['id_catatan_medik'];
                                  $tgl_lahir        = $_POST['tgl_lahir'];
                                  // menyeleksi data admin dengan username dan password yang sesuai
                                  $data = mysqli_query($koneksi,"SELECT * FROM mr_pasien 
                                    WHERE id_catatan_medik='$id_catatan_medik' AND tgl_lahir='$tgl_lahir'");
                                  // menghitung jumlah data yang ditemukan
                                  $cek = mysqli_num_rows($data);
                                if($cek > 0){
                                header("location:registration-add?id=$id_catatan_medik");
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
                                }
                              }
                            ?>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="card">
                        <div class="card-body card-block">
                            <form action="queue-check" method="post" role="form">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <select class="form-control" type="text" name="id_dokter">
                                            <option disabled selected>Pilih Dokter</option>
                                              <?php 
                                                include 'controller/connection.php';
                                                $data = mysqli_query($koneksi,
                                                  "SELECT * FROM dokter WHERE status=1;");
                                                while($d = mysqli_fetch_array($data)){
                                                echo "<option value='".$d['id_dokter']."'>".$d['nama_dokter']."</option>";
                                                }
                                              ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jadwal Poli</label>
                                    <input class="form-control" type="date" name="booking_tanggal" required="" placeholder="Masukkan Jadwal Poli">
                                    </div>
                                <div class="form-group">
                                    <label>Sesi</label>
                                    <select class="form-control" type="text" name="id_sesi">
                                            <option disabled selected>Pilih Sesi</option>
                                              <?php 
                                                include 'controller/connection.php';
                                                $data = mysqli_query($koneksi,
                                                  "SELECT * FROM sesi ORDER BY id_sesi ASC;");
                                                while($d = mysqli_fetch_array($data)){
                                                echo "<option value='".$d['id_sesi']."'>".$d['nama_sesi']."</option>";
                                                }
                                              ?>
                                    </select>
                                </div>
                                <button type="submit" name="cek" class="btn btn-primary">Lihat</button>
                            </form>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <h5 class="bluetext"><b>Ketentuan Umum Pendaftaran Online</b></h5><br>
                                <ol>
                                  <li>Pendaftaran Online sementara ini hanya berlaku bagi Pasien yang telah memiliki Nomor Rekam Medik RSKIA Rachmi yang akan berobat Rawat Jalan.</li>
                                  <li>Bagi pasien baru yang belum pernah mendaftar di RSKIA Rachmi harap datang langsung ke bagian pendaftaran.</li>
                                  <li>Pendaftaran Online dapat dilakukan untuk kontrol Poli dengan Jadwal H-30 s.d hari H saat jadwal kontrol dilakukan dengan memasukkan : Nomor RM , Tanggal Lahir, Pilihan Hari Kontrol dan Dokter untuk poli reguler. Dokter yang ditunjuk adalah dokter DPJP (Dokter Penanggung Jawab Pelayanan).</li>
                                  <li>Pasien di hari yang sama hanya dapat mendaftar 1 kali dengan 1 dokter dan di sesi yang sama.</li>
                                  <li>Jadwal Dokter dapat berubah sewaktu waktu.</li>
                                  <li>Apabila Anda telah melakukan pendaftaran Online, Anda akan mendapatkan Bukti pendaftaran yang dapat di (screenshot) dan ditunjukkan pada saat Jadwal Kontrol.</li>
                                  <li>Apabila Anda ingin melihat kembali Bukti Pendaftaran Online setelah mendaftar Cetak Ulang Reservasi pada sub-menu di halaman ini.</li>
                                  <li>Nomor Antrian Periksa dokter adalah sesuai dengan urutan ketika melakukan reservasi ulang.</li>
                                  <li>Untuk kasus Gawat Darurat silakan datang ke IGD RRSKIA Rachmi.</li>
                                  <li>Bukti Pendaftaran Online dibawa di loket Pendaftaran RSKIA Rachmi.</li>
                                  <li>Pasien yang telah melakukan registrasi online diharapkan datang tepat waktu.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-body card-block">
                            <form action="registration-add" method="post" role="form">
                               <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Nomor Rekam Medik</label>
                                    <input name="id_catatan_medik" type="text" class="form-control" placeholder="Masukkan Nomor RM Anda">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" placeholder="Masukkan Tanggal Lahir">
                                </div>
                                <button type="submit" name="add" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card">
                        <div class="card-body card-block">
                            <form method="post" action="registration-print" role="form">
                                    <div class="form-group">
                                        <label>Nomor Rekam Medik</label>
                                        <input class="form-control" type="text" name="id_catatan_medik" required="" placeholder="Masukkan Nomor RM Anda">
                                    </div>
                                    <div class="form-group">
                                        <label>Jadwal Poli</label>
                                        <input class="form-control" type="date" name="booking_tanggal" required="" placeholder="Masukkan Jadwal Poli">
                                    </div>
                                <button type="submit" name="print" class="btn btn-primary">Cetak</button>
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /# column -->
            </div>
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
<?php include "views/footer.php"; ?> 