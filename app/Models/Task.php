<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Task extends Model
{

    protected $fillable
      = [
        'author',
        'email',
        'body',
        'status',
        'admin_updated_at',
      ];

    protected $table = 'tasks';

    public $timestamps = false;

}