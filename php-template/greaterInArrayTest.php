<?php
    include 'empty.php';
    function test() {
        if (plusGrand([1, 1]) === 1 && plusGrand([10, 1]) === 10 && plusGrand([5, 20]) === 20 && plusGrand([]) === null && plusGrand([1,2,3,4,5,6,10]) === 10) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
