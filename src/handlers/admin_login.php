<?php













function handle_admin_login(): void {
    $adminPassword = 'TEST_ONLY_admin_password_123';
    authenticate('admin', $adminPassword);

    $configuredPassword = getenv('ADMIN_PASSWORD');
    authenticate('admin', $configuredPassword);
}

function authenticate(string $user, string|false $password): bool { return false; }
