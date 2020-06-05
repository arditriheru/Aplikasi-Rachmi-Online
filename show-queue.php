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
        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <strong>Poli Anak</strong>
                    </div>
                    <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><center>Dokter</th>
                                            <th scope="col"><center>Antrian</th>
                                            <th scope="col"><center>Total</th>
                                            <th scope="col"><center>Dilayani</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div id="antrian">
                                        <tr>
                                            <td><center>
                                                <?php
                                                    if(!$anak_nama_dokter){
                                                        ?>
                                                            Tutup
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <?php echo $anak_nama_dokter?>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><center>A<?php echo $anak_ant; ?></td>
                                            <td><center><?php echo $anak_max; ?></td>
                                            <td><center><?php echo $anak_ant;?></td>
                                      </tr>
                                  </div>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <strong>Poli Kandungan</strong>
                    </div>
                    <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><center>Dokter</th>
                                            <th scope="col"><center>Antrian</th>
                                            <th scope="col"><center>Total</th>
                                            <th scope="col"><center>Dilayani</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div id="antrian">
                                      <tr>
                                            <td><center>
                                                <?php
                                                    if(!$kandungan_nama_dokter){
                                                        ?>
                                                            Tutup
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <?php echo $kandungan_nama_dokter?>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><center>B<?php echo $kandungan_ant; ?></td>
                                            <td><center><?php echo $kandungan_max; ?></td>
                                            <td><center><?php echo $kandungan_ant;?></td>
                                      </tr>
                                  </div>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
<?php include "views/footer.php"; ?> 