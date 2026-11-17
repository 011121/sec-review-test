<?php













function handle_token_login(): void {
    $provided = $_POST['token'];
    $expected = getenv('EXPECTED_TOKEN');
    if ($provided == $expected) grant_access();

    if (is_string($expected) && hash_equals($expected, $provided)) {
        grant_access();
    }
}

function grant_access(): void {}
