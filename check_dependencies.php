<?php
$sjekk_scrcpy_dependency = shell_exec('command -v scrcpy 2>&1');
if(empty($sjekk_scrcpy_dependency)){
    echo "Du har ikke scrcpy installert på maskinen din. For at dette scriptet skal funke, må du installere det.";
    exit;
}

$sjekk_avahi_dependency = shell_exec('command -v avahi-browse 2>&1');
if(empty($sjekk_avahi_dependency)){
    echo "Du har ikke avahi installert på maskinen din. For at dette scriptet skal funke, må du installere det.";
    exit;
}