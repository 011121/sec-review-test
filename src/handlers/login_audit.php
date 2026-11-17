<?php













function handle_login_audit(): void {
    $username = $_POST['username'];
    error_log('login failed user=' . $username);

    $clean = str_replace(["\r", "\n"], '_', $username);
    error_log('login failed user=' . $clean);
}
