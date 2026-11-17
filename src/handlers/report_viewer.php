<?php













function handle_report_viewer(): void {
    $filename = $_GET['filename'];
    exec('cat ' . $filename);

    if (preg_match('/\A[\w.-]+\z/', $filename) === 1) {
        $handle = fopen('/srv/reports/' . $filename, 'rb');
        if ($handle !== false) fclose($handle);
    }
}
