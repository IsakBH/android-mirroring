<?php
include "variables.php";

$kommando_for_tilkobling = "adb connect $ip_adresse:$debugging_port";
$scrcpy_kommando = "scrcpy";

if(shell_exec($kommando_for_tilkobling)){
    echo "Tilkoblet! \n";

    echo "Kjører scrcpy for å speile skjermen... \n";
    shell_exec($scrcpy_kommando);
}