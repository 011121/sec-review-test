<?php













function handle_account_report(): void {
    file_put_contents('/tmp/account-report.txt', 'synthetic report');

    $safePath = tempnam(sys_get_temp_dir(), 'report-');
    if ($safePath !== false) file_put_contents($safePath, 'synthetic report');
}
