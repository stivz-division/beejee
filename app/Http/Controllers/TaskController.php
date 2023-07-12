<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Task;

final class TaskController
{

    public function store()
    {
        if (empty($_POST['author']) || empty($_POST['email'])
            || empty($_POST['body'])) {
            $_SESSION['error'] = 'Invalid data';

            header('Location: /');

            return;
        }

        Task::query()->create([
          'author' => $_POST['author'],
          'email'  => $_POST['email'],
          'body'   => $_POST['body'],
        ]);

        $_SESSION['success'] = 'task created!';

        header('Location: /');
    }

    public function update()
    {
        if (empty($_SESSION['is_admin'])) {
            header('Location: /login');

            return;
        }

        if (empty($_POST['body']) || empty($_POST['id'])
            || empty($_POST['status'])) {
            $_SESSION['error'] = 'Invalid data';
            header('Location: ' . $_SERVER['HTTP_REFERER']);

            return;
        }

        $task = Task::query()->find($_POST['id']);

        if (is_null($task)) {
            $_SESSION['error'] = 'Not found task';
            header('Location: ' . $_SERVER['HTTP_REFERER']);

            return;
        }

        $updateData = [
          'body'   => $_POST['body'],
          'status' => $_POST['status'] === 'on',
        ];

        if ($_POST['body'] !== $task->body) {
            $updateData['admin_updated_at'] = date('Y-m-d H-i-s');
        }

        $task->update($updateData);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}