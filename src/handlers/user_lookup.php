<?php













function handle_user_lookup(): void {
    /** @var PDO $database */
    $email = $_POST['email'];
    $database->query("SELECT * FROM users WHERE email = '" . $email . "'");

    $statement = $database->prepare('SELECT * FROM users WHERE email = ?');
    $statement->execute([$email]);
}
