<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#282d38">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru - SDN Cibugel I</title>
    <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="../model/register.php" method="post" id="regForm">
                <div id="message"></div>
                <div class="group">
                    <h3 class="text">Daftarkan Emailmu Terlebih Dahulu</h3>
                </div>
                <hr class="hr">
                <div class="group">
                    <input type="text" name="namalengkap" id="namalengkap" placeholder="Tulis Nama Lengkap kamu disini yak" class="with-control">
                </div>
                <div class="group">
                    <input type="email" name="email" id="email" placeholder="Tulis email aktif kamu disini yak" class="with-control">
                </div>
                <div class="group">
                    <input type="password" name="password" id="password" placeholder="Tulis Password atau Kata Sandi" class="with-control">
                </div>
                <div class="group">
                    <button class="btn-save-reg">Daftar</button>
                </div>
                <hr class="hr">
                <div class="group">
                    <p class="text">
                        sudah punya akun? <a href="login.php">Login</a>
                    </p>
                </div>
            </form>
            <div class="picture"></div>
        </div>
    </div>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/js/register.js"></script>
</body>
</html>