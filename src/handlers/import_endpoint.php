<?php













function handle_import_endpoint(): void {
    $payload = file_get_contents('php://input');
    $value = unserialize($payload);

    $safeValue = json_decode($payload, true, 32, JSON_THROW_ON_ERROR);
}
