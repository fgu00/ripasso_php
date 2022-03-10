<?php
echo "<form action='es_cookie' method='post'>
valore<input type='text' name='valore'></p>
</form>";
if(!empty($_POST)){
    if(!empty($_COOKIE)){
    setcookie("totale",$_POST["valore"]);  
    setcookie("media",$_POST["1"]);
    setcookie("massimo",$_POST["valore"]);
    setcookie("minomo",$_POST["valore"]);
    }else{
        $tot=$_COOKIE['totale']+$_POST['valore'];
        echo $tot;
    }
}
?>