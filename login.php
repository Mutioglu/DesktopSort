<?php
$hata_mesaji = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $sifre = $_POST['sifre'] ?? '';

    $dogru_email = "efemuti81@hotmail.com";
    $dogru_sifre = "b251210105"; 

    if (empty($email) || empty($sifre)) {
        $hata_mesaji = "Lütfen tüm alanları doldurunuz.";
    } elseif ($email == $dogru_email && $sifre == $dogru_sifre) {
        echo "<!DOCTYPE html><html lang='tr' data-bs-theme='dark'><head><meta charset='UTF-8'><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'></head><body class='container mt-5 text-center'><h1>Hoşgeldiniz " . substr($dogru_sifre, 0) . "</h1><a href='index.html' class='btn btn-primary mt-3'>Ana Sayfaya Dön</a></body></html>";
        exit();
    } else {
        $hata_mesaji = "Hatalı kullanıcı adı veya şifre!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Ensar Efe Mutioğlu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Ensar Efe</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="ozgecmis.html">Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                        <li class="nav-item"><a class="nav-link active" href="login.php">Giriş Yap</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-body-tertiary p-4 rounded shadow border border-secondary">
                <h2 class="text-center mb-4 text-info">Sisteme Giriş</h2>
                <?php if($hata_mesaji): ?>
                    <div class="alert alert-danger"><?php echo $hata_mesaji; ?></div>
                <?php endif; ?>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">E-Posta</label>
                        <input type="text" name="email" class="form-control" placeholder="Örn: g2412100001@sakarya.edu.tr">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Şifre</label>
                        <input type="password" name="sifre" class="form-control" placeholder="Örn: g2412100001">
                    </div>
                    <button type="submit" class="btn btn-info w-100">Giriş Yap</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>