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
$mesaj1 ="<script>alert('Kayıt İşlemi Başarılı');window.location='yenikayit.php'</script>";
$mesaj2 ="<script>alert('Kayıt İşlemi Başarısız');window.location='yenikayit.php'</script>";
if(isset($_GET['islem']))
{
    include('baglanti.php');
    $query_ekle=$db->prepare("insert into tbl_ogrbilgiler (ograd, ogrsoyad, aciklama, bolum, baslangic, bitis, cinsiyet) values (?,?,?,?,?,?,?)");
    $ekle=$query_ekle->execute(array($_POST['ograd'],$_POST['ogrsoyad'],$_POST['aciklama'],$_POST['bolum'],$_POST['baslangic'],$_POST['bitis'],$_POST['cinsiyet']));
    if($ekle)
    {
        echo $mesaj1;
    }
    else
    {
        echo $mesaj2;
    }

}
?>
    <div class="jumbotron text-center" id="div1">
        <h1>Yeni Stajyer Kaydı</h1>
    </div>
    <div class="container">
        <div class="col-md-8">
            <form name="form1" method="POST" action="?islem=ekle">
                <div class="form-group">
                    <label for="ograd">Öğrenci Adı</label>
                    <input class="form-control" type="text" name="ograd" id="ograd" required placeholder="Öğrencinin Adını">
                </div>
                <div class="form-group">
                    <label for="ogrsoyad">Öğrenci Soyadı</label>
                    <input class="form-control" id="ogrsoyad" type="text" required name="ogrsoyad"placeholder="Öğrencinin Soyadı">
                </div>
                <div class="form-group">
                    <label for="baslangic">Başlangıç Tarihi</label>
                    <input class="form-control" type="date" required name="baslangic" id="baslangic">
                </div>
                <div class="form-group">
                    <label for="bitis">Bitiş Tarihi</label>
                    <input class="form-control" type="date" required name="bitis" id="bitis">
                </div>
                <div class="contaier">
                <div>
                <label>Cinsiyet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" required name="cinsiyet" id="cinsiyet" value="Erkek">
                    <label for="cinsiyet" class="form-check-label">Erkek</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="Kız">
                    <label for="cinsiyet" class="form-check-label">Kız</label>
                </div>
                <div>
                <div class="form-group">
                    <label for="bolum">Çalışıcağı Alan</label>
                    <select id="bolum" class="form-control" name="bolum">
                        <option value="Web Tabanlı">Web Tabanlı</option>
                        <option value="Masaüstü Tabanlı">Masaüstü Tabanlı</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aciklama">Açıklama</label>
                    <textarea rows="3" id="aciklama" class="form-control" name="aciklama"></textarea>
                </div>  
                <div>
                    <button type="submit" class="btn btn-success" name="kaydet" value="kaydet">Kaydet</button>
                    <a href="bilgilerilistele.php" class="btn btn-danger">Vazgeç</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>