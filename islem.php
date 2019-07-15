<?php
/*session_start();
ob_start();
include('baglanti.php');
?>

<?php
if (isset($_POST['loggin'])){
    $kadi=$_POST['kadi'];
    $sifre=$_POST['sifre'];

    if($kadi && $sifre){
        $sorgula=mysql_query("select * from yonetici where kadi='$kadi' and sifre='$sifre'");
        $verisay=mysql_num_rows($sorgula);
        if($verisay>0)
        {
            $_SESSION['kadi'] = $kadi;
            header('Location:bilgilerilistele.php');
        }
        else{
            header('Location:index.php');
        }
    }
}*/

?>