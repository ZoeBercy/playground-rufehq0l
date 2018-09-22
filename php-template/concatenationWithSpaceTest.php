<?php
    include 'empty.php';
    function test() {
        if (concatenationWithSpace("abc", "def") === "abc def" && concatenationWithSpace("nicolas", "sarkozy") === "nicolas sarkozy") {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
