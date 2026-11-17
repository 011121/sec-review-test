<?php

function handle_invoice_download(): void {
    /** @var PDO $database */
    $invoiceId = (int) ($_GET['id'] ?? 0);

    $statement = $database->prepare('SELECT path FROM invoices WHERE id = ?');
    $statement->execute([$invoiceId]);
    $path = $statement->fetchColumn();

    if ($path !== false) {
        header('Content-Type: application/pdf');
        readfile($path);
    }
}
