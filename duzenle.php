<?php
session_start()
?>
<html lang="tr">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Güncelleme Form Ekranı</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/daterangepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<script>
function dogrula(){
    var degerad = document.formisimm.ograd.value;
    var degersoyad = document.formisimm.ogrsoyad.value;
    var degerbaslangic = document.formisimm.baslangic.value;
    var degerbitis = document.formisimm.bitis.value;
    if(degerad == ""){
        window.alert("Öğrenci adı alanı boş bırakılamaz.");
        return false;
    }
    else if(degersoyad == ""){
        window.alert("Öğrenci soyisim alanı boş bırakılamaz.");
        return false;
    }
    else if(degerbaslangic == ""){
        window.alert("Başlangıç tarih alanı boş bırakılamaz.");
        return false;
    }
    else if(degerbitis == ""){
        window.alert("Bitiş tarih alanı boş bırakılamaz.");
        return false;
    }
}
</script>

<body>
    
<?php
if(empty($_SESSION['Oturum_Kadi']) || ($_SESSION['Oturum_Yetki'] == "1" ))
{
    header("Location: index.php");
}
else
{
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
}
?>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Kayıt Güncelleme Formu</h2>
                    <form method="POST" action="" name="formisimm" onsubmit="return dogrula()">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Öğrenci Adı</label>
                                    <input class="input--style-4" required type="text" value="<?=$query['ograd']?>" name="ograd" id="ograd">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Öğrenci Soyadı</label>
                                    <input class="input--style-4" required type="text" name="ogrsoyad" id="ogrsoyad" value="<?=$query['ogrsoyad']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Başlangıç Tarihi</label>
                                    <div class="input-group-icon">
                                        <input required class="input--style-4 js-datepicker" type="text" name="baslangic" value="<?=$query['baslangic']?>" id="baslangic">
                                        <i id="baslangic" class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label">Bitiş Tarihi</label>
                                    <div class="input-group-icon">
                                        <input required class="input--style-4 js-datepicker" value="<?=$query['bitis']?>" type="text" name="bitis" id="bitis">
                                        <i id="bitis" class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Açıklama</label>
                                    <input class="input--style-4" type="text" value="<?=$query['aciklama']?>" name="aciklama" id="aciklama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="p-t-10">
   
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Çalışıcağı Alan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bolum" id="bolum">
                                    <option value="Web Tabanlı" <?php echo ($query['bolum'] == 'Web Tabanlı')?'selected':''?> >Web Tabanlı</option>
                                    <option value="Masaüstü Tabanlı" <?php echo ($query['bolum'] == 'Masaüstü Tabanlı')?'selected':''?>>Masaüstü Tabanlı</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="duzenle" value="duzenle">Kaydet</button>
                            <a href="bilgilerilistele.php" class="btn btn--green" style="text-decoration: none">Listele</a>
                            <a onclick="return yonlendir()" href="logout.php" class="btn btn--red" style="background-color:red; text-decoration: none">Çıkış</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="utku.js"></script>

</body>

</html>