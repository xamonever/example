
function getStatus(): bool {};
function sendNotification(): void {};

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

