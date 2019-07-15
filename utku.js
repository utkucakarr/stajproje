function yonlendir()
{
    var ok = confirm("Çıkış yapmak istediğinizden eminmisiniz");

    if(ok == true){
        return true;
    }
    else{
        return false;
    }
}

function sil()
{
    var ok = confirm("Bu kaydı silmek istediğinizden eminmisiniz");
    if(ok == true)
    {
        return true
    }
    else
    {
        return false;
    }
}
