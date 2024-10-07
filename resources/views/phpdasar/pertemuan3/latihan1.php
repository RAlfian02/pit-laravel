<head>
<?php
define('BASE_PATH', '/opt/lampp/htdocs/');
require_once BASE_PATH . 'libraries/kodingan.php';
?>
</head>
<body> <h1>Struktur Kendali</h1>

    <h2>Pengulangan</h2>

    <h3><code>for</code></h3>
<?php kodingan('
for( $i = 0; $i < 5; $i++ ){
    echo "hello world".$i."!<br>";
}
');
?>
    <h3><code>while</code></h3>
<?php kodingan('
$i = 1;
echo "hell";
while(1){
    echo "o";
    if($i++ >= 5) break;
}
echo "!!";
');?>

    <h3><code>do...while</code></h3>
<?php kodingan('
$i = 9999;
do {
    echo "hellOwOrld ".$i."<br>";
} while( 0 );
');?>

    <h3>Latihan 1: Tabel</h3>
<?php kodingan('
<table>
<?php $i = 0; while(1): ?>
    <tr>
    <?php $j = 0; while(1): ?>
        <td><?= "$i, $j"; ?></td>
    <?php if(++$j >= 5) break;
    endwhile; ?>
<?php if(++$i >= 3) break;
endwhile; ?>
</table>
',1); ?>

    <h2>Pengkodisian / Percabangan</h2>

    <h3><code>if</code></h3>
<?php kodingan(<<<'KODE'
<?php
$i = 1 + 1;
if ($i === 2.0) echo 'Benar!';
elseif ($i === 4/2) echo 'Tapi boong';
else echo 'kok salah?';
?>
KODE) ?>

    <h2>Function</h2>
<?php kodingan('
function myFunc($x="world"){
    return "hello ".$x.\'!\';
}

echo \'<p>\'.myFunc("pondokit").\'</p>\';
');?>

    <h2>Array</h2>

    <h3><code>foreach</code></h3>
<?php kodingan('
$arr = array(\'p\',\'a\',\'k\',\'s\',\'a\');
echo "<p>";
foreach($arr as $c){
    echo "<div>".$c."</div>";
}
echo "</p>";
');?>

    <h2>Associative Array</h2>
<?php kodingan('
$murid = array("nama" => "Alfi", "umur" => 22);
echo "<ul>";
echo "<li>nama: ".$murid["nama"]."</li>";
echo "<li>umur: ".$murid["umur"]."</li>";
echo "</ul>";
');?>

</body>