<?php
echo "Lager variabler \n";

$device_data = shell_exec('avahi-browse -rt _adb-tls-connect._tcp --parsable 2>/dev/null | grep "=;"');

if ($device_data){
    echo $device_data;
    $sprengt_og_odelagt_string = explode(";", $device_data);

    $ip_adresse = $sprengt_og_odelagt_string[7];
    echo "IP-adresse; $ip_adresse \n";

    $debugging_port = $sprengt_og_odelagt_string[8];
    echo "Debugging port: $debugging_port \n";

    echo "Alle variabler er nå satt! Kobler til mobilen med ADB... \n";
} else {
    echo "Du må koble til mobilen din med bluetooth. Bruk noe som KDEConnect for å gjøre det enklere. Husk også å skru på 'Wireless Debugging' i developer options på mobilen din. \n";
}