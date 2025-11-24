<!-- 14. Call `calculateVAT(100, 0.15)` and explain why a global `$discount = 10` isn't directly
accessible inside it. -->

<?php
$discount = 10; // global variable

function calculateVAT($amount, $rate) {
    // $discount is NOT accessible here directly
    // echo $discount; // would cause undefined variable error

    $vat = $amount * $rate;
    return $vat;
}

echo calculateVAT(100, 0.15); // 15
?>
