<?php
include "variables.php";

$kommando_for_tilkobling = "adb connect $ip_adresse:$debugging_port";

if(shell_exec($kommando_for_tilkobling)){
    echo "Tilkoblet! \n";
}