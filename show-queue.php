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
                        <strong>Monitor Antrian</strong>
                    </div>
                    <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><center>Poli</th>
                                            <th scope="col"><center>Dipanggil</th>
                                            <th scope="col"><center>Dokter</th>
                                            <th scope="col"><center>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div id="antrian">
                                        <tr>
                                            <td><center>Anak</td>
                                            <td><center>A<?php echo $anak_ant; ?></td>
                                            <td><center>
                                                <?php
                                                    if(!$anak_nama_dokter){
                                                        ?>
                                                            Tutup<br><br>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <?php echo $anak_nama_dokter?><br><br>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><center><?php echo $anak_max; ?></td>
                                      </tr>
                                      <tr>
                                            <td><center>Kandungan</td>
                                            <td><center>B<?php echo $kandungan_ant; ?></td>
                                            <td><center>
                                                <?php
                                                    if(!$kandungan_nama_dokter){
                                                        ?>
                                                            Tutup<br><br>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <?php echo $kandungan_nama_dokter?><br><br>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><center><?php echo $kandungan_max; ?></td>
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
        </div> <!-- .content -->
        <div align="center"><p>Developed by Ardi Tri Heru<br>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a> All rights reserved.<br><font face="consolas" >Version 1.0</font></div>
<br><br>
    </div><!-- Right Panel -->
<?php include "views/footer.php"; ?> 