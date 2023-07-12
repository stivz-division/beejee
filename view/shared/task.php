<div class="col">
  <div class="card">
    <div class="card-header">
      <div><?php
          echo
          strip($task->author) ?></div>
      <div><?php
          echo
          strip($task->email) ?></div>
    </div>
    <div class="card-body">
        <?php
        echo strip($task->body) ?>
        <?php
        if (isset($task->admin_updated_at)): ?>
          <div class="mt-2 text-danger">Отредактированно администратором</div>
        <?php
        endif; ?>
    </div>
    <div class="card-footer">
      <div><?php
          echo $task->status ? 'Выполнено' : '' ?></div>

    </div>
  </div>
</div>