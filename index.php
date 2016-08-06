<?php
//Data yang diberikan
$data = ['1', '3', '3', '2', '4', '10', '11', '10', '9', '9', '9'];
//Pengerjaan
foreach ($data as $d => $var) {
    if ($var == next($data)) {
        echo "<strong>{$var}</strong>";
    } else {
        echo "<i>{$var}</i>";
    }
}
