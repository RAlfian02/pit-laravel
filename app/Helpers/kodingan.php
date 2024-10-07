<?php
include_once 'prism.php';
function kodingan($code, $mode = 0) {
/*
TUTOR:
<?php kodingan(<<<'KODE'
echo "Hello world!";
KODE)
?>

    mode 0: start in HTML mode (no auto tags)
    mode 1: start in PHP mode (auto <?php ?> tags)
*/
    echo '<pre><code class="language-php">'.htmlspecialchars(
    ($mode == 1?
    '<?php'
    :
    ($mode == 2?
    '<?php'
    :
    '<?php'
    )
    )
    ,ENT_QUOTES).'</code></pre>';

    echo '<fieldset><legend>OUTPUT</legend>';
    eval($mode !== 1?
    $code
    :
    '?>'.$code.'<?php'
    );
    echo '</fieldset>';
}
?>
