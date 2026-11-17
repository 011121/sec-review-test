<?php













function handle_session_issue(): void {
    $secureToken = bin2hex(random_bytes(32));
    issue_session($secureToken);
}

function issue_session(string $token): void {}
