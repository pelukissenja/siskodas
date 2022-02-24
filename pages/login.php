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
            <form action="../model/login.php" method="post" id="logForm">
            <div id="message"></div>
                <div class="group">
                    <h3 class="text">Silahkan Masukkan Email dan Kata Sandi</h3>
                </div>
                <hr class="hr">
                <div class="group">
                    <input type="email" name="email" id="email" placeholder="Tulis email aktif kamu disini yak" class="with-control">
                </div>
                <div class="group">
                    <input type="password" name="password" id="password" placeholder="Tulis Password atau Kata Sandi" class="with-control">
                </div>
                <div class="group">
                    <button class="btn-save-log">Login</button>
                </div>
                <hr class="hr">
                <div class="group">
                    <p class="text">
                        Belum punya akun? <a href="daftar.php">Daftar</a>
                    </p>
                </div>
            </form>
            <div class="picture"></div>
        </div>
    </div>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/js/login.js"></script>
</body>
</html>