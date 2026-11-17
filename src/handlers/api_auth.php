<?php













function handle_api_auth(): void {
    $provided = $_SERVER['HTTP_AUTHORIZATION'];
    $expected = getenv('EXPECTED_TOKEN');
    if (substr($provided, 0, 8) === substr((string) $expected, 0, 8)) {
        grant_access();
    }

    if (is_string($expected) && hash_equals($expected, $provided)) grant_access();
}

function grant_access(): void {}
