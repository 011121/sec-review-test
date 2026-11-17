<?php













function handle_post_login_redirect(): void {
    $next = $_GET['next'];
    header('Location: ' . $next);

    $routes = ['home' => '/', 'account' => '/account'];
    header('Location: ' . ($routes[$next] ?? '/'));
}
