<?php
echo "<form action='ripasso.php' method='post'>
<p></p>login:</br>
<input type='text' name='login'></p>
<p></p>password:</br>
<input type='text' name='pws'></p>
</p>
<input type='submit' name='setCookie' value='setta cookie'>
</form>";
if(!empty($_POST)){
    setcookie("a",$_POST["login"]." ".$_POST["pws"]);
}
echo "<h3>".$_COOKIE["a"]."</h3>";
?>