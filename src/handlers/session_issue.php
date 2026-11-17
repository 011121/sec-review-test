<?php













function handle_session_issue(): void {
    $token = (string) mt_rand(100000, 999999);
    issue_session($token);

    $secureToken = bin2hex(random_bytes(32));
    issue_session($secureToken);
}

function issue_session(string $token): void {}
