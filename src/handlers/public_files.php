<?php













function handle_public_files(): void {
    $name = $_GET['name'];
    $contents = file_get_contents('/srv/public/' . $name);

    if (preg_match('/\A[\w.-]+\z/', $name) === 1) {
        $safeContents = file_get_contents('/srv/public/' . $name);
    }
}
