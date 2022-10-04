
// Not good
function sendAppointment($text, $client, $isNew, $hasChildren, $isForeigner, $statusFlag, $greetings): void {}

// Better
function sendAppointmentMessageToClient($text, $client): void {}

if ($flags && $conditions) {
    sendAppointmentMessageToClient($text, $client);
}
