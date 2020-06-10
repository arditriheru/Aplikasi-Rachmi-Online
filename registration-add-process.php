<?php
                include 'views/header.php';
                include 'controller/connection.php';
                date_default_timezone_set("Asia/Jakarta");
                $tanggal=date('Y-m-d');
                $jam=date("h:i:sa");
                // menangkap data yang di kirim dari form
                $id_catatan_medik = $_POST['id_catatan_medik'];
                $nama             = $_POST['nama'];
                $alamat           = $_POST['alamat'];
                $kontak           = $_POST['kontak'];
                $id_dokter        = $_POST['id_dokter'];
                $booking_tanggal  = $_POST['booking_tanggal'];
                $id_sesi          = $_POST['id_sesi'];
                $tanggal          = $tanggal;
                $jam              = $jam;
                $status           = '2';
                $keterangan       = 'DAFTAR MANDIRI';
                // cek selisih hari
                $tglsekarang  = new DateTime();
                $jadwal     = new DateTime("$booking_tanggal");
                $hasil      = $tglsekarang->diff($jadwal)->format("%a");
                $selisih    = $hasil;
                // cek antrian
                $a = mysqli_query($koneksi,
                  "SELECT COUNT(*) AS antrian
                  FROM booking
                  WHERE id_dokter='$id_dokter'
                  AND booking_tanggal='$booking_tanggal'
                  AND id_sesi='$id_sesi';");
                  while($b = mysqli_fetch_array($a)){

                $antrian       =  $b['antrian']+1;

                if($selisih>30){
                echo "<script>alert('GAGAL!!! Lebih dari 30 Hari!');document.location='booking-tambah'</script>";
                  break;
                }if(empty($error)){
                  $c = mysqli_query($koneksi,
                  "SELECT COUNT(*) AS cek
                  FROM booking
                  WHERE id_catatan_medik = $id_catatan_medik
                  AND id_dokter = $id_dokter
                  AND id_sesi = $id_sesi
                  AND booking_tanggal = '$booking_tanggal';");
                  while($d = mysqli_fetch_array($c)){
                  $cek       =  $d['cek'];
                }if($cek>0){
                  echo "<script>
                    setTimeout(function() {
                        swal({
                            title: 'Gagal!',
                            text: 'Sebelumnya Sudah Mendaftar!',
                            type: 'error'
                        }, function() {
                            window.location = 'registration-add?id=$id_catatan_medik';
                        });
                    }, 10);
                </script>";
                break;
                }else{
                  $simpan=mysqli_query($koneksi,"INSERT INTO booking (id_booking, nama, alamat, kontak, id_catatan_medik, booking_tanggal, tanggal, jam, status, keterangan, id_dokter, id_sesi)
                    VALUES('','$nama','$alamat',
                  '$kontak','$id_catatan_medik','$booking_tanggal','$tanggal','$jam','$status','$keterangan',
                  '$id_dokter','$id_sesi')");
                }
                if($simpan){
                echo "<script>
                    setTimeout(function() {
                        swal({
                            title: 'Antrian $antrian',
                            text: 'Berhasil Mendaftarkan',
                            type: 'success'
                        }, function() {
                            window.location = 'registration';
                        });
                    }, 10);
                </script>";
                }else{
                echo "<script>
                    setTimeout(function() {
                        swal({
                            title: 'Gagal!',
                            text: 'Hilangkan Tanda Petik di Nama Pasien',
                            type: 'error'
                        }, function() {
                            window.location = 'registration-add?id=$id_catatan_medik';
                        });
                    }, 10);
                </script>";
                  }
                }
              }
              include 'views/footer.php';
          ?>