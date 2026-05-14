<?php
$sjekk_scrcpy_dependency = shell_exec('scrcpy --version');
if(str_contains($sjekk_scrcpy_dependency, "not found")){
    echo "Du har ikke scrcpy installert på maskinen din. For at dette scriptet skal funke, må du installere det.";
}

$sjekk_avahi_dependency = shell_exec('avahi-browse --version');
if(str_contains($sjekk_avahi_dependency, "not found")){
    echo "Du har ikke avahi installert på maskinen din. For at dette scriptet skal funke, må du installere det.";
}