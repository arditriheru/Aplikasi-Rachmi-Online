<?php
    include "views/header.php";
    include "controller/anak-controller.php";
    include "controller/kandungan-controller.php";
?>
<script type="text/javascript">
    var antrian = setInterval(
    function(){
        $('#antrian').load('show-queue.php').fadeIn("slow");
        }, 1000);
</script>
    <div id="right-panel" class="right-panel">
                <!-- Header-->
        <header id="header" class="header navbar-fixed-top">
            <div class="header-menu">
                <div class="col-sm-12">
                    <div class="user-area float-left">
                        <a href="https://www.rskiarachmi.co.id">
                            <img src="images/logo.jpg" alt="Rachmi Online">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- Header--><br><br><br>
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <strong>Ketersediaan Kamar</strong>
                    </div>
                    <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><center>Kamar</th>
                                            <th scope="col"><center>Bed</th>
                                            <th scope="col"><center>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                      IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 6;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext"><?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 29;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext"><?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 24;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext"><?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 26;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext"><?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 7;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext"><?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 28;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext">Kelas <?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 27;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext">Kelas <?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 31;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext">Kelas <?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 30;");
                    while($d = mysqli_fetch_array($data)){
                    $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext">Kelas <?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                     "SELECT mr_tt.kelas, mr_unit.nama_unit, mr_tt.no_bed, mr_tt.id_register,
                     IF(mr_tt.no_bed='1', 'A', 'B') AS bed
                      FROM mr_tt, mr_unit
                      WHERE mr_tt.id_unit = mr_unit.id_unit
                      AND mr_tt.id_unit = 25
                      ORDER BY mr_tt.no_bed ASC;");
                    while($d = mysqli_fetch_array($data)){
                   $id_register = $d['id_register'];
                  ?>
                  <tr>
                    <td><left><font class="bluetext">Kelas <?php echo $d['kelas'];?></font> <?php echo $d['nama_unit']; ?></td>
                    <td><center><?php echo $d['bed']; ?></td>
                    <td><center>
                      <?php
                      if($id_register=='123'){
                      ?>
                        <font class="greentext">Kosong</font>
                      <?php
                      }else{
                        ?>
                          <font class="redtext">Terpakai</font>
                        <?php
                      }
                    ?>
                    </td>
                  </tr>
                  <?php } ?>
                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div> <!-- .content -->
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
    </div><!-- Right Panel -->
<?php include "views/footer.php"; ?> 