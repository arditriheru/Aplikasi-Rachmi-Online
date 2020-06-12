<?php include "views/header.php"; ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Jadwal Dokter</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="show-schedule" method="post" class="">
                                <div class="row form-group">
                                    <select class="form-control" type="text" name="id_dokter">
                                        <p style="color:red;"><?php echo ($error['dokter']) ? $error['dokter'] : ''; ?></p>
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
                                </div><br>
                                <button type="submit" class="btn btn-primary">Lihat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
<?php include "views/footer.php"; ?> 