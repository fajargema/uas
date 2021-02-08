<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';

	// membuat variabel untuk menampung data dari form
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];
  $tgl_dikirim    = $_POST['tgl_dikirim'];
  $stat    = $_POST['stat'];
  $id_kategori    = $_POST['id_kategori'];
  $gambar = $_FILES['gambar']['name'];

if (isset($_POST['simpan'])) {
//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'assets/img/informasi/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO informasi (judul, isi, tgl_dikirim, stat, id_kategori, gambar) VALUES ('$judul', '$isi', '$tgl_dikirim', '$stat', '$id_kategori', '$nama_gambar_baru')";
                  $result = mysqli_query($db, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='informasi.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png dan jpeg.');window.location='informasi.php';</script>";
            }
} else {
    $query = "INSERT INTO informasi (judul, isi, tgl_dikirim, stat, id_kategori, gambar) VALUES ('$judul', '$isi', '$tgl_dikirim', '$stat', '$id_kategori', null)";
                  $result = mysqli_query($db, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='informasi.php';</script>";
                  }
}
}