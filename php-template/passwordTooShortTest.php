<?php
    include 'empty.php';
    function test() {
        if (verificationPassword("") === false && verificationPassword("abcdefgh") === true && verificationPassword("abcdefghxxxxx") === true && verificationPassword("axxx") === false) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
