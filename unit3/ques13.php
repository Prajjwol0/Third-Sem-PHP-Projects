
    <!-- 13. Define a function `calculateVAT($amount, $rate)` that returns the amount including VAT. -->

    <?php

    function calculateVAT($amount,$rate){
        $vat=$amount/$rate;
        echo"Amount is: $amount <br>";
        echo "Vat is: $vat <br>";
        echo "Total Amount is: ".$amount+$vat;

    }
    calculateVat(30000,13);
    ?>
