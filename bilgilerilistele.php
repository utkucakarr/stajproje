<?php
include 'baglanti.php';
$id = $_GET['sil'];
$mesaj1 ="<script>alert('Kayıt Silme Başarılı');window.location='bilgilerilistele.php'</script>";
$mesaj2 ="<script>alert('Kayıt Silme Başarısız');window.location='bilgilerilistele.php'</script>";
$query = $db->prepare("DELETE FROM tbl_ogrbilgiler WHERE id = :id");
$delete = $query->execute(array(
     'id' => $_GET['sil']
));
if (isset($_GET['sil'])){
if($delete){
    $last_id = $db->lastInsertId();
    echo $mesaj1;
}
else{
    echo $mesaj2;
}}
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Stajyer Listesi</h1>
    </div>
    <div class="container">
        <section class="mb-3">
            <a href="yenikayit.php" class="btn btn-primary">Yeni Kayıt</a>
            <a href="index.php" class="btn btn-danger">Çıkış</a>
        </section>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col">Id</th>
                    <th scope="col">Öğrenci Adı</th>
                    <th scope="col">Öğrenci Soyadı</th>
                    <th scope="col">Çalıştığı Alan</th>
                    <th scope="col">Başlangıç Tarihi</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col">Cinsiyet</th>
                    <th scope="col">Açıklama</th>
                    <th colspan=2>İşlem</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("baglanti.php");

                $query = $db->query("Select * From tbl_ogrbilgiler",PDO::FETCH_ASSOC);

                if($query->rowCount())
                {
                        foreach($query as $row)
                        {
                            
            ?>
                <tr>
                <th scope="row"><?=$row['id']?></th>
                <td><?=$row['ograd']?></td>
                <td><?=$row['ogrsoyad']?></td>
                <td><?=$row['bolum']?></td>
                <td><?=$row['baslangic']?></td>
                <td><?=$row['bitis']?></td>
                <td><?=$row['cinsiyet']?></td>
                <td><?=$row['aciklama']?></td>
                <td>
                    <a href="bilgilerilistele.php?sil=<?=$row['id']?>"><button class="btn btn btn-danger">Sil</button></a>
                    <a href="duzenle.php?duzenle=<?=$row['id']?>"><button class="ml-2 btn btn btn-success">Düzenle</button></a>
                </td>
                </tr>
                <?php
                }}
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
