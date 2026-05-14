<?php
// Sayfaya direkt erişimi engellemek için POST kontrolü yapıyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri güvenli bir şekilde alıyoruz
    $adsoyad = htmlspecialchars($_POST['adsoyad'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefon = htmlspecialchars($_POST['telefon'] ?? '');
    $sehir = htmlspecialchars($_POST['sehir'] ?? '');
    $cinsiyet = htmlspecialchars($_POST['cinsiyet'] ?? '');
    $mesaj = htmlspecialchars($_POST['mesaj'] ?? '');
    
    // Checkbox (Konu) birden fazla seçilebildiği için dizi olarak gelir, onu metne çeviriyoruz
    $konu = isset($_POST['konu']) ? implode(", ", $_POST['konu']) : 'Seçilmedi';
} else {
    // Eğer sayfaya form doldurulmadan direkt linkle girilirse iletişim sayfasına geri gönder
    header("Location: iletisim.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İşlem Başarılı - Ensar Efe Mutioğlu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main class="container my-5">
        <h1 class="text-center text-success mb-4"><i class="bi bi-check-circle"></i> Mesajınız Başarıyla İletildi!</h1>
        <p class="text-center text-info mb-5">İletişim formundan gönderdiğiniz veriler sunucu tarafından başarıyla alındı ve aşağıda listelenmiştir.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-body-tertiary shadow-sm border border-secondary">
                    <div class="card-body p-4">
                        <table class="table table-dark table-hover table-striped border-secondary mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-25 text-info">Ad Soyad:</th>
                                    <td><?php echo $adsoyad; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">E-Posta:</th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">Telefon:</th>
                                    <td><?php echo $telefon; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">Şehir:</th>
                                    <td><?php echo $sehir; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">Cinsiyet:</th>
                                    <td><?php echo $cinsiyet; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">Konu:</th>
                                    <td><?php echo htmlspecialchars($konu); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-info">Mesajınız:</th>
                                    <td><p class="mb-0 text-break"><?php echo nl2br($mesaj); ?></p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="index.html" class="btn btn-outline-light">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>