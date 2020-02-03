<?php

$count = readline("Hoe hoog wordt de piramide: ");
$line = "";
for($i = 1;$i<=$count;$i++){
    $line .= "*";

    echo($line . PHP_EOL);
}

?>