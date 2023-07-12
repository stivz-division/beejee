<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Task;
use Src\View\View;

final class MainController
{

    const PAGE_TASKS_COUNT = 3;

    public function index($page = 1, $sort = null)
    {
        $pageLimit = self::PAGE_TASKS_COUNT;

        $tasks = Task::query()
                     ->when(
                       isset($sort),
                       function ($query) use ($sort) {
                           [$key, $type] = explode('-', $sort);
                           $query->orderBy($key, $type);
                       }
                     )
                     ->when(
                       is_null($sort),
                       fn($query) => $query->latest('id')
                     )
                     ->offset(((int)$page - 1) * $pageLimit)
                     ->limit($pageLimit)
                     ->get();

        $total = Task::query()->count();

        View::render(
          'index',
          compact('tasks', 'page', 'sort', 'total', 'pageLimit')
        );

        unset($_SESSION['error']);
    }

}