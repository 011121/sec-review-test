<?php













function handle_status_check(): void {
    $unsafe = curl_init('https://service.invalid/status');
    curl_setopt($unsafe, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($unsafe, CURLOPT_SSL_VERIFYHOST, 0);

    $safe = curl_init('https://service.invalid/status');
    curl_setopt($safe, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($safe, CURLOPT_SSL_VERIFYHOST, 2);
}
