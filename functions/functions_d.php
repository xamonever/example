
// Not good
function trySendMess() {
    try {
        sendMessage();
        $status = true;
    } catch (\Exception $exception) {
        $status = false;
    }

    sendNotification();

    return $status;
}

// Better
function trySendMessage() {
    try {
        sendMessage();
    } catch (\Exception $exception) {
        return false;
    }

    return true;
}

$result = trySendMessage();
if ($result) {
    sendNotification();
}