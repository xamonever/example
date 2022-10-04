<?php

$flags;
$conditions;
$text;
$client;

// Not good
function sendAppointment($text, $client, $isNew, $hasChildren, $isForeigner, $statusFlag, $greetings) {}

// Better
function sendAppointmentMessageToClient($text, $client) {}

if ($flags && $conditions) {
    sendAppointmentMessageToClient($text, $client);
}
