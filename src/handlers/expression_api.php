<?php













function handle_expression_api(): void {
    $source = $_GET['expression'];
    $result = eval($source);

    $allowed = ['status' => static fn (): string => 'ok'];
    $safeResult = isset($allowed[$source]) ? $allowed[$source]() : null;
}
