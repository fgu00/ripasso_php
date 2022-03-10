<?php
echo "<form action='es_cookie.php' method='post'>
valore<input type='number' name='valore'></p>
<input type='submit' name='invio'>
</form>";
if(!empty($_POST)){
    if(empty($_COOKIE['totale'])){
    setcookie("totale",$_POST["valore"]);  
    $med=1;
    setcookie("media",$med);
    setcookie("massimo",$_POST["valore"]);
    setcookie("minimo",$_POST["valore"]);
    }else{
        $tot=$_COOKIE['totale']+$_POST['valore'];
        setcookie("totale",$tot); 
        if($_COOKIE['massimo']<$_POST['valore']){
            setcookie("massimo",$_POST["valore"]);   
        }
        if($_COOKIE['minimo']>$_POST['valore']){
        setcookie("minimo",$_POST["valore"]);
        }
        $mid=$tot/($_COOKIE["media"]+1);
        $mod=$_COOKIE["media"]+1;
        setcookie("media",$mod);
        echo $tot+"</br>";
        echo $_COOKIE["massimo"]+"</br>";
        echo $_COOKIE["minimo"]+"</br>";
        echo $mid+"</br>";
    }
?>