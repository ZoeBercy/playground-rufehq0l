<?php
    include 'empty.php';
    function test() {
        $condition = verificationPassword("") === false && verificationPassword("abcdefgh") === false && verificationPassword("abcdefghxxxxx") === false && verificationPassword("axxx") === false;
        //$condition = $condition && verificationPassword("azerty1Q") === true && verificationPassword("azrty1Q") === false && verificationPassword("azerty1QQQ") === true && verificationPassword("AZERTY1QQQ") === false


        if ($condition) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
