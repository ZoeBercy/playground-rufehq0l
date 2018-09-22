<?php
    include 'empty.php';
    function test() {
        if (concatenation("abc", "def") === "abcdef" && concatenation("nicolas", "sarkozy") === "nicolassarkozy") {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
