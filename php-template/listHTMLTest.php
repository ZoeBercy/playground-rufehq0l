<?php
    include 'empty.php';
    function test() {
        $condition = listHTML("Capitale",["Paris", "Berlin", "Moscou"]) === "<h3>Capital</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>" ;
        $condition = $condition && listHTML("Burger",["BigMac", "Fish", "Beacon"]) === "<h3>Burger</h3><ul><li>BigMac</li><li>Fish</li><li>Beacon</li></ul>" ;
        $condition = $condition && listHTML("Burger",["BigMac"]) === "<h3>Burger</h3><ul><li>BigMac</li></ul>" ;
        $condition = $condition && listHTML("",["BigMac"]) === null ;
        $condition = $condition && listHTML(null,["BigMac"]) === null ;
        $condition = $condition && listHTML("truc",[]) === null ;

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
