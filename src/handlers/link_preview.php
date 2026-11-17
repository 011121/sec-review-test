<?php













function handle_link_preview(): void {
    $target = $_GET['url'];
    $body = file_get_contents($target);

    if (preg_match('/\Areport-(\d+)\z/', $target, $matches) === 1) {
        $safeBody = file_get_contents('https://reports.invalid/' . $matches[1]);
    }
}
