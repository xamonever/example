<?php

$result;

function getStatus(): bool {};
function sendNotification() {};

// Not good
function isReady() {
    if (false === getStatus()) {
        sendNotification();
    }

    return getStatus();
}

// Better
$result = isReady();
if (false === $result) {
    sendNotification();
}

