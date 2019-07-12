<html lang="tr">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
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
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Yeni Kayıt Formu</h2>
                    <form method="POST" action="?islem=ekle">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Öğrenci Adı</label>
                                    <input class="input--style-4" type="text" name="ograd" id="ograd" required placeholder="Öğrencinin Adını">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Öğrenci Soyadı</label>
                                    <input class="input--style-4" type="text" name="ogrsoyad" id="ogrsoyad" required name="ogrsoyad"placeholder="Öğrencinin Soyadı">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Başlangıç Tarihi</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="baslangic" id="baslangic">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label">Bitiş Tarihi</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="bitis" id="bitis">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Açıklama</label>
                                    <input class="input--style-4" type="text" name="aciklama" id="aciklama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                <div class="input-group">
                                    <label class="label">Cinsiyet</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Erkek
                                            <input type="radio" checked="checked" name="cinsiyet" id="cinsiyet" value="Erkek">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Kız
                                            <input type="radio" name="cinsiyet" id="cinsiyet" value="Kız">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Çalışıcağı Alan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bolum" id="bolum">
                                    <option value="Web Tabanlı">Web Tabanlı</option>
                                    <option value="Masaüstü Tabanlı">Masaüstü Tabanlı</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="kaydet" value="kaydet">Kaydet</button>
                            <a href="bilgilerilistele.php" class="btn btn--green" style="text-decoration: none">Listele</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>