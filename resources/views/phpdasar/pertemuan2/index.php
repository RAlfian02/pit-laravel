<?php
/*
 SINTAKS PHP
 https://www.youtube.com/watch?v=XTrU0GzMfCk
*/

// variable
$nama = "";
$nama_panjang = array("Muhammad ","Nur ","Raafi ","Alfian ","Akbar");
foreach($nama_panjang as $s){
    $nama .= $s;
}
?>

<body>
<p><?php
    // standard output
    echo $nama;
?></p>
</body>