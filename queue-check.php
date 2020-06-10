<?php include "views/header.php"; ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                   <?php
                    $id_dokter        = $_POST['id_dokter'];
                    $booking_tanggal  = $_POST['booking_tanggal'];
                    $id_sesi          = $_POST['id_sesi'];

                    include 'controller/connection.php';
                    $a = mysqli_query($koneksi,
                    "SELECT COUNT(booking.id_booking) AS total, dokter.nama_dokter, sesi.nama_sesi
                    FROM booking, dokter, sesi
                    WHERE booking.id_dokter = dokter.id_dokter
                    AND booking.id_sesi = sesi.id_sesi
                    AND booking.booking_tanggal = '$booking_tanggal'
                    AND booking.id_sesi = '$id_sesi'
                    AND booking.id_dokter='$id_dokter';");
                    while($b = mysqli_fetch_array($a)){
                  ?>
                    <div class="card"><br>
                    <div align="center">
                      <h5 class="bluetext"><?php echo $b['nama_dokter'];?></h5><br>
                      <h1><?php echo $b['total'];?> Pasien</h1><br>
                      <h5>Sesi <?php echo $b['nama_sesi'];?></h5><br>
                    </div><br>
                    </div><br><?php } ?>
                    </div>
                </div>
            </div>
            </div>
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
<?php include "views/footer.php"; ?> 