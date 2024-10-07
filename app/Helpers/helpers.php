<?php
foreach (glob(__DIR__ . '/*.php') as $filename) {
    if (basename($filename) != basename(__FILE__)) {
        include_once $filename;
    }
}
