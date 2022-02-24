<?php
    require_once('../config/login.php');
    $db = new Login();
    $db->isLogin();

    $user = $db->getUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#282d38">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <div class="container">
        <header class="main">
            <nav>
                <div class="brand">
                    <button class="toggler" id="toggleBtn">&#x2630;</button>
                </div>
                <div class="logout">
                    <button id="btn-logout">Logout</button>
                </div>
            </nav>
        </header>
        <aside>
            <div class="title">
                <H4 class="dashboard">SD N Cibugel I</H4>
            </div>
            <div class="logo">
                <img src="https://www.pngkey.com/png/full/73-730477_first-name-profile-image-placeholder-png.png" alt="avatar" class="avatar">
                <small class="center"><?=$user['nama'];?></small>
            </div>
            <hr class="hr">
            <ul>
                <li>
                    <a href="main.php?data-diri=1">Data Diri</a>
                </li>
                <li>
                    <a href="main.php?data-periodik=1">Data Periodik</a>
                </li>
                <li>
                    <a href="main.php?data-orangtua=1">Data Orang Tua</a>
                </li>
                <li>
                    <a href="main.php?data-kesejahteraan=1">Data Kesejahteraan</a>
                </li>
                <li>
                    <a href="main.php?data-photo=1">Photo</a>
                </li>
            </ul>
        </aside>
        <main class="main">
            <div class="content">
                <div class="wrapper">
                    <?php if(isset($_GET['data-diri'])){?>
                        <h1>Data Diri</h1>
                        <hr class="hr">
                        <div class="message"></div>
                        <form action="../model/biodata.php" method="post" id="bioForm">
                            <div class="group group-namalengkap">
                                <label for="namalengkap"> Nama Lengkap
                                    <input type="text" name="namalengkap" class="with-control" placeholder="Nama Lengkap">
                                </label>
                            </div>
                            <div class="group group-nik">
                                <label for="nik"> NIK
                                    <input type="text" name="nik" class="with-control" placeholder="Nomor Induk Kependudukan">
                                </label>
                            </div>
                            <div class="group group-gender">
                                <label for="gender"> Jenis Kelamin
                                    <select name="gender" id="" class="with-control">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </label>
                            </div>
                            <div class="group group-tempatlahir">
                                <label for="tempatlahir"> Tempat Lahir
                                    <input type="text" name="tempatlahir" class="with-control" placeholder="Tempat Lahir">
                                </label>
                            </div>
                            <div class="group group-tanggallahir">
                                <label for="tanggallahir"> Tanggal Lahir
                                    <input type="date" name="tanggallahir" class="with-control" placeholder="Tanggal Lahir">
                                </label>
                            </div>
                            <div class="group group-akte">
                                <label for="akte"> Nomor Akte Lahir
                                    <input type="text" name="akte" class="with-control" placeholder="Akte Lahir">
                                </label>
                            </div>
                            <div class="group group-status">
                                <label for="status"> Status Dalam Keluarga
                                <select name="status" id="" class="with-control">
                                        <option value="">Status Dalam Keluarga</option>
                                        <option value="1">Anak Kandung</option>
                                        <option value="2">Anak Tiri</option>
                                        <option value="3">Anak Angkat</option>
                                    </select>
                                </label>
                            </div>
                            <div class="group group-anakke">
                                <label for="anakke"> Anak Ke
                                    <input type="text" name="anakke" class="with-control" placeholder="Anak Ke Berapa">
                                </label>
                            </div>
                            <div class="group group-jsk">
                                <label for="jsk"> Jumlah Saudara Kandung
                                    <input type="text" name="jsk" class="with-control" placeholder="Jumlah Saudara Kandung">
                                </label>
                            </div>
                            <div class="group group-hobi">
                                <label for="hobi"> Hobi
                                    <input type="text" name="hobi" class="with-control" placeholder="Hobi">
                                </label>
                            </div>
                            <div class="group group-cita">
                                <label for="cita"> Cita-cita
                                    <input type="text" name="cita" class="with-control" placeholder="Cita-cita">
                                </label>
                            </div>
                            <div class="group group-tinggal">
                                <label for="tinggal"> Tinggal Bersama
                                <select name="tinggal" id="" class="with-control">
                                        <option value="">Tinggal Bersama</option>
                                        <option value="1">Orang Tua</option>
                                        <option value="2">Wali</option>
                                        <option value="3">Panti Asuh</option>
                                        <option value="4">Pesantren</option>
                                    </select>
                                </label>
                            </div>
                            <div class="group group-kendaraan">
                                <label for="kendaraan"> Kendaraan Ke sekolah
                                <select name="kendaraan" id="" class="with-control">
                                        <option value="">Kendaraan Ke Sekolah</option>
                                        <option value="1">Jalan Kaki</option>
                                        <option value="2">Antar Jemput</option>
                                        <option value="3">Naik Angkot</option>
                                        <option value="4">Ojek</option>
                                    </select>
                                </label>
                            </div>
                            <div class="group group-hp">
                                <label for="hp"> Nomor Whatsapp Orang Tua
                                    <input type="text" name="hp" class="with-control" placeholder="Nomor Whatsapp Orang Tua">
                                </label>
                            </div>
                            <div class="group group-alamat">
                                <label for="alamat"> Alamat
                                    <textarea name="alamat" id="" cols="30" rows="10" class="with-control" placeholder="Alamat Lengkap"></textarea>
                                </label>
                            </div>
                            <div class="group group-btn">
                                <button class="btn-save" id="save-bio">Save</button>
                            </div>
                        </form>
                    <?php }elseif(isset($_GET['data-periodik'])){?>
                        <h1>Data Periodik</h1>
                        <hr class="hr">
                        <div class="error"></div>
                        <form action="" method="post" id="periodikForm">
                            <div class="group group-tinggibadan">
                                <label for="tinggibadan"> Tinggi Badan (Cm)
                                    <input type="text" name="tinggibadan" placeholder="Tinggi Badan (Cm)" class="with-control">
                                </label>
                            </div>
                            <div class="group group-beratbadan">
                                <label for="beratbadan"> Berat Badan (Kg)
                                    <input type="text" name="beratbadan" placeholder="Berat Badan (Kg)" class="with-control">
                                </label>
                            </div>
                            <div class="group group-jarak">
                                <label for="jarak"> Jarak dari Rumah ke Sekolah (KM)
                                    <input type="text" name="jarak" placeholder="Jarak ke Sekolah (Km)" class="with-control">
                                </label>
                            </div>
                            <div class="group group-waktu">
                                <label for="waktu"> Waktu Tempuh dari Rumah ke Sekolah (Menit)
                                    <input type="text" name="waktu" placeholder="Waktu Tempuh ke Sekolah (Menit)" class="with-control">
                                </label>
                            </div>
                            <div class="group group-kepala">
                                <label for="kepala"> Lingkar Kepala (Cm)
                                    <input type="text" name="kepala" placeholder="Lingkar Kepala (Cm)" class="with-control">
                                </label>
                            </div>
                            <div class="group group-btn">
                                <button class="btn-save" id="periodik">Simpan</button>
                            </div>
                        </form>
                    <?php }elseif(isset($_GET['data-orangtua'])){?>
                        <h1>Data Orang Tua</h1>
                        <hr class="hr">
                        <div class="error"></div>
                        <form action="" method="post" id="orangtuaForm">
                            <div class="group group-namaayah">
                                <label for="namaayah"> Nama Ayah
                                    <input type="text" name="namaayah" class="with-control" placeholder="Nama Ayah">
                                </label>
                            </div>
                            <div class="group group-nikayah">
                                <label for="nikayah"> NIK Ayah
                                    <input type="text" name="namaayah" class="with-control" placeholder="Nama Ayah">
                                </label>
                            </div>
                            <div class="group group-tgllahirayah">
                                <label for="tgllahirayah"> Tanggal Lahir Ayah
                                    <input type="date" name="tgllahirayah" class="with-control" placeholder="Tanggal Lahir Ayah">
                                </label>
                            </div>
                            <div class="group group-pendidikanayah">
                                <label for="pendidikanayah"> Pendidikan Ayah
                                    <input type="text" name="pendidikanayah" class="with-control" placeholder="Pendidikan Ayah">
                                </label>
                            </div>
                            <div class="group group-pekerjaanayah">
                                <label for="pekerjaanayah"> Pekerjaan Ayah
                                    <input type="text" name="pekerjaanayah" class="with-control" placeholder="Pekerjaan Ayah">
                                </label>
                            </div>
                            <div class="group group-penghasilanayah">
                                <label for="penghasilanayah"> Penghasilan Ayah
                                    <input type="text" name="penghasilanayah" class="with-control" placeholder="Penghasilan Ayah">
                                </label>
                            </div>
                            <div class="group group-namaibu">
                                <label for="namaibu"> Nama Ibu
                                    <input type="text" name="namaibu" class="with-control" placeholder="Nama ibu">
                                </label>
                            </div>
                            <div class="group group-nikibu">
                                <label for="nikibu"> NIK Ibu
                                    <input type="text" name="namaibu" class="with-control" placeholder="Nama ibu">
                                </label>
                            </div>
                            <div class="group group-tgllahiribu">
                                <label for="tgllahiribu"> Tanggal Lahir Ibu
                                    <input type="date" name="tgllahiribu" class="with-control" placeholder="Tanggal Lahir ibu">
                                </label>
                            </div>
                            <div class="group group-pendidikanibu">
                                <label for="pendidikanibu"> Pendidikan Ibu
                                    <input type="text" name="pendidikanibu" class="with-control" placeholder="Pendidikan ibu">
                                </label>
                            </div>
                            <div class="group group-pekerjaanibu">
                                <label for="pekerjaanibu"> Pekerjaan Ibu
                                    <input type="text" name="pekerjaanibu" class="with-control" placeholder="Pekerjaan ibu">
                                </label>
                            </div>
                            <div class="group group-penghasilanibu">
                                <label for="penghasilanibu"> Penghasilan Ibu
                                    <input type="text" name="penghasilanibu" class="with-control" placeholder="Penghasilan ibu">
                                </label>
                            </div>
                            <div class="group group-alamat">
                                <label for="alamat"> Alamat
                                    <textarea name="alamat" id="" cols="30" rows="10" class="with-control" placeholder="Alamat Lengkap"></textarea>
                                </label>
                            </div>
                            <div class="group group-btn">
                                <button class="btn-save" id="orangtua">Simpan</button>
                            </div>
                        </form>
                    <?php }elseif(isset($_GET['data-kesejahteraan'])){?>
                        <h1>Data Kesejahteraan</h1>
                        <hr class="hr">
                        <div class="error"></div>
                        <form action="" method="post" id="sejahteraForm">
                            <div class="group group-kip">
                                <label for="kip"> Nomor KIP (Kartu Indonesia Pintar)
                                    <input type="text" class="with-control" name="kip" placeholder="Nomor KIP">
                                </label>
                            </div>
                            <div class="group group-kipnama">
                                <label for="namakip"> Nama di KIP (Kartu Indonesia Pintar)
                                    <input type="text" class="with-control" name="namakip" placeholder="Nama di KIP">
                                </label>
                            </div>
                            <div class="group group-kks">
                                <label for="kks"> Nomor KKS (Kartu Keluarga Sejahtera)
                                    <input type="text" class="with-control" name="kks" placeholder="Nomor KKS">
                                </label>
                            </div>
                            <div class="group group-kksnama">
                                <label for="namakks"> Nama di KKS (Kartu Keluarga Sejahtera)
                                    <input type="text" class="with-control" name="namakks" placeholder="Nama di KKS">
                                </label>
                            </div>
                            <div class="group group-btn">
                                <button class="btn-save" id="sejahtera">Simpan</button>
                            </div>
                        </form>
                    <?php }elseif(isset($_GET['data-photo'])){?>
                        <h1>Data Photo</h1>
                        <hr class="hr">
                        <div class="error"></div>
                        <form action="" method="post" id="photoForm">
                            <div class="group group-photo">
                                <label for="photo"> Photo
                                    <input type="file" class="with-control">
                                </label>
                            </div>
                            <dvi class="group group-preview">
                                <img src="https://www.pngkey.com/png/full/73-730477_first-name-profile-image-placeholder-png.png" alt="">
                            </dvi>
                            <div class="group group-btn">
                                <button class="btn-save" id="Photo">Simpan</button>
                            </div>
                        </form>
                    <?php }else{?>
                    <div class="data">
                        <div class="data-nama">
                            <h4>Nama Lengkap Siswa</h4>
                            <hr class="hr">
                            <small class="detail">Full Name</small>
                        </div>
                        <div class="data-ttl">
                            <h4>Date of Birth</h4>
                            <hr class="hr">
                            <small class="detail">Date of Birth</small>
                        </div>
                        <div class="data-agama">
                            <h4>Agama</h4>
                            <hr class="hr">
                            <small class="detail">Religion</small>
                        </div>
                        <div class="data-age">
                            <h4>Usia</h4>
                            <hr class="hr">
                            <small class="detail">Age years old</small>
                        </div>
                        <div class="data-ayah">
                            <h4>Nama Ayah</h4>
                            <hr class="hr">
                            <small class="detail">Father's name</small>
                        </div>
                        <div class="data-ibu">
                            <h4>Nama Ibu</h4>
                            <hr class="hr">
                            <small class="detail">Mother's name</small>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
        <footer class="main">
            Virtual Digital Solution &copy; <?=date('Y')?>
        </footer>
    </div>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/biodata.js"></script>
</body>
</html>