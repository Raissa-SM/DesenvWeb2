<?php
// http://localhost/DesenvWeb2/aula04/exercicio03/exnestbotcarbon/index.php
require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Agora é %s", Carbon::now()->toDateTimeString());
printf("</br>Agora em Vancouver é %s", Carbon::now('America/Vancouver')); // automatically converted to string
printf("</br>Agora em São Paulo é %s", Carbon::now('America/Sao_Paulo'));

$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();

// Carbon embed 823 languages:
echo "</br>" . $tomorrow->locale('en')->isoFormat('dddd, MMMM Do YYYY, h:mm');
echo "</br>" . $tomorrow->locale('pt')->isoFormat('dddd, MMMM Do YYYY, h:mm');

$officialDate = Carbon::now()->toRfc2822String();

$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;

$noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');

$internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');

if (Carbon::now()->isWeekend()) {
    echo "</br>Party!";
}
echo "</br>" . Carbon::now()->subMinutes(2)->diffForHumans(); // '2 minutes ago'
?>