<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php
$mesaj1 ="<script>alert('Güncelleme İşlemi Başarılı');window.location='bilgilerilistele.php'</script>";
$mesaj2 ="<script>alert('Güncelleme İşlemi Başarısız');window.location='duzenle.php'</script>";
include('baglanti.php');
$id = $_GET['duzenle']; 
$query = $db->query("SELECT * FROM tbl_ogrbilgiler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if(isset($_POST['duzenle'])){
    $query = $db->prepare("UPDATE tbl_ogrbilgiler SET
    ograd = :ograd,
    ogrsoyad = :ogrsoyad,
    bolum = :bolum,
    baslangic = :baslangic,
    bitis = :bitis,
    aciklama = :aciklama
    WHERE id = :id");
$update = $query->execute(array(
     "ograd" => $_POST["ograd"],
     "ogrsoyad" => $_POST["ogrsoyad"],
     "bolum" => $_POST["bolum"],
     "baslangic" => $_POST["baslangic"],
     "bitis" => $_POST["bitis"],
     "aciklama" => $_POST["aciklama"],
     "id" => $id
));
if ( $update )    {
    echo $mesaj1;
}
else
{
    echo $mesaj2;
}
}
?>
    <div class="jumbotron text-center">
        <h1>Bilgileri Güncelleme</h1>
    </div>
    <div class="container">
        <section class="mb-3">
            <a href="yenikayit.php" class="btn btn-primary">Yeni Kayıt</a>
            <a href="bilgilerilistele.php" class="btn btn-warning">Listele</a>
            <a href="index.php" class="btn btn-danger">Çıkış</a>
        </section>
        <form name="form1" method="POST" action="">
            <div class="form-group">
                <label for="ograd">Öğrenci Adı</label>
                <input class="form-control" type="text" value="<?=$query['ograd']?>" name="ograd" id="ograd">
            </div>
            <div class="form-group">
                <label for="ogrsoyad">Öğrenci Soyadı</label>
                <input class="form-control" id="ogrsoyad" value="<?=$query['ogrsoyad']?>" type="text" name="ogrsoyad">
            </div>
            <div class="form-group">
                    <label for="baslangic">Başlangıç Tarihi</label>
                    <input class="form-control" value="<?=$query['baslangic']?>" type="date" name="baslangic" id="baslangic">
                </div>
                <div class="form-group">
                    <label for="bitis">Bitiş Tarihi</label>
                    <input class="form-control" value="<?=$query['bitis']?>" type="date" name="bitis" id="bitis">
                </div>
            <div class="form-group">
                <label for="bolum">Çalışıcağı Alan</label>
                <select id="bolum" class="form-control" name="bolum">
                    <option value="Web Tabanlı"  <?php echo ($query['bolum'] == 'Web Tabanlı')?'selected':''?>>Web Tabanlı</option>
                    <option value="Masaüstü Tabanlı" <?php echo ($query['bolum'] == 'Masaüstü Tabanlı')?'selected':''?>>Masaüstü Tabanlı</option>
                </select>
            </div>
            <div class="form-group">
                <label for="aciklama">Açıklama</label>
                <textarea rows="3" id="aciklama" class="form-control" name="aciklama"><?=$query['aciklama']?></textarea>
            </div>  
            <div class="form-group">
                <button type="submit" name="duzenle" class="btn btn-success" value="guncelle">Güncelle</button>
            </div>
        </form>
    </div>

</body>

</html>