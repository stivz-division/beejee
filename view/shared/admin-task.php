<div class="col">
  <div class="card">

    <form action="/task/update" method="post">
      <input type="hidden" name="id" value="<?php
      echo
      $task->id ?>">
      <div class="card-header">
        <div><?php
            echo
            strip($task->author) ?></div>
        <div><?php
            echo
            strip($task->email) ?></div>
      </div>
      <div class="card-body">

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Текст
            задачи</label>
          <textarea class="form-control" name="body"
                    id="exampleFormControlTextarea1" rows="3"
                    required><?php
              echo $task->body ?></textarea>
        </div>

          <?php
          if (isset($task->admin_updated_at)): ?>
            <span class="text-danger">Отредактированно администратором</span>
          <?php
          endif; ?>

      </div>
      <div
        class="card-footer d-flex justify-content-between align-items-center">
        <div class="form-check">
          <input class="form-check-input" type="hidden" value="off"
                 name="status"
                 id="status">
          <input class="form-check-input" type="checkbox" value="on"
                 name="status" id="status"
            <?php
            echo $task->status ? 'checked' : '' ?>
          >
          <label class="form-check-label" for="flexCheckDefault">
            Выполнено
          </label>
        </div>

        <input type="submit" class="btn btn-primary" value="Сохранить">

      </div>
    </form>
  </div>
</div>