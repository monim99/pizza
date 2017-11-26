<?php
if(isset($_COOKIE["cookie"])==false) {
    $val=0;
    setcookie("cookie",$val , time() + 604800);
    setcookie("data",time() + 604800);
    }
else {        
    $val=$_COOKIE['cookie'];
    $val++;
    $tempo=$_COOKIE['data'];
    setcookie("cookie",$val , $tempo); 
}
?>

<!DOCTYPE html PUBLIC "=//W3C//DTD XHMTL 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhmtl" xml:lang="it">
<head><title>PHP Script using Cookies</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('http://www.yourfashionchic.it/wp-content/uploads/2015/05/web-browsers4.png');
    min-height: 100%;
}
</style>
</head>
<body>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Accesso numero:
    <?php
        echo $val;
    ?>
    </span>
</div>
</div>
</body>
</html>