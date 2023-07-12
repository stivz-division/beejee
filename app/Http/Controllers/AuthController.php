<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Src\View\View;

final class AuthController
{

    const DEFAULT_LOGIN = 'admin';

    const DEFAULT_PASSWORD = '1234';

    public function index()
    {
        if (isset($_SESSION['is_admin'])) {
            header('Location: /');

            return;
        }

        View::render('login');

        unset($_SESSION['login_error']);
    }

    public function login()
    {
        $login    = $_POST['login'];
        $password = $_POST['password'];

        if (empty($login) || empty($password) || $login !== self::DEFAULT_LOGIN
            || $password !== self::DEFAULT_PASSWORD) {
            $_SESSION['login_error'] = 'Login Invalid data';
            header('Location: /login');

            return;
        }

        $_SESSION['is_admin'] = true;

        header('Location: /');
    }

    public function logout()
    {
        unset($_SESSION['is_admin']);
        header('Location: /');
    }

}